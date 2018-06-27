@extends('frontend.default.master')
@section('content')
    <div id="top-banner-and-menu">
        <div class="container">

            <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown">
                    <div class="head"><i class="fa fa-list"></i> all departments</div>
                    <nav class="yamm megamenu-horizontal" role="navigation">
                        @if (count($categories[0]) > 0)
                            @foreach ($categories[0] as $category)
                                @if ($category->id !== 1)
                                <ul class="nav">
                                        <li class="dropdown menu-item">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$category->name}}</a>
                                            @if (isset($category->id))
                                                <ul class="dropdown-menu">
                                                        <li class="yamm-content">
                                                            <div class="row">
                                                                @foreach ($categories[$category->id] as $childCategory)
                                                                {{--  <div class="col-md-4">  --}}
                                                                        <ul class="list-unstyled">
                                                                            <li><a href="{{route('frontend.home.productIndex',['category' => $childCategory->id])}}">{{$childCategory->name}}</a></li>
                                                                        </ul>
                                                                {{--  </div>  --}}
                                                                @endforeach
                                                            </div>
                                                        </li>
                    
                                                    </ul>
                                            @endif
                                            
                                        </li><!-- /.menu-item -->
                                    </ul><!-- /.nav -->
                                @endif
                                
                            @endforeach
                        @endif
        
                        
                    </nav><!-- /.megamenu-horizontal -->
                </div><!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->
            </div><!-- /.sidemenu-holder -->

            <div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                        <div class="item"
                             style="background-image: url({{ asset('themes/default/assets/images/sliders/slider01.jpg') }});">
                            <div class="container-fluid">
                                <div class="caption vertical-center text-left">
                                    <div class="big-text fadeInDown-1">
                                        Save up to a<span class="big"><span class="sign">$</span>400</span>
                                    </div>

                                    <div class="excerpt fadeInDown-2">
                                        on selected laptops<br>
                                        & desktop pcs or<br>
                                        smartphones
                                    </div>
                                    <div class="small fadeInDown-2">
                                        terms and conditions apply
                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <a href="single-product.html" class="big le-button ">shop now</a>
                                    </div>
                                </div><!-- /.caption -->
                            </div><!-- /.container-fluid -->
                        </div><!-- /.item -->

                        <div class="item"
                             style="background-image: url({{ asset('themes/default/assets/images/sliders/slider03.jpg') }});">
                            <div class="container-fluid">
                                <div class="caption vertical-center text-left">
                                    <div class="big-text fadeInDown-1">
                                        Want a<span class="big"><span class="sign">$</span>200</span>Discount?
                                    </div>

                                    <div class="excerpt fadeInDown-2">
                                        on selected <br>desktop pcs<br>
                                    </div>
                                    <div class="small fadeInDown-2">
                                        terms and conditions apply
                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <a href="single-product.html" class="big le-button ">shop now</a>
                                    </div>
                                </div><!-- /.caption -->
                            </div><!-- /.container-fluid -->
                        </div><!-- /.item -->

                    </div><!-- /.owl-carousel -->
                </div>

                <!-- ========================================= SECTION – HERO : END ========================================= -->
            </div><!-- /.homebanner-holder -->

        </div><!-- /.container -->
    </div><!-- /#top-banner-and-menu -->

    <!-- ========================================= HOME BANNERS ========================================= -->
    <section id="banner-holder" class="wow fadeInUp">
        <div class="container">
            <div class="col-xs-12 col-lg-6 no-margin banner">
                <a href="category-grid-2.html">
                    <div class="banner-text theblue">
                        <h1>New Life</h1>
                        <span class="tagline">Introducing New Category</span>
                    </div>
                    <img class="banner-image" alt="" src="{{ asset('themes/default/assets/images/blank.gif') }}"
                         data-echo="{{ asset('themes/default/assets/images/banners/banner-narrow-01.jpg') }}"/>
                </a>
            </div>
            <div class="col-xs-12 col-lg-6 no-margin text-right banner">
                <a href="category-grid-2.html">
                    <div class="banner-text right">
                        <h1>Time &amp; Style</h1>
                        <span class="tagline">Checkout new arrivals</span>
                    </div>
                    <img class="banner-image" alt="" src="{{ asset('themes/default/assets/images/blank.gif') }}"
                         data-echo="{{ asset('themes/default/assets/images/banners/banner-narrow-02.jpg') }}"/>
                </a>
            </div>
        </div><!-- /.container -->
    </section><!-- /#banner-holder -->
    <!-- ========================================= HOME BANNERS : END ========================================= -->
    <div id="products-tab" class="wow fadeInUp">
        <div class="container">
            <div class="tab-holder">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#latest-products" data-toggle="tab">Sản Phẩm Mới</a></li>
                    <li><a href="#featured" data-toggle="tab">Sản phẩm bán chạy</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="latest-products">
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
                        <div class="loadmore-holder text-center">
                            <a class="btn-loadmore" href="{{route('frontend.home.productIndex')}}">
                                <i class="fa fa-plus"></i>
                                Xem thêm</a>
                        </div>
                    </div>
                    <div class="tab-pane" id="featured">
                        <div class="product-grid-holder">
                            @forelse($featured_products as $product)
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
                        <div class="loadmore-holder text-center">
                            <a class="btn-loadmore" href="{{route('frontend.home.productIndex')}}">
                                <i class="fa fa-plus"></i>
                                Xem thêm</a>
                        </div>

                    </div>

                    <div class="tab-pane" id="top-sales">
                        <div class="product-grid-holder">

                            <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon red"><span>sale</span></div>
                                    <div class="ribbon green"><span>bestseller</span></div>
                                    <div class="image">
                                        <img alt="" src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                             data-echo="{{ asset('themes/default/assets/images/products/product-04.jpg') }}"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount clear"></div>
                                        <div class="title">
                                            <a href="single-product.html">Netbook Acer TravelMate
                                                B113-E-10072</a>
                                        </div>
                                        <div class="brand">acer</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">$1399.00</div>
                                        <div class="price-current pull-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">add to cart</a>
                                        </div>
                                        <div class="wish-compare">
                                            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                            <a class="btn-add-to-compare" href="#">compare</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                <div class="product-item">

                                    <div class="image">
                                        <img alt="" src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                             data-echo="{{ asset('themes/default/assets/images/products/product-03.jpg') }}"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount clear"></div>
                                        <div class="title">
                                            <a href="single-product.html">POV Action Cam</a>
                                        </div>
                                        <div class="brand">sony</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">$1399.00</div>
                                        <div class="price-current pull-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">add to cart</a>
                                        </div>
                                        <div class="wish-compare">
                                            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                            <a class="btn-add-to-compare" href="#">compare</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon blue"><span>new!</span></div>
                                    <div class="image">
                                        <img alt="" src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                             data-echo="{{ asset('themes/default/assets/images/products/product-02.jpg') }}"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount clear"></div>
                                        <div class="title">
                                            <a href="single-product.html">White lumia 9001</a>
                                        </div>
                                        <div class="brand">nokia</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">$1399.00</div>
                                        <div class="price-current pull-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">add to cart</a>
                                        </div>
                                        <div class="wish-compare">
                                            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                            <a class="btn-add-to-compare" href="#">compare</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon red"><span>sale</span></div>
                                    <div class="image">
                                        <img alt="" src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                             data-echo="{{ asset('themes/default/assets/images/products/product-01.jpg') }}"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount green">-50% sale</div>
                                        <div class="title">
                                            <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                        </div>
                                        <div class="brand">sony</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">$1399.00</div>
                                        <div class="price-current pull-right">$1199.00</div>
                                    </div>

                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">add to cart</a>
                                        </div>
                                        <div class="wish-compare">
                                            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                            <a class="btn-add-to-compare" href="#">compare</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="loadmore-holder text-center">
                            <a class="btn-loadmore" href="{{route('frontend.home.productIndex')}}">
                                <i class="fa fa-plus"></i>
                                Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================================= BEST SELLERS ========================================= -->
    @if(count($best_sellers) >= 7)
    <section id="bestsellers" class="color-bg wow fadeInUp">
        <div class="container">
            <h1 class="section-title">Best Sellers</h1>

            <div class="product-grid-holder medium">
                <div class="col-xs-12 col-md-7 no-margin">
                    @php
                        $count = 0;
                    @endphp
                        @foreach($best_sellers as $product)
                            @php
                                $count++;
                            @endphp
                            @if($count === 1 || $count === 4)
                                <div class="row no-margin">
                            @endif
                            <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                <div class="product-item">
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
                                        <div class="price-prev"></div>
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
                            </div><!-- /.product-item-holder -->
                            @if($count === 3 || $count === 6)
                                </div><!-- /.row -->
                            @endif
                            @if($count === 6)
                                @break
                            @endif
                        @endforeach

                </div><!-- /.col -->
                @foreach($best_sellers as $product)
                <div class="col-xs-12 col-md-5 no-margin">
                    <div class="product-item-holder size-big single-product-gallery small-gallery">

                        <div id="best-seller-single-product-slider" class="single-product-slider owl-carousel">
                                @forelse ($product->attachment as $key => $file)
                                <div class="single-product-gallery-item" id="slide-".{{$key}}>
                                    @if (file_exists(public_path(get_thumbnail('uploads/'.$file->path,'_450x337'))))
                                    <a data-rel="prettyphoto" href="{{ asset('uploads/' . get_thumbnail($file->path, '_450x337')) }}">
                                        <img class="img-responsive" alt="" 
                                        src="{{ asset('uploads/' . get_thumbnail($file->path, '_450x337')) }}" 
                                        data-echo="{{ asset('uploads/' . get_thumbnail($file->path, '_450x337')) }}"
                                        />
                                    </a>
                                    @else
                                    <img src="{{asset('images/no_image_thumb.jpg')}}" alt="No Image" class="img-responsive">                        
                                    @endif
                                    
                                </div>
                                <!-- /.single-product-gallery-item -->
                                @empty 
                                    @if (!empty($product->image) && file_exists(public_path(get_thumbnail("uploads/$product->image",'_450x337'))))
                                    <a data-rel="prettyphoto" href="{{ asset('uploads/' . get_thumbnail($product->image, '_450x337')) }}">
                                        <img class="img-responsive" alt="" 
                                        src="{{ asset('uploads/' . get_thumbnail($product->image, '_450x337')) }}" 
                                        data-echo="{{ asset('uploads/' . get_thumbnail($product->image, '_450x337')) }}"
                                        />
                                    </a>
                                    @else
                                    <img src="{{asset('images/no_image_thumb.jpg')}}" alt="No Image" class="img-responsive"> 
                                    @endif
                                @endforelse
                        </div><!-- /.single-product-slider -->
                        <div class="gallery-thumbs clearfix">
                            <ul>
                                @forelse ($product->attachment as $key => $file)            
                                @if (file_exists(public_path(get_thumbnail('uploads/'.$file->path,'_80x80'))))
                                <li><a class="horizontal-thumb active" data-target="#best-seller-single-product-slider" data-slide="{{$key}}" href="#slide".{{$key}}>
                                        <img width="67" alt="" src="{{ asset('uploads/'. get_thumbnail($file->path,'_80x80')) }}" 
                                        data-echo="{{ asset('uploads/'. get_thumbnail($file->path,'_80x80')) }}"
                                        />
                                    </a></li> 
                                @else
                                <li><a href="#" class="horizontal-thumb"><img src="{{asset('images/no_image_80x80.jpg')}}" alt="No Image" class="img-responsive"></a></li>                        
                                @endif                   
                            @empty                                 
                            @endforelse
                            </ul>
                        </div><!-- /.gallery-thumbs -->

                        <div class="body">
                            <div class="label-discount clear"></div>
                            <div class="title">
                                <a href="{{ route('frontend.home.show', ['slug' => str_slug($product->name), 'id' => $product->id ])}}">{{ $product->name }}</a> 
                            </div>
                            <div class="brand">{{$product->code}}</div>
                        </div>
                        <div class="prices text-right">
                            <div class="price-current inline">{{ number_format($product->sale_price, 0, ',', '.') }}</div>
                            <a href="#" class="le-button big inline" v-on:click="addToCart({{$product->id}} , $event)">Thêm giỏ hàng</a>
                        </div>
                        
                    </div><!-- /.product-item-holder -->
                </div><!-- /.col -->
                @break
                @endforeach
            </div><!-- /.product-grid-holder -->
        </div><!-- /.container -->
    </section><!-- /#bestsellers -->
    @endif
    {{--  {{dd($recent_products)}}  --}}
    <!-- ========================================= BEST SELLERS : END ========================================= -->
    <!-- ========================================= RECENTLY VIEWED ========================================= -->
    <section id="recently-reviewd" class="wow fadeInUp">
        <div class="container">
            <div class="carousel-holder hover">

                <div class="title-nav">
                    <h2 class="h1">Recently Viewed</h2>
                    <div class="nav-holder">
                        <a href="#prev" data-target="#owl-recently-viewed"
                           class="slider-prev btn-prev fa fa-angle-left"></a>
                        <a href="#next" data-target="#owl-recently-viewed"
                           class="slider-next btn-next fa fa-angle-right"></a>
                    </div>
                </div><!-- /.title-nav -->

                <div id="owl-recently-viewed" class="owl-carousel product-grid-holder">
                    @foreach ($recent_products as $product)
                    <div class="no-margin carousel-item product-item-holder size-small hover">
                        <div class="product-item">
                            {{-- <div class="ribbon red"><span>sale</span></div> --}}
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
                        </div><!-- /.product-item -->
                        @endforeach
                    </div>{{-- end product holder  --}}
                    
                </div><!-- /#recently-carousel -->

            </div><!-- /.carousel-holder -->
        </div><!-- /.container -->
    </section><!-- /#recently-reviewd -->
    <!-- ========================================= RECENTLY VIEWED : END ========================================= -->
@endsection
@section('body_scripts')

@endsection