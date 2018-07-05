@extends('frontend.default.master')
@section('content')
<!-- ============================================================= HEADER : END ============================================================= -->		<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 col-md-offset-3">
				<section class="section sign-in inner-right-xs">
					<h2 class="bordered">Thay đổi mật khẩu</h2>

					<form method="POST" action="{{route('frontend.password.request')}}" role="form" class="login-form cf-style-1">
                        {{csrf_field()}}	
                        <input type="hidden" name="token" value="{{ $token }}">
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
                        
                        <div class="field-row{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label>Xác nhận mật khẩu</label>
                            <input id="password-confirm" name="password_confirmation" type="password" class="le-input">
							@if ($errors->has('password_confirmation'))
							<span class="help-block">
								<strong>{{ $errors->first('password_confirmation') }}</strong>
							</span>
							@endif
						</div><!-- /.field-row -->

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">Thay đổi mật khẩu</button>
                        </div><!-- /.buttons-holder -->
					</form><!-- /.cf-style-1 -->

				</section><!-- /.sign-in -->
			</div><!-- /.col -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= MAIN : END ========================================= -->		<!-- ============================================================= FOOTER ============================================================= -->
@endsection