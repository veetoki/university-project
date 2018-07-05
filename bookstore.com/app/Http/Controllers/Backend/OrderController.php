<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
class OrderController extends Controller
{
    public function __construct() {
     return $this->middleware('auth');
    }

    public function index()
    {
      $data['orders'] = Order::where('status',0)->orderBy('id','desc')->paginate(20);
      $data['confirmedOrders'] = Order::where('status',1)->orderBy('id','desc')->paginate(20);
      $data['deliveredOrders'] = Order::where('status',2)->orderBy('id','desc')->paginate(20);
      return view('admin.order.index',$data);
    }

    public function show($id)
    {
      $data['order'] = Order::find($id);
      if ($data['order'] !== null) {
        return view('admin.order.show',$data);
      }
      return redirect()->route('admin.order.index')->with('error', 'Không tìm thấy đơn hàng này');
    }
    
    public function delete($id)
    {
        $order = Order::find($id);
        if ($order !== null) {
        $order->delete();
        return redirect()->route('admin.order')->with('message', "Xóa đơn hàng $order->name thành công");
        }
        return redirect()->route('admin.order.index')->with('error', "Không tìm thấy đơn hàng này");
    }
    
    public function changeOrderStatus($id)
    {
      $order = Order::find($id);
      if ($order !== null) {
        switch ($order->status) {
          case 0:
            $order->status = 1;
            $message = "Đơn hàng <a href='".route('admin.order')."'>#$order->id</a> đã được xác nhận";
            break;
          case 1:
            $order->status = 2;
            $message = "Đơn hàng <a href='".route('admin.order')."#deliver'>#$order->id</a> đã được vận chuyển";
            break;
          default:
            break;
        }
        $order->save();
        return redirect()
               ->route('admin.order')
               ->with('message', $message);
      }
      return redirect()->route('admin.order')->with('message', "Không tìm thấy đơn hàng này");
    }
}
