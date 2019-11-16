@extends('layouts.app')


    
    <!-- <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    

@section('content')
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
    
    <div class="limiter">
        
        <div class="container-login100" >
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="background-image:  url({{ asset('images/images/bg-01.jpg') }})">
                <div class="login100-form-title p-b-49"  >{{ __('Login') }}</div>
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        
                    

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

                        <input class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" type="password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                   
                    
                    
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                {{ __('Login') }}
                            </button>

                        </div>
                    </div>
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="txt1 text-center p-t-54 p-b-20">
                        <span>
                            Or Sign Up Using
                        </span>
                    </div>

                    <div class="flex-c-m">
                        <a href="#" class="login100-social-item bg1">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="login100-social-item bg2">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="login100-social-item bg3">
                            <i class="fa fa-google"></i>
                        </a>
                    </div>

                    

                        <a href="{{ route('register') }}" class="btn btn-info">
                            Register
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
