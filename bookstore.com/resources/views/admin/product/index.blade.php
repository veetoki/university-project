@extends('admin.master')
@section('content')
<div class="container">
  <div class="col-md-12">
  @if(session('message'))
    <div class = "alert alert-success" style="margin-top:5%">{!!session('message')!!}</div>
  @endif
  @if(session('error'))
    <div class = "alert alert-danger" style="margin-top:5%">{{session('error')}}</div>
  @endif
    <div>
      <a href="{{route('admin.product.create')}}" class='btn btn-primary'><b>Tạo Đầu Sách</b></a>
    </div>
    <br>
    <div class="panel panel-info">
    <div class="panel-heading"><b>Danh Sách Đầu Sách</b></div>
    <div class='panel-body'>
      <div class="table-reposive">      
        <table class='table table-hover'>
        <thead class='thead-dark'>
          <tr>
            <th scope='row'>#</th>
            <th scope='row'>Tên sách</th>
            <th scope='row'>Mã SKU</th>
            <th scope="row">Tác giả</th>
            <th scope='row'>Giá bán</th>
            <th scope='row'>Số lượng</th>
            <th scope='row' >Hình ảnh</th>
            <th scope='row' >Người đăng</th>
            <th scope='row'>Ngày cập nhật</th>
            <th scope='row' style="min-width: 150px">Tùy chọn</th>
          </tr>
        </thead>

        <tbody>
          @forelse($products as $product)
            <tr>
              <td scope='row'>{{$product->id}}</td>
              <td>{{$product->name}}</td>
              <td>{{$product->code}}</td>
              <td>{{$product->author}}</td>
              <td>{{$product->sale_price}}</td>
              <td>{{$product->quantity}}</td>
              <td>
                @if(!empty($product->image) && file_exists(public_path(get_thumbnail("uploads/$product->image"))))
                    <img src="{{ asset(get_thumbnail("uploads/$product->image",'_100x150'))}}" alt="Image" class="img-responsive img-thumbnail">
                @else
                    <img src="{{ asset("images/no_image_thumb.jpg")}}" alt="No Image" class="img-responsive img-thumbnail">
                @endif
              </td>
              <td>{{$product->user->name}}</td>
              <td>{{$product->updated_at}}</td>
              <td>
                  <a data-toggle='tooltip' title="Đặt sách nổi bật" href="{{route('admin.product.setFeaturedProduct', ['id'=>$product->id])}}" 
                      class="btn btn-{{($product->featured_product ? 'success' : 'default')}}"
                      onclick="event.preventDefault();
                      document.getElementById('featured-product-{{$product->id}}').submit();"><i class="fas fa-eye{{($product->featured_product ? '' : '-slash')}}"></i></a>
              <a data-toggle='tooltip' title="Chỉnh sửa" href="{{route('admin.product.show', ['id'=>$product->id])}}" class='btn btn-primary'><i class="fas fa-edit"></i></a>
              <a data-toggle='tooltip' title="Xóa" href="{{route('admin.product.delete', ['id'=>$product->id])}}" 
                class='btn btn-danger'
                onclick="event.preventDefault();
                window.confirm('Bạn có chắc chắn muốn xóa chuyên mục {{$product->name}} không?') ?
                document.getElementById('delete-product-{{$product->id}}').submit() : 0;"><i class="fas fa-trash"></i></a>
              <form action="{{route('admin.product.delete',['id'=>$product->id])}}" method='POST' id="delete-product-{{$product->id}}">
                {{method_field('DELETE')}}
                {{csrf_field()}}
              </form>
              <form action="{{route('admin.product.setFeaturedProduct',['id'=>$product->id])}}" method='POST' id="featured-product-{{$product->id}}">
                {{method_field('PATCH')}}
                {{csrf_field()}}
              </form>
            </tr>
          @empty
            <tr>
              <td colspan="8"><b>Không có dữ liệu</b></td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
    </div>

      <div class="text-center">{{$products->links()}}
      </div>
    </div>
  </div>
</div>
@endsection 
