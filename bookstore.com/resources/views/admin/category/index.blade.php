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
    <div>
      <a href="{{route('admin.category.create')}}" class='btn btn-primary'><b>Tạo Chuyên Mục</b></a>
    </div>
    <br>
    <div class="panel">
    <div class="panel-heading panel-info"><b>Danh Sách Chuyên Mục</b></div>
    <div class='panel-body'>
      <div class="table-reposive">      
        <table class='table table-hover'>
        <thead class='thead-dark'>
          <tr>
            <th scope='row'>#</th>
            <th scope='row'>Chuyên mục</th>
            <th scope='row'>Slug</th>
            <th scope='row'>Thứ tứ ưu tiên</th>
            <th scope='row'>Chuyên mục cha</th>
            <th scope='row' >Khởi tạo</th>
            <th scope='row'>Cập nhật</th>
            <th scope='row'>Tùy chọn</th>
          </tr>
        </thead>

        <tbody>
          @forelse($categories as $category)
            <tr>
              <td scope='row'>{{$category->id}}</td>
              <td>{{$category->name}}</td>
              <td>{{$category->slug}}</td>
              <td style="text-align: center;">{{$category->order}}</td>
              <td style="text-align: center;">{{$category->parent}}</td>
              <td>{{$category->created_at}}</td>
              <td>{{$category->updated_at}}</td>
              <td><a data-toggle='tooltip' title="Chỉnh sửa" href="{{route('admin.category.show', ['id'=>$category->id])}}" class='btn btn-primary'><span class="fas fa-edit"></span></a>
              <a data-toggle='tooltip' title="Xóa" href="{{route('admin.category.delete', ['id'=>$category->id])}}" 
                class='btn btn-danger'
                onclick="event.preventDefault();
                window.confirm('Bạn có chắc chắn muốn xóa chuyên mục {{$category->name}} không?') ?
                document.getElementById('delete-category-{{$category->id}}').submit() : 0;"><span class="fas fa-trash"></span></a>
              <form action="{{route('admin.category.delete',['id'=>$category->id])}}" method='POST' id='delete-category-{{$category->id}}'>
                {{csrf_field()}}
                {{method_field('DELETE')}}
              </form>
            </tr>
          @empty
            <tr>
              <td colspan="5">No Data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
    </div>

      <div class="text-center">{{$categories->links()}}
      </div>
    </div>
  </div>
</div>
@endsection 
