@component('mail::message') 
<h2>Đơn hàng #{{$order->id}} đã sẵn sàng để giao đến quý khách {{$order->name}}</h2> 
<p>
        Chúng tôi vừa bàn giao đơn hàng của quý khách đến đối tác vận chuyển. 
        Đơn hàng của quý khách sẽ được giao trong ngày hôm nay {{date('d/m/Y')}}
</p>

@if($order->user_id !== null)
@php
    $url = route('frontend.user.home.orderHistory', ['id' => $order->user_id]);
@endphp
@component('mail::button', ['url' => $url, 'color' => 'blue'])
Xem chi tiết đơn hàng
@endcomponent
@endif
@php 
    $total = 0; 
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
<b>Một lần nữa bookstore.com cảm ơn quý khách,</b>
<div><h3 style="text-align:right; color:#3498db;">Bookstore.com</h3></div> 
@endcomponent