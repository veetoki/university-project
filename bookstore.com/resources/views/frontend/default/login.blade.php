@extends('frontend.default.master')
@section('content')
<!-- ============================================================= HEADER : END ============================================================= -->		<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6">
				<section class="section sign-in inner-right-xs">
					<h2 class="bordered">Đăng Nhập</h2>
					<p>Xin chào, chào mừng bạn</p>

					{{--  <div class="social-auth-buttons">
						<div class="row">
							<div class="col-md-6">
								<button class="btn-block btn-lg btn btn-facebook"><i class="fa fa-facebook"></i> Sign In with Facebook</button>
							</div>
							<div class="col-md-6">
								<button class="btn-block btn-lg btn btn-twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</button>
							</div>
						</div>
					</div>  --}}

					<form method="POST" action="{{route('frontend.login')}}" role="form" class="login-form cf-style-1">
						{{csrf_field()}}	
						<div class="field-row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>Email</label>
                            <input id="email" name="email" type="text" class="le-input">
							@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
							@endif
						</div><!-- /.field-row -->

                        <div class="field-row{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label>Mật khẩu</label>
                            <input id="password" name="password" type="password" class="le-input">
							@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif
						</div><!-- /.field-row -->

                        <div class="field-row clearfix">
                        	<span class="pull-left">
                        		<label class="content-color"><input name="remember" type="checkbox" class="le-checbox auto-width inline" {{ old('remember') ? 'checked' : '' }}> <span class="bold">Ghi nhớ đăng nhập</span></label>
                        	</span>
                        	<span class="pull-right">
                        		<a href="{{route('frontend.password.request')}}" class="content-color bold">Quên mật khẩu ?</a>
                        	</span>
                        </div>

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">Đăng nhập</button>
                        </div><!-- /.buttons-holder -->
					</form><!-- /.cf-style-1 -->

				</section><!-- /.sign-in -->
			</div><!-- /.col -->

			<div class="col-md-6">
				<section class="section register inner-left-xs">
					<h2 class="bordered">Tạo tài khoản mới</h2>
					<p>Tạo tài khoản Book Store của bạn</p>

					<form method="POST" action="{{route('frontend.register')}}" role="form" class="register-form cf-style-1">
						{{csrf_field()}}

						<div class="field-row{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Họ tên của bạn</label>
							<input id="name" name="name" type="text" class="le-input">
							@if ($errors->has('name'))
							<span class="help-block">
								<strong>{{ $errors->first('name') }}</strong>
							</span>
						@endif

						</div><!-- /.field-row -->
						
						<div class="field-row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>Email</label>
							<input id="email" name="email" type="email" class="le-input">
							@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif

						</div><!-- /.field-row -->
						
						<div class="field-row{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label>Mật khẩu</label>
							<input id="password" name="password" type="password" class="le-input">
							@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif

						</div><!-- /.field-row -->
						
						<div class="field-row">
                            <label>Xác nhận mật khẩu</label>
							<input id="password-confirm" name="password_confirmation" type="password" class="le-input">
					
                        </div><!-- /.field-row -->

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">Đăng Ký</button>
                        </div><!-- /.buttons-holder -->
					</form>

					<h2 class="semi-bold">Đăng ký ngay bây giờ và bạn có thể:</h2>

					<ul class="list-unstyled list-benefits">
						<li><i class="fa fa-check primary-color"></i> Mua sắm một cách nhanh chóng</li>
						<li><i class="fa fa-check primary-color"></i> Theo dõi tình trạng đơn hàng của bạn một cách dễ dàng</li>
						<li><i class="fa fa-check primary-color"></i> Lưu lại những đầu sách mà bạn đã mua</li>
					</ul>

				</section><!-- /.register -->

			</div><!-- /.col -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= MAIN : END ========================================= -->		<!-- ============================================================= FOOTER ============================================================= -->
@endsection