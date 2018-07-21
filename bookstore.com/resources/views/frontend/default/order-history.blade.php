@extends('frontend.default.master')
@section('content')
<div class="container col-md-12" style="padding-top: 2%">
    <div class="panel panel-default">
        <div class="panel-heading">Đơn Hàng của tôi</div>
        <div class='panel-body'>
          <div class="table-reposive">      
            <table class='table table-hover'>
            <thead class='thead-dark'>
              <tr>
                <th scope='row'>#</th>
                <th scope='row'>Ngày mua</th>
                <th scope='row'>Sản phẩm</th>
                <th scope='row'>Tổng tiền</th>
                <th scope='row'>Tình trạng đơn hàng</th>
              </tr>
            </thead>
    
            <tbody>
              @forelse($orders as $order)
                <tr>
                  <td scope='row'><a href="{{route('frontend.user.home.orderDetail', ['id' => $order->id])}}">{{$order->id}}</a></td>
                  <td>{{$order->created_at}}</td>
                  <td>{{$productsName[$order->id]}}</td>
                  <td>{{get_currency_vn($ordersTotal[$order->id])}}</td>
                  @switch($order->status)
                      @case(1)
                        <td class="text-info">Đã xác nhận</td>
                        @break
                      @case(2)
                        <td class="text-success">Giao hàng thành công</td>
                        @break
                      @default
                        <td class="text-primary">Đang xử lý</td>
                  @endswitch
                </tr>
              @empty
                <tr>
                  <td colspan="8">Không có dữ liệu</td>
                </tr>
              @endforelse
            </tbody>
          </table>
          </div>
        </div>
        <div class="text-center">{{$orders->links()}}</div>
</div>
</div>

@endsection