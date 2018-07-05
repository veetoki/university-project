<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Validator;
use App\Comment;
use Illuminate\Support\Facades\DB;
use App\Category;
use Illuminate\Support\Facades\View;
use App\Order;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        View::share('categories',$this->createCategories(Category::orderBy('name', 'desc')->get()));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['products'] = Product::orderBy('id','desc')->limit(12)->get();
        $data['featured_products'] = Product::where('featured_product',1)->orderBy('id','desc')->limit(4)->get();
        $recent_products = array_map('intval',explode(",",$request->cookie('recent_products'))) ;
        // $data['best_sellers'] = DB::select(DB::raw(
        //     'select p.id, p.code, p.name, p.sale_price, p.image, sum(po.quantity) as sold 
        //     from product_order as po, products as p 
        //     where po.product_id = p.id 
        //     group by p.id 
        //     order by sold desc
        //     limit 7'
        // ));
        $data['best_sellers'] = Product::
        select(Db::raw('id, name, code, sale_price, image, sum(product_order.quantity) as sold'))
        ->join('product_order', 'product_order.product_id', '=' , 'products.id')
        ->groupBy('id')
        ->orderByRaw('sum(quantity) DESC')
        ->take(7)
        ->get();    
        if (is_array($recent_products)) {
            $data['recent_products'] = Product::whereIn('id', $recent_products)->limit(6)->get();     
        }
        else{
            $data['recent_products'] = [];
        }
        
        return view('frontend.default.index',$data);
    }
    public function show(Request $request, $slug, $id)
    {
        $data['product'] = Product::find($id);      
       
        $recent_products =  $request->cookie('recent_products') !== null ? $request->cookie('recent_products') : null;
        $id = strval($id);
        if (strpos($recent_products,$id) === false) {
            $recent_products = $id .','. $recent_products;
        }
        $cookie = cookie('recent_products', $recent_products , 1440);
        $recent_products = array_map('intval',explode(",",$recent_products)) ;
        $data['recent_products'] = Product::whereIn('id', $recent_products)->limit(6)->get();     
        return response()->view('frontend.default.single-product',$data)->cookie($cookie);
    } 

    public function comment(Request $request, $slug, $id)
    {
        $valid = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email',
                'content' => 'required',
                'score' =>'required|between:1,5',
            ],
            [
                'name.required' => 'Vui lòng nhập vào tên của bạn',
                'email.required' => 'Vui lòng nhập vào email của bạn',
                'email.email' => 'Vui lòng nhập đúng định dạng email',
                'content.required' => 'Vui lòng nhập vào nội dung đánh giá',
                'score.required' => 'Vui lòng đánh giá cho sản phẩm',
                'score.between' => 'Vui lòng đánh giá điểm từ :min đến :max',
            ]
        );

        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        }
        else{
            Comment::create(
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'rating' => $request->input('score'),
                    'content' => $request->input('content'),
                    'product_id' => $id,
                ]
            );
        }
        return redirect()->back()->with('message', 'Bạn đã đánh giá thành công');
    }

    public function productIndex(Request $request)
    {
        $products = Product::orderBy('id', 'desc');
        if ($orderBy = $request->input('orderBy')) {
            switch ($orderBy) {
                case 'newest':
                    $products = Product::orderBy('id', 'desc');
                    break;
                case 'oldest':
                    $products = Product::orderBy('id', 'asc');
                    break;
                case 'expensive':
                    $products = Product::orderBy('sale_price', 'desc');
                    break;
                case 'cheapest':
                    $products = Product::orderBy('sale_price', 'asc');
                    break;
                default:
                    break;
            }
        }
        if ($keywork = $request->input('search')) {
            $products->where(function($query) use($keywork){
                $query->where('name', 'like', "%$keywork%");
                $query->orWhere('code', 'like', "%$keywork%");
            });
        }

        if ($category = $request->input('category')) {
            $products->where('category_id', $category);
        }
        $data['products'] = $products->paginate(20);
        return view('frontend.default.products', $data);
    }

    public function createCategories($categories) 
    {
        $newArr = [];
        if (count($categories) > 0) {
            foreach ($categories as $category) {
                $newArr[$category->parent][] = $category;
            }
        }
        return $newArr;
    }

    public function orderHistory($id)
    {
        $total = 0;
        $ordersId = User::find($id)->orders()->pluck('id');
        foreach ($ordersId as $orderId) {
            $names[$orderId] = Order::find($orderId)->products()->pluck('name');
            $productsName[$orderId] =  implode(', ',$names[$orderId]->toArray());
            $products[$orderId] = Order::find($orderId)->products;
        }
        foreach ($products as $key => $product) {
            foreach ($product as $price) {
                $total += $price->pivot->quantity * $price->sale_price;
            }
            $ordersTotal[$key] = $total;
            $total = 0;
        }
        // dd($tempTotal);
        $data['orders'] = User::find($id)->orders()->orderBy('id','desc')->paginate(5);
        $data['productsName'] = $productsName;
        $data['ordersTotal'] = $ordersTotal;
        return view('frontend.default.order-history',$data);
    }

    public function orderDetail($id)
    {
       $data['order'] = Order::find($id);
       return view('frontend.default.order-detail', $data);
    }
}
