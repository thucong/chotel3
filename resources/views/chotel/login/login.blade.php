@extends('templates.chotel.master')

@section('main-content')

<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="{{ route('chotel.login') }}" align="center">
					@csrf
					<p></p><br>
					<span class="login100-form-title p-b-43" >
						Login 
					</span>
					<br>
					
					<div class="wrap-input100 validate-input" required="required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						
					</div>
					<br>
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						
					</div>

					<br>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					
					<br>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('/public/templates/chotel/login/images/hotel1.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	

@endsection