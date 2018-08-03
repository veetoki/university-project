@extends('frontend.default.master')
@section('content')
<div class="container" style="padding-top: 2%">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Thông báo</b></div>
                    <div class="panel-body">
                        <p>Xin chào <b>{{$order->users->name}},</b></p>
                        @if($order->status < 2)
                            <p>Đơn hàng của quý khách dự kiến sẽ được giao vào ngày <b>{{date('d/m/Y',strtotime($order->created_at->addDays(2)))}}</b>.</p>
                        @else
                            <p>Chúng tôi vừa bàn giao đơn hàng của quý khách đến đối tác vận chuyển.</p>
                            <p>Đơn hàng của quý khách dự kiến sẽ được giao vào ngày hôm nay <b>{{date('d/m/Y')}}</b>.</p>
                        @endif
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <b>Thông tin khách hàng</b>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <label class="col-md-2">Họ tên khách hàng: </label>
                            <div class="col-md-10">{{$order->name}}</div>
                        </div>

                        <div class="row">
                            <label class="col-md-2">Địa chỉ: </label>
                            <div class="col-md-10">{{$order->address}}</div>
                        </div>

                        <div class="row">
                            <label class="col-md-2">Số điện thoại: </label>
                            <div class="col-md-10">{{$order->phone}}</div>
                        </div>

                        <div class="row">
                            <label class="col-md-2">Email: </label>
                            <div class="col-md-10">{{$order->email}}</div>
                        </div>

                        <div class="row">
                            <label class="col-md-2">Tài khoản: </label>
                            @if ($order->user_id !== null)
                                <div class="col-md-10">{{$order->users->name}} ({{$order->users->email}})</div>
                            @else
                                <div class="col-md-10">Không</div>
                            @endif
                        </div>
                    </div>
                </div>

                <br>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <b>Thông tin sản phẩm</b>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th style="text-align: center">Số lượng</th>
                                        <th style="text-align: center">Giá tiền</th>
                                        <th style="text-align: center">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total = 0
                                    @endphp
                                    @foreach ($order->products as $product)
                                    @php
                                        $subtotal = $product->pivot->quantity * $product->sale_price;
                                        $total += $subtotal;
                                    @endphp
                                        <tr>
                                            <td>
                                                <div class="thumb">
                                                    @if (!empty($product->image) && file_exists(public_path(get_thumbnail("uploads/$product->image","_40x60"))))
                                                        <img src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                                        data-echo="{{ asset(get_thumbnail("uploads/$product->image",'_40x60')) }}"
                                                        alt="Image"
                                                        class='img-thumbnail'>
                                                    @else
                                                        <img src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                                             data-echo="{{ asset('images/no_image_80x80.jpg') }}"
                                                             alt="No Image">
                                                    @endif
                                                    <a class="text-dark" href="{{route('frontend.home.show', ['slug' => str_slug($product->name), 'id' => $product->id])}}">{{$product->name}}</a>
                                                </div>                                
                                            </td>
                                            <td style="text-align : center; vertical-align: middle;">{{$product->pivot->quantity}}</td>
                                            <td style="text-align : center; vertical-align: middle;">{{get_currency_vn($product->sale_price)}}</td>
                                            <td style="text-align : center; vertical-align: middle;"><strong>{{get_currency_vn($subtotal)}}</strong></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                <div class="panel-footer text-right"><b>Tổng tiền: </b>{{get_currency_vn($total)}}</div>
            </div>
        </div>
    </div>
</div>
@endsection