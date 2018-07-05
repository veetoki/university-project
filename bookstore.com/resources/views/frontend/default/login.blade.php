@extends('frontend.default.master')
@section('content')
<!-- ============================================================= HEADER : END ============================================================= -->		<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6">
				<section class="section sign-in inner-right-xs">
					<h2 class="bordered">Sign In</h2>
					<p>Hello, Welcome to your account</p>

					<div class="social-auth-buttons">
						<div class="row">
							<div class="col-md-6">
								<button class="btn-block btn-lg btn btn-facebook"><i class="fa fa-facebook"></i> Sign In with Facebook</button>
							</div>
							<div class="col-md-6">
								<button class="btn-block btn-lg btn btn-twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</button>
							</div>
						</div>
					</div>

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
                            <label>Password</label>
                            <input id="password" name="password" type="password" class="le-input">
							@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif
						</div><!-- /.field-row -->

                        <div class="field-row clearfix">
                        	<span class="pull-left">
                        		<label class="content-color"><input name="remember" type="checkbox" class="le-checbox auto-width inline" {{ old('remember') ? 'checked' : '' }}> <span class="bold">Remember me</span></label>
                        	</span>
                        	<span class="pull-right">
                        		<a href="{{route('frontend.password.request')}}" class="content-color bold">Forgotten Password ?</a>
                        	</span>
                        </div>

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">Log In</button>
                        </div><!-- /.buttons-holder -->
					</form><!-- /.cf-style-1 -->

				</section><!-- /.sign-in -->
			</div><!-- /.col -->

			<div class="col-md-6">
				<section class="section register inner-left-xs">
					<h2 class="bordered">Create New Account</h2>
					<p>Create your own Media Center account</p>

					<form method="POST" action="{{route('frontend.register')}}" role="form" class="register-form cf-style-1">
						{{csrf_field()}}

						<div class="field-row{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Name</label>
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
                            <label>Password</label>
							<input id="password" name="password" type="password" class="le-input">
							@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif

						</div><!-- /.field-row -->
						
						<div class="field-row">
                            <label>Password Confirm</label>
							<input id="password-confirm" name="password_confirmation" type="password" class="le-input">
					
                        </div><!-- /.field-row -->

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">Sign Up</button>
                        </div><!-- /.buttons-holder -->
					</form>

					<h2 class="semi-bold">Sign up today and you'll be able to :</h2>

					<ul class="list-unstyled list-benefits">
						<li><i class="fa fa-check primary-color"></i> Speed your way through the checkout</li>
						<li><i class="fa fa-check primary-color"></i> Track your orders easily</li>
						<li><i class="fa fa-check primary-color"></i> Keep a record of all your purchases</li>
					</ul>

				</section><!-- /.register -->

			</div><!-- /.col -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= MAIN : END ========================================= -->		<!-- ============================================================= FOOTER ============================================================= -->
@endsection