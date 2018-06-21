@component('mail::message') 
@component('mail::panel') 
Cảm ơn quý khách {{$order->name}} đã đặt hàng tại Bookstore.com, 
@endcomponent
<p>
    Bookstore.com rất vui thông báo đơn hàng #{{$order->id}} của quý khách đã được tiếp nhận và đang trong quá trình xử lý.
</p>
@php $total = 0; 
@endphp
<div>
    <div style="color:darkturquoise">
        Thông tin khách hàng
    </div>
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
</div>
<br>
<div>
    <div style="color:darkturquoise">
        Chi tiết đơn hàng #{{$order->id}}
    </div>
    <hr> 
@component('mail::table') 
| Tên sản phẩm     | Số lượng   | Đơn giá   | Tổng tạm   |
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
@component('mail::panel') 
Một lần nữa bookstore.com cảm ơn quý khách. 
@endcomponent 
@endcomponent