@extends('frontend.default.master')
@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('frontend.home.productIndex')}}" method="get" id="orderby">
            @if ($keyword = Request::input('search'))
              <input type="hidden" name="search" value="{{$keyword}}">
            @endif

            @if ($category = Request::input('category'))
              <input type="hidden" name="category" value="{{$category}}">
            @endif
            <select name="orderBy" onchange="document.getElementById('orderby').submit();">
                <option value="newest" {{Request::input('orderBy') == 'newest' ? 'selected' : ''}}>Mới nhất</option>
                <option value="oldest" {{Request::input('orderBy') == 'oldest' ? 'selected' : ''}}>Cũ nhất</option>
                <option value="expensive" {{Request::input('orderBy') == 'expensive' ? 'selected' : ''}}>Giá từ cao đến thấp</option>
                <option value="cheapest" {{Request::input('orderBy') == 'cheapest' ? 'selected' : ''}}>Giá từ thấp đến cao</option>
            </select>
        </form>
        <br>
        @if (isset($keyword))
            <h3 class="text">Bạn đang tìm kiếm với từ khóa "{{Request::input('search')}}"</h3>
        @endif
        <br>
        <div class="product-grid-holder">
            @forelse($products as $product)
                <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                    <div class="product-item">
                        {{--<div class="ribbon red"><span>sale</span></div>--}}
                        {{--<div class="ribbon green"><span>bestseller</span></div>--}}
                        {{--<div class="ribbon blue"><span>new</span></div>--}}

                        <div class="image">
                            @if (!empty($product->image) && file_exists(public_path(get_thumbnail("uploads/$product->image"))))
                                <img src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                     data-echo="{{ asset(get_thumbnail("uploads/$product->image")) }}"
                                     alt="Image">
                            @else
                                <img src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                     data-echo="{{ asset('images/no_image_thumb.jpg') }}"
                                     alt="No Image">
                            @endif
                        </div>
                        <div class="body">
                            {{--<div class="label-discount green">-50% sale</div>--}}
                            <div class="title">
                                 <a href="{{ route('frontend.home.show', ['slug' => str_slug($product->name), 'id' => $product->id ])}}">{{ $product->name }}</a> 
                            </div>
                            <div class="brand">{{ $product->code }}</div>
                        </div>
                        <div class="prices">
                            <div class="price-prev">{{ number_format($product->regular_price, 0, ',', '.') }}</div>
                            <div class="price-current pull-right">{{ number_format($product->sale_price, 0, ',', '.') }}</div>
                        </div>

                        <div class="hover-area">
                            <div class="add-cart-button">
                                <a href="single-product.html" class="le-button" v-on:click="addToCart({{$product->id}} , $event)">Thêm giỏ hàng</a>
                            </div>
                            {{--<div class="wish-compare">--}}
                            {{--<a class="btn-add-to-wishlist" href="#">add to wishlist</a>--}}
                            {{--<a class="btn-add-to-compare" href="#">compare</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            @empty
                <div>Không có dữ liệu</div>
            @endforelse
        </div>
    </div>

    @php
        $uriArr = [];
        if($keyword = Request::input('search')){
            $uriArr['search'] = $keyword;
        }
        if($category = Request::input('category')){
            $uriArr['category'] = $category;
        }
        if($orderBy = Request::input('orderBy')){
            $uriArr['orderBy'] = $orderBy;
        }
    @endphp

    <div class="text-center">
        {{$products->appends($uriArr)->links()}}
    </div>
</div>
@endsection