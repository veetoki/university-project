@extends('admin.master')
@section('content')
<div class="container">
  <div class="col-md-12">
  @if(session('message'))
    <div class = "alert alert-success">{!!session('message')!!}</div>
  @endif
  @if(session('error'))
    <div class = "alert alert-danger">{{session('error')}}</div>
  @endif

    <br>

    <ul class="nav nav-tabs" style="min-width:750px">
      <li class="nav-item "><a id="nav-neworder-tab" class="bg-info nav-link active" data-toggle="tab" href="#neworder"><b>Đơn hàng mới</b></a></li>
      <li class="nav-item "><a id="nav-orderconfirm-tab" class="bg-info nav-link" data-toggle="tab" href="#orderconfirm"><b>Đơn hàng được xác nhận</b></a></li>
      <li class="nav-item "><a id="nav-deliver-tab" class="bg-info nav-link" data-toggle="tab" href="#deliver"><b>Vận chuyển</b></a></li>
    </ul>

    <div class="tab-content">
      <!-- Tab đơn hàng mới -->
      <div id="neworder" class="tab-pane active">
          <div class="panel panel-warning">
              <div class="panel-heading"><b>Danh Sách Đơn Hàng</b></div>
              <div class='panel-body'>
                <div class="table-reposive">      
                  <table class='table table-hover'>
                  <thead class='thead-dark'>
                    <tr>
                      <th scope='row'>#</th>
                      <th scope='row'>Tên khách hàng</th>
                      <th scope='row'>Địa chỉ</th>
                      <th scope='row'>Email</th>
                      <th scope='row'>Số điện thoại</th>
                      <th scope='row' >Tài khoản</th>
                      <th scope='row'>Ngày cập nhật</th>
                      <th scope='row' style="min-width: 150px">Chức năng</th>
                    </tr>
                  </thead>
          
                  <tbody>
                    @forelse($orders as $order)
                      <tr>
                        <td scope='row'>{{$order->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->phone}}</td>
                        <td>
                          @if($order->user_id !== null)
                            <i class="text-success fas fa-check"></i>
                          @else
                          <i class="text-danger fas fa-times"></i>
                          @endif
                        </td>
                        <td>{{$order->updated_at}}</td>
                        <td>
                        <a data-toggle="tooltip" title="Xác nhận" href="{{route('admin.order.changeOrderStatus', ['id'=>$order->id])}}" 
                           class='btn btn-success' 
                           onclick="event.preventDefault();
                           document.getElementById('change-status-order-{{$order->id}}').submit();"><i class="fas fa-check"></i></a>
                        
                        <a data-toggle="tooltip" title="Thông tin đơn hàng" href="{{route('admin.order.show', ['id'=>$order->id])}}" class='btn btn-primary'><i class="fas fa-info-circle"></i></a>
                        <a data-toggle="tooltip" title="Xóa" href="{{route('admin.order.delete', ['id'=>$order->id])}}" 
                          class='btn btn-danger'
                          onclick="event.preventDefault();
                          window.confirm('Bạn có chắc chắn muốn xóa đơn hàng {{$order->name}} không?') ?
                          document.getElementById('delete-order-{{$order->id}}').submit() : 0;"><i class="fas fa-trash"></i></a>
                        <form action="{{route('admin.order.delete',['id'=>$order->id])}}" method='POST' id="delete-order-{{$order->id}}">
                          {{method_field('DELETE')}}
                          {{csrf_field()}}
                        </form>
                        <form action="{{route('admin.order.changeOrderStatus',['id'=>$order->id])}}" method='POST' id="change-status-order-{{$order->id}}">
                          {{method_field('PATCH')}}
                          {{csrf_field()}}
                        </form>
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
          
                <div class="text-center">{{$orders->links()}}
                </div>
          </div>
      </div>
      <!-- Kết thúc Tab đơn hàng mới -->

      <!-- Tab đơn hàng được xác nhận -->
      <div id="orderconfirm" class="tab-pane">
          <div class="panel panel-primary">
              <div class="panel-heading"><b>Danh Sách Đơn Hàng</b></div>
              <div class='panel-body'>
                <div class="table-reposive">      
                  <table class='table table-hover'>
                  <thead class='thead-dark'>
                    <tr>
                      <th scope='row'>#</th>
                      <th scope='row'>Tên khách hàng</th>
                      <th scope='row'>Địa chỉ</th>
                      <th scope='row'>Email</th>
                      <th scope='row'>Số điện thoại</th>
                      <th scope='row' >Tài khoản</th>
                      <th scope='row'>Ngày cập nhật</th>
                      <th scope='row' style="min-width: 150px">Chức năng</th>
                    </tr>
                  </thead>
          
                  <tbody>
                    @forelse($confirmedOrders as $order)
                      <tr>
                        <td scope='row'>{{$order->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->phone}}</td>
                        <td>
                          @if($order->user_id !== null)
                            <i class="text-success fas fa-check"></i>
                          @else
                          <i class="text-danger fas fa-times"></i>
                          @endif
                        </td>
                        <td>{{$order->updated_at}}</td>
                        <td>
                        <a data-toggle="tooltip" title="Xác nhận" href="{{route('admin.order.changeOrderStatus', ['id'=>$order->id])}}" 
                           class='btn btn-success' 
                           onclick="event.preventDefault();
                           document.getElementById('change-status-order-{{$order->id}}').submit();"><i class="fas fa-check"></i></a>
                        
                        <a data-toggle="tooltip" title="Xem thông tin đơn hàng" href="{{route('admin.order.show', ['id'=>$order->id])}}" class='btn btn-primary'><i class="fas fa-info-circle"></i></a>
                        <a data-toggle="tooltip" title="Xóa" href="{{route('admin.order.delete', ['id'=>$order->id])}}" 
                          class='btn btn-danger'
                          onclick="event.preventDefault();
                          window.confirm('Bạn có chắc chắn muốn xóa đơn hàng {{$order->name}} không?') ?
                          document.getElementById('delete-order-{{$order->id}}').submit() : 0;"><i class="fas fa-trash"></i></a>
                        <form action="{{route('admin.order.delete',['id'=>$order->id])}}" method='POST' id="delete-order-{{$order->id}}">
                          {{method_field('DELETE')}}
                          {{csrf_field()}}
                        </form>
                        <form action="{{route('admin.order.changeOrderStatus',['id'=>$order->id])}}" method='POST' id="change-status-order-{{$order->id}}">
                          {{method_field('PATCH')}}
                          {{csrf_field()}}
                        </form>
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
          
                <div class="text-center">{{$confirmedOrders->links()}}
                </div>
          </div>
      </div>
      <!--  Kết thúc Tab đơn hàng được xác nhận -->

      <!-- Tab vận chuyển -->
      <div id="deliver" class="tab-pane">
          <div class="panel panel-success">
              <div class="panel-heading"><b>Danh Sách Đơn Hàng</b></div>
              <div class='panel-body'>
                <div class="table-reposive">      
                  <table class='table table-hover'>
                  <thead class='thead-dark'>
                    <tr>
                      <th scope='row'>#</th>
                      <th scope='row'>Tên khách hàng</th>
                      <th scope='row'>Địa chỉ</th>
                      <th scope='row'>Email</th>
                      <th scope='row'>Số điện thoại</th>
                      <th scope='row' >Tài khoản</th>
                      <th scope='row'>Ngày cập nhật</th>
                      <th scope='row' style="min-width: 150px">Chức năng</th>
                    </tr>
                  </thead>
          
                  <tbody>
                    @forelse($deliveredOrders as $order)
                      <tr>
                        <td scope='row'>{{$order->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->phone}}</td>
                        <td>
                          @if($order->user_id !== null)
                            <i class="text-success fas fa-check"></i>
                          @else
                          <i class="text-danger fas fa-times"></i>
                          @endif
                        </td>
                        <td>{{$order->updated_at}}</td>
                        <td>
                        
                        <a data-toggle="tooltip" title="Xác nhận" href="{{route('admin.order.show', ['id'=>$order->id])}}" class='btn btn-primary'><i class="fas fa-info-circle"></i></a>
                        <a data-toggle="tooltip" title="Xóa" href="{{route('admin.order.delete', ['id'=>$order->id])}}" 
                          class='btn btn-danger'
                          onclick="event.preventDefault();
                          window.confirm('Bạn có chắc chắn muốn xóa đơn hàng {{$order->name}} không?') ?
                          document.getElementById('delete-order-{{$order->id}}').submit() : 0;"><i class="fas fa-trash"></i></a>
                        <form action="{{route('admin.order.delete',['id'=>$order->id])}}" method='POST' id="delete-order-{{$order->id}}">
                          {{method_field('DELETE')}}
                          {{csrf_field()}}
                        </form>
                        <form action="{{route('admin.order.changeOrderStatus',['id'=>$order->id])}}" method='POST' id="change-status-order-{{$order->id}}">
                          {{method_field('PATCH')}}
                          {{csrf_field()}}
                        </form>
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
          
                <div class="text-center">{{$deliveredOrders->links()}}
                </div>
          </div>

      </div>
      <!-- Kết thúc tab vận chuyển -->
    </div>
    
  </div>
</div>
@endsection 

