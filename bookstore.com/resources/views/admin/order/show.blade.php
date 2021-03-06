@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a href="{{route('admin.order')}}" class="btn btn-primary">
                        <b>Danh sách đơn hàng</b>
                    </a>
                </div>
                <br>
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
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá tiền</th>
                                        <th>Thành tiền</th>
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
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->pivot->quantity}}</td>
                                            <td>{{get_currency_vn($product->sale_price)}}</td>
                                            <td><strong>{{get_currency_vn($subtotal)}}</strong></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-right"><b>Tổng tiền: </b>{{get_currency_vn($total)}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection