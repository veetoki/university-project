@extends('admin.master') @section('content')
<div class="container">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">Tạo Sản Phẩm</div>
            <div class='panel-body'>
                <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group {{$errors->has('name') ? 'has-error' : '' }}">
                        <label for="InputName">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="InputName" name="name" value="{{old('name')}}" placeholder="Nhập vào sản phẩm">
                        <small id="nameHelpBlock" class="form-text text-muted text-danger">
                            {{$errors->first('name')}}
                        </small>
                    </div>
                    <div class="form-group {{$errors->has('code') ? 'has-error' : '' }}">
                        <label for="InputCode">Mã sản phẩm</label>
                        <input type="text" class="form-control" id="InputCode" name="code" value="{{old('code')}}" placeholder="Nhập vào mã sản phẩm">
                        <small id="nameHelpBlock" class="form-text text-muted text-danger">
                            {{$errors->first('code')}}
                        </small>
                    </div>
                    <div class="form-group {{$errors->has('summary') ? 'has-error' : '' }}">
                        <label for="InputSummary">Nội dung</label>
                        <textarea type="content" class="form-control" id="InputSummary" name="summary" placeholder="Nhập vào nội dung" rows="4">{{old('summary')}}</textarea>
                        <small id="nameHelpBlock" class="form-text text-muted text-danger">
                            {{$errors->first('summary')}}
                        </small>
                    </div>
                    <div class="form-group {{$errors->has('regular_price') ? 'has-error' : '' }}">
                        <label for="InputRegularPrice">Giá thị trường</label>
                        <input type="number" min="0" class="form-control" id="InputRegularPrice" name="regular_price" value="{{old('regular_price')}}"
                            placeholder="Nhập vào giá thị trường">
                        <small id="nameHelpBlock" class="form-text text-muted text-danger">
                            {{$errors->first('regular_price')}}
                        </small>
                    </div>
                    <div class="form-group {{$errors->has('sale_price') ? 'has-error' : '' }}">
                        <label for="InputSalePrice">Giá bán</label>
                        <input type="number" min="0" class="form-control" id="InputSalePrice" name="sale_price" value="{{old('sale_price')}}" placeholder="Nhập vào giá bán">
                        <small id="nameHelpBlock" class="form-text text-muted text-danger">
                            {{$errors->first('sale_price')}}
                        </small>
                    </div>
                    <div class="form-group {{$errors->has('original_price') ? 'has-error' : '' }}">
                        <label for="InputOriginalPrice">Giá gốc</label>
                        <input type="number" min="0" class="form-control" id="InputSalePrice" name="original_price" value="{{old('original_price')}}"
                            placeholder="Nhập vào giá gốc">
                        <small id="nameHelpBlock" class="form-text text-muted text-danger">
                            {{$errors->first('original_price')}}
                        </small>
                    </div>
                    <div class="form-group {{$errors->has('quantity') ? 'has-error' : '' }}">
                        <label for="InputQuantity">Số lượng</label>
                        <input type="number" class="form-control" id="InputSalePrice" name="quantity" value="{{old('quantity')}}" placeholder="Nhập vào số lượng">
                        <small id="nameHelpBlock" class="form-text text-muted text-danger">
                            {{$errors->first('quantity')}}
                        </small>
                    </div>
            
                    <div class="form-group {{$errors->has('image') ? 'has-error' : '' }}">
                        <label for="InputImage">Hình sản phẩm</label>
                        <input type="file" class="form-control" id="InputImage" name="image" value="{{old('image')}}">
                        <small id="nameHelpBlock" class="form-text text-muted text-danger">
                            {{$errors->first('image')}}
                        </small>
                    </div>
                    {{--  Thư viện sản phẩm   --}}
                    <div class="form-group {{$errors->has('images.*') ? 'has-error' : '' }}">
                        <label for="InputImages">Thư viện hình ảnh sản phẩm</label>
                        <input type="file" class="form-control" id="InputImages" name="images[]" value="{{old('images')}}" multiple>
                        <small id="nameHelpBlock" class="form-text text-muted text-danger">
                            @php
                                foreach($errors->get('images.*') as $messages){
                                    echo $messages[0] . "<br>";
                                }                         
                            @endphp
                        </small>
                    </div>
                    {{--  {{dd($errors->all())}}  --}}
                    <div class="form-group {{$errors->has('category_id') ? 'has-error' : '' }}">
                        <label for="InputCategoryId">Chuyên mục cha</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @if (count($categories) > 0) @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{old('category_id')==$category->id ? 'selected' : ''}}>{{$category->name}}</option>
                            @endforeach @endif
                        </select>
                        <small id="nameHelpBlock" class="form-text text-muted text-danger">
                            {{$errors->first('category_id')}}
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <select name="tags[]" id="tags" class="form-control" multiple>
                            @if (old('tags')) 
                            @foreach (old('tags') as $tag)
                                <option value="{{$tag}}" selected>{{$tag}}</option>
                            @endforeach 
                            @endif
                        </select>
                    </div>
                    <div id="qh-app" class="form-group">
                        <qh-attributes></qh-attributes>
                    </div>
                    <button type="submit" class="btn btn-primary">Tạo</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection @section('head_styles')
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}" type="text/css" media="screen" title="no title" charset="utf-8"> @endsection @section('body_scripts_bottom')
<script type="text/javascript" src="{{asset("js/vue.js ")}}" charset="utf-8"></script>
<script type="text/javascript" src="{{asset("js/select2.min.js ")}}" charset="utf-8"></script>
<<script type="text/javascript" charset="utf-8">
    $("#tags").select2({ tags: true, tokenSeparators: [',', ' '] })
    </script>
    <script type="text/x-template" id="qh-attributes-template">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Thuộc tính</th>
                    <th>Giá trị</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, key) in attributes">
                    <td>
                        <input type="text" :name="'attributes['+ key +'][name]'" v-model="item.name" class="form-control" placeholder="Thuộc tính">
                    </td>
                    <td>
                        <input type="text" :name="'attributes['+ key +'][value]'" v-model="item.value" class="form-control" placeholder="Giá trị">
                    </td>
                    <td>
                        <button type="button" v-if="key != 0" v-on:click="deleteAttribute(item)" class="btn btn-danger">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" v-if="key == (attributes.length - 1)" v-on:click="addAttribute()" class="btn btn-success">
                            <i class="fas fa-plus"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

    </script>
    <script type="text/javascript">
        @php
        $attributes = old('attributes') ? json_encode(old('attributes')) : null;
        @endphp
        Vue.component('qh-attributes', {
            template: '#qh-attributes-template',
            data: function () {
                var attributes = [{
                    name: '',
                    value: ''
                }];
                @if($attributes)
                attributes = {!! $attributes !!};
                @endif
                return {
                    attributes: attributes
                };
            },
            methods: {
                addAttribute: function () {
                    this.attributes.push({
                        name: '',
                        value: ''
                    });
                },
                deleteAttribute: function (item) {
                    this.attributes.splice(this.attributes.indexOf(item), 1);
                }
            }
        });
        new Vue({
            el: '#qh-app'
        });
    </script>
    @endsection