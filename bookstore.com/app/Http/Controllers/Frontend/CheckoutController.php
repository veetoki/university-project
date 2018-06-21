<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpKernel\Exception\UnsupportedMediaTypeHttpException;
use Illuminate\Support\Facades\Validator;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmation;
    class CheckoutController extends Controller 
    {
        public function __construct()
        {
            
        }
        
        public function index(Request $request)
        {
            $cartTemp = Cookie::has('cart') ? $request->cookie('cart') : null;
            $cart = $cartTemp !== null ? json_decode($cartTemp,true) : [];
            $data['products'] = [];
            $data['total'] = 0;
            // dd(is_array(json_decode($request->cookie('cart'))));
            if (count($cart) > 0) {
                $products = Product::whereIn('id', array_keys($cart))->get();
                $total = 0;
                foreach ($products as  $product) {
                    if (array_key_exists($product->id, $cart)) {
                        $product->quantity = $cart[$product->id]['quantity'];
                        $product->subtotal = $product->quantity * $product->sale_price;
                        $total += $product->subtotal;
                        if ($cart[$product->id]['name'] !== $product->name) {
                            $cart[$product->id]['name'] = $product->name;
                        }
                    }else{
                        unset($cart[$product->id]);
                    }
                }
                $data['products'] = $products;
                $data['total'] = $total;
                
            }else{
                return redirect()->route('frontend.home.index');
            }
            
            $cookie = cookie('cart', json_encode($cart), 720);
            return response()->view('frontend.default.checkout',$data)->cookie($cookie);
        }

        public function placeOrder(Request $request)
        {
            $cartDecode = Cookie::has('cart') ? json_decode($request->cookie('cart'), true) : null;
            $cart = $cartDecode !== null ? $cartDecode : [];
            if (count($cart) > 0) {
                $valid = Validator::make($request->all(),
                [
                    'name' => 'required',
                    'email' =>'required|email',
                    'phonenumber' =>'required|numeric',
                    'address' => 'required'
                ],
                [
                    'name.required' => 'Vui lòng nhập vào họ tên',
                    'email .required' => 'Vui lòng nhập vào email',
                    'email.email' => 'Vui lòng nhập đúng định dạng email',
                    'address.required' => 'Vui lòng nhập vào địa chỉ',
                    'phonenumber.required' => 'Vui lòng nhập vào số điện thoại',
                    'phonenumber.numeric' => 'Vui lòng nhập đúng định dạng số điện thoại'
                ]);
   
                if ($valid->fails()) {
                    return redirect()->back()->withErrors($valid)->withInput();
                }else {
                    $order = Order::create([
                        'name' => $request->input('name'),
                        'address' => $request->input('address'),
                        'email' => $request->input('email'),
                        'phone' => $request->input('phonenumber'),
                        'user_id' => Auth::check() ? Auth::id() : null
                    ]);
                    $products = Product::whereIn('id', array_keys($cart))->get();
                    $productIDs = [];
                    foreach ($products as $product) {
                        
                        if (array_key_exists($product['id'],$cart)) {
                            $productIDs[$product['id']] = [
                                'quantity' => $cart[$product['id']]['quantity']
                            ];
                        }
                        
                    }
                    $order->products()->sync($productIDs);
                    
                    // Gửi mail
                    Mail::to($order->email)
                        ->send(new OrderConfirmation($order));

                    $cookie = cookie('cart', null , 720);
                    return  redirect()->route('frontend.checkout.thankYou')->with('orderID', $order->id)->cookie($cookie);
                }
            }
            return redirect()->route('frontend.home.index');
           
            
        }

        public function thankYou()
        {
            return view('frontend.default.thankyou');
        }
    }

    
    
?>