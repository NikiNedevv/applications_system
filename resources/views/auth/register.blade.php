@extends('layouts.app')


	
	
	<link rel="stylesheet" type="text/css" href="{{asset('images/images/icons/favicon.ico')}}" >

	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" >

	<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}" >
	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" >

	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}" >

	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}" >
	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}" >

	<link rel="stylesheet" type="text/css" href="{{asset('css/css/util.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/css/main.css')}}">

@section('content')

	
	<div class="limiter">
        
		<div class="container-login100" >
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<div class="login100-form-title p-b-49" >{{ __('Register') }}</div>
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                        @csrf
					


					<div class="wrap-input100 validate-input m-b-23" data-validate = "name is reauired">
						<span class="label-input100">{{ __('Name') }}</span>
						<input class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
						
					

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
						<span class="label-input100">{{ __('E-Mail Address') }}</span>
						<input class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">

						<span class="label-input100">{{ __('Password') }}</span>

						<input class="input100" type="password   @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
						@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password confirm">

						<span class="label-input100">{{ __('Confirm Password') }}</span>

						<input class="input100" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
						
					</div>
					
					<br></br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								{{ __('Register') }}
							</button>
						</div>
					</div>

					
							<br></br>
						<a href="{{ route('login') }}" class="btn btn-info">
							Sign In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

	<script type="text/javascript" src="{{ asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>

	<script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('vendor/select2/select2.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>

	<script type="text/javascript" src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>

	<script type="text/javascript" src="{{asset('js/js/main.js')}}"></script>

@endsection
