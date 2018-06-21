<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Cookie;
    class CartController extends Controller 
    {
        public function __construct()
        {
            
        }
        public function index(Request $request)
        {
            $cartDecode = Cookie::has('cart') ? json_decode($request->cookie('cart') , true) : null;
            $cart = is_array($cartDecode) ? $cartDecode : [];
            if (count($cart)) {
                // Tính tổng tiền
                $sumPrice = 0;
                foreach ($cart as $value) {
                    $sumPrice += $value['quantity'] * $value['price'];
                }
                $data = [
                    'cart' => $cart,
                    'total' => count($cart),
                    'sumPrice' => number_format($sumPrice, 0, ',', '.')
                ];
                return view('frontend.default.cart', $data);
            }
            return redirect()->route('frontend.home.index');
        }

        public function updateCart(Request $request)
        {
            $cartDecode = Cookie::has('cart') ? json_decode($request->cookie('cart') , true) : null;
            $cart = is_array($cartDecode) ? $cartDecode : [];
            foreach ($request->input('cart') as $key => $quantity) {
                if (isset($cart[$key]) && $quantity > 0) {
                    $cart[$key]['quantity'] = $quantity;
                }elseif (isset($cart[$key])) {
                    unset($cart[$key]);
                }
            }
            $cookie = cookie('cart', json_encode($cart), 720);
            return redirect()->route('frontend.cart.index')->cookie($cookie);
        }
        public function deleteCart(Request $request, $id)
        {
            $cartDecode = Cookie::has('cart') ? json_decode($request->cookie('cart') , true) : null;
            $cart = is_array($cartDecode) ? $cartDecode : [];
            if (isset($cart[$id])) {
                unset($cart[$id]);
            }
            $cookie = cookie('cart', json_encode($cart), 720);
            return redirect()->route('frontend.cart.index')->cookie($cookie);
        }
        public function deleteAll()
        {
            $cookie = cookie('cart', null, 720);
            return redirect()->route('frontend.cart.index')->cookie($cookie);
        }
        public function addToCart(Request $request)
        {
            $id = $request->input('id');
            if ($request->ajax() && is_numeric($id)) {
                $product = Product::find($id);
                if ($product !== null) {
                    $cartDecode = Cookie::has('cart') ? json_decode($request->cookie('cart') , true) : null;
                    $cart = is_array($cartDecode) ? $cartDecode : [];
                    if (!array_key_exists($id,$cart)) {
                        $cart[$id] = [
                            'name' => $product->name,
                            'image' => $product->image ? asset("uploads/$product->image") : asset("images/no_image_80x80.jpg"),
                            'price' => $product->sale_price,
                            'quantity' => is_numeric($request->input('quantity')) && $request->input('quantity') > 0 ? $request->input('quantity') : 1,
                        ];
                    }else {
                        $cart[$id]['quantity'] += is_numeric($request->input('quantity')) && $request->input('quantity') > 0 ? $request->input('quantity') : 1;
                    }
                    $cookie = cookie('cart' , json_encode($cart) , 720);
                }
                // Tính tổng tiền
                $sumPrice = 0;
                foreach ($cart as $value) {
                    $sumPrice += $value['quantity'] * $value['price'];
                }
            }
            return response()->json([
                'message' => 'Đã thêm vào giỏ hàng thành công',
                'total' => count($cart),
                'sumPrice' => number_format($sumPrice, 0, ',', '.'),
                'cart' => $cart
            ])->cookie($cookie);
        }

        public function getCart(Request $request)   
        {
            $cartDecode = Cookie::has('cart') ? json_decode($request->cookie('cart') , true) : null;
            $cart = is_array($cartDecode) ? $cartDecode : [];
            // Tính tổng tiền
            $sumPrice = 0;
            foreach ($cart as $key => $value) {
                $sumPrice += $value['quantity'] * $value['price'];
                $cart[$key]['price'] = number_format($cart[$key]['price'], 0, ',', '.');
            }
            return response()->json([
                'cart' => $cart,
                'total' => count($cart),
                'sumPrice' => number_format($sumPrice, 0, ',', '.')
            ]);
        }
    }

    
    
?>