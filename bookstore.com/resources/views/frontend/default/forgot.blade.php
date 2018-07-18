@extends('frontend.default.master')
@section('content')
<!-- ============================================================= HEADER : END ============================================================= -->		<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 col-md-offset-3">
				<section class="section sign-in inner-right-xs">
					<h2 class="bordered">Gửi link thay đổi mật khẩu</h2>

					<form method="POST" action="{{route('frontend.password.email')}}" role="form" class="login-form cf-style-1">
                        {{csrf_field()}}	
						<div class="field-row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>Email</label>
                            <input id="email" name="email" type="email" class="le-input">
							@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
							@endif
						</div><!-- /.field-row -->
                        

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">Gửi link thay đổi mật khẩu</button>
                        </div><!-- /.buttons-holder -->
					</form><!-- /.cf-style-1 -->

				</section><!-- /.sign-in -->
			</div><!-- /.col -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= MAIN : END ========================================= -->		<!-- ============================================================= FOOTER ============================================================= -->
@endsection