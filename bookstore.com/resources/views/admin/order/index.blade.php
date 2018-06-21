@extends('admin.master')
@section('content')
<div class="container">
  <div class="col-md-12">
  @if(session('message'))
    <div class = "alert alert-success">{{session('message')}}</div>
  @endif
  @if(session('error'))
    <div class = "alert alert-danger">{{session('error')}}</div>
  @endif

    <br>
    <div class="panel">
    <div class="panel-heading">Danh Sách Đơn Hàng</div>
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
              <a href="{{route('admin.order.show', ['id'=>$order->id])}}" class='btn btn-primary'><i class="fas fa-edit"></i></a>
              <a href="{{route('admin.order.delete', ['id'=>$order->id])}}" 
                class='btn btn-danger'
                onclick="event.preventDefault();
                window.confirm('Bạn có chắc chắn muốn xóa đơn hàng {{$order->name}} không?') ?
                document.getElementById('delete-order-{{$order->id}}').submit() : 0;"><i class="fas fa-trash"></i></a>
              <form action="{{route('admin.order.delete',['id'=>$order->id])}}" method='POST' id="delete-order-{{$order->id}}">
                {{method_field('DELETE')}}
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
</div>
@endsection 
