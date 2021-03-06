@component('mail::message') 
<img src="{{URL::to('public/themes/default/assets/images/logo.svg')}}" alt="">
<h2>Cảm ơn quý khách {{$order->name}} đã đặt hàng tại Bookstore.com,</h2> 
<p>
    Bookstore.com rất vui thông báo đơn hàng #{{$order->id}} của quý khách đã được tiếp nhận và đang trong quá trình xử lý.
    Tiki sẽ thông báo đến quý khách ngay khi hàng chuẩn bị được giao.
</p>
@php $total = 0; 
@endphp
<div>
    <h3 style="color:darkturquoise">
        Thông tin khách hàng
    </h3>
    <hr>
    <div>
        <div>
            <label>Họ tên khách hàng: </label>
            <span>{{$order->name}}</span>
        </div>

        <div>
            <label>Địa chỉ: </label>
            <span>{{$order->address}}</span>
        </div>

        <div>
            <label>Số điện thoại: </label>
            <span>{{$order->phone}}</span>
        </div>

        <div>
            <label>Email: </label>
            <span>{{$order->email}}</span>
        </div>
    </div>
    <br>
    <div>
        <label><b>Pương thức thanh toán:</b></label> Thanh toán tiền mặt khi nhận hàng 
    </div>
    <div>
        <label><b>Thời gian giao hàng dự kiến:</b></label> dự kiến giao hàng vào {{date('d/m/Y',strtotime($order->created_at->addDays(2)))}} 
    </div>
</div>
<br>
<div>
    <h3 style="color:darkturquoise">
        Chi tiết đơn hàng #{{$order->id}}
    </h3>
@component('mail::table') 
| Tên sản phẩm   | Số lượng   | Đơn giá   | Tổng tạm  |
|------------------|:----------:|:---------:|:----------:|
@foreach ($products as $product)
    @php
        $subtotal = $product->pivot->quantity * $product->sale_price;
        $total += $subtotal;
    @endphp
| {{$product->name}} | {{$product->pivot->quantity}} | {{get_currency_vn($product->sale_price)}} | {{get_currency_vn($subtotal)}} |
@endforeach
@endcomponent
    <div style="text-align: right;">
        <b>Tổng tiền: </b>{{get_currency_vn($total)}}
    </div>
</div>
<br> 
@if($order->user_id !== null)
    @php
        $url = route('frontend.user.home.orderDetail', ['id' => $order->user_id]);
    @endphp
@component('mail::button', ['url' => $url, 'color' => 'blue'])
Xem chi tiết đơn hàng
@endcomponent
@endif

<b>Một lần nữa bookstore.com cảm ơn quý khách.</b>
<div><h3 style="text-align:right; color:#3498db;">Bookstore.com</h3></div> 
@endcomponent