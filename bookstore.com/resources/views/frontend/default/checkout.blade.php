@extends('frontend.default.master')
@section('content')
<section id="checkout-page">
    <div class="container">
        <div class="col-xs-12 no-margin">
            
            <div class="billing-address">
                <h2 class="border h1">Địa chỉ nhận hàng</h2>
                <form id="billingInfo" method="POST" action="{{route('frontend.checkout.placeOrder')}}">
                    {{csrf_field()}}
                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-6" {{$errors->has('name') ? 'has-errors' : ''}}>
                            <label>Họ tên của bạn</label>
                            <input class="le-input" name="name" value="{{old('name')}}">
                            <small id="nameHelpBlock" class="form-text text-muted text-danger">
                                {{$errors->first('name')}}
                            </small>
                        </div>
                        
                    </div><!-- /.field-row -->

                    
                    

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-6" {{$errors->has('address') ? 'has-errors' : ''}}>
                            <label>Địa chỉ</label>
                            <input class="le-input" name="address" value="{{old('address')}}">
                            <small id="nameHelpBlock" class="form-text text-muted text-danger">
                                {{$errors->first('address')}}
                            </small>
                        </div>
                    
                    </div><!-- /.field-row -->

                    <div class="row field-row">
        
                        <div class="col-xs-12 col-sm-6" {{$errors->has('email') ? 'has-errors' : ''}}>
                            <label>Email</label>
                            <input class="le-input" name="email" value="{{old('email')}}">
                            <small id="nameHelpBlock" class="form-text text-muted text-danger">
                                {{$errors->first('email')}}
                            </small>
                        </div>

                        
                    </div><!-- /.field-row -->

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-6" {{$errors->has('phonenumber') ? 'has-errors' : ''}}>
                            <label>Số điện thoại</label>
                            <input class="le-input" name="phonenumber" value="{{old('phonenumber')}}">
                            <small id="nameHelpBlock" class="form-text text-muted text-danger">
                                {{$errors->first('phonenumber')}}
                            </small>
                        </div>
                    </div><!-- /.field-row -->
                    {{--  <div class="row field-row">
                        <div id="create-account" class="col-xs-12">
                            <input  class="le-checkbox big" type="checkbox"  />
                            <a class="simple-link bold" href="#">Create Account?</a> - you will receive email with temporary generated password after login you need to change it.
                        </div>
                    </div><!-- /.field-row -->  --}}

                </form>
            </div><!-- /.billing-address -->


            {{--  <section id="shipping-address">
                <h2 class="border h1">shipping address</h2>
                <form>
                    <div class="row field-row">
                        <div class="col-xs-12">
                            <input  class="le-checkbox big" type="checkbox"  />
                            <a class="simple-link bold" href="#">ship to different address?</a>
                        </div>
                    </div><!-- /.field-row -->
                </form>
            </section><!-- /#shipping-address -->  --}}


            <section id="your-order">
                <h2 class="border h1">Đơn hàng của bạn</h2>
                <form>
                    
                    @foreach ($products as $product)
                    <div class="row no-margin order-item">
                            <div class="col-xs-12 col-sm-1 no-margin">
                                <a href="#" class="qty">{{$product['quantity']}} x</a>
                            </div>
                            
                            <div class="col-xs-12 col-sm-1">
                                <a href="#" class="thumb-holder">
                                    <img class="lazy" alt="" src="{{asset('/uploads/'.$product['image'])}}" width="40" height="60"/>
                                </a>
                            </div>
            
                            <div class="col-xs-12 col-sm-8">
                                <div class="title"><a href="#">{{$product['name']}}</a></div>
                                <div class="brand">{{$product['author']}}</div>
                            </div>
    
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <div class="price">{{number_format($product['subtotal'], 0, ',', '.')}} Đ</div>
                            </div>
                        </div><!-- /.order-item -->
                    @endforeach
                </form>
            </section><!-- /#your-order -->

            <div id="total-area" class="row no-margin">
                <div class="col-xs-12 col-lg-4 col-lg-offset-8 no-margin-right">
                    <div id="subtotal-holder">
                        {{--  <ul class="tabled-data inverse-bold no-border">
                            <li>
                                <label>cart subtotal</label>
                                <div class="value ">$8434.00</div>
                            </li>
                            <li>
                                <label>shipping</label>
                                <div class="value">
                                    <div class="radio-group">
                                        <input class="le-radio" type="radio" name="group1" value="free"> <div class="radio-label bold">free shipping</div><br>
                                        <input class="le-radio" type="radio" name="group1" value="local" checked>  <div class="radio-label">local delivery<br><span class="bold">$15</span></div>
                                    </div>
                                </div>
                            </li>
                        </ul><!-- /.tabled-data -->  --}}

                        <ul id="total-field" class="tabled-data inverse-bold ">
                            <li>
                                <label>Tổng cộng</label>
                                <div class="value">{{number_format($total, 0, ',', '.')}} Đ</div>
                            </li>
                        </ul><!-- /.tabled-data -->

                    </div><!-- /#subtotal-holder -->
                </div><!-- /.col -->
            </div><!-- /#total-area -->

            {{--  <div id="payment-method-options">
                <form>
                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="group2" value="Direct">
                        <div class="radio-label bold ">Direct Bank Transfer<br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum tempus elit, vestibulum vestibulum erat ornare id.</p>
                        </div>
                    </div><!-- /.payment-method-option -->
                    
                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="group2" value="cheque">
                        <div class="radio-label bold ">cheque payment</div>
                    </div><!-- /.payment-method-option -->
                    
                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="group2" value="paypal">
                        <div class="radio-label bold ">paypal system</div>
                    </div><!-- /.payment-method-option -->
                </form>
            </div><!-- /#payment-method-options -->  --}}
            
            <div class="place-order-button">
                <button class="le-button big" onclick="document.getElementById('billingInfo').submit();">Đặt hàng</button>
            </div><!-- /.place-order-button -->

        </div><!-- /.col -->
    </div><!-- /.container -->    
</section><!-- /#checkout-page -->
@endsection