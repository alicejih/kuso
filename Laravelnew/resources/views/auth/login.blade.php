<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>登入</title>
        
    <!-- Bootstrap -->
	<link href="css/login_bootstrap-4.0.0.css" rel="stylesheet">
	

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/login_style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div class="header col-md-12">
            <a href="{{ url('/') }}">
                <div class="main_list col-md-4">
                    <img src="images/lil_home.png"/>
                </div>
            </a>
            
            <div class="title_home  col-md-5">
                <p class="title">登入</p>
            </div> <!--登入/註冊-->
            <a href="{{ route('login') }}">
                <div class="lil_member  col-md-3">
                    <blockquote>
                         <p class="align-content-md-center">
                            <img src="images/btn_lil_member-1.png"/>
                        </p>
                    </blockquote>
                </div>
            </a>
        </div>
    </header>
    <div class="container">
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group row col-md-12">
                    <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('信箱(帳號)') }}</label>

                    <div class="col-md-9">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row col-md-12">
                    <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('密碼') }}</label>

                    <div class="col-md-9">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-7 offset-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('記住我!') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class=" form-group row mb-0 col-md-12">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <button type="submit" class="from_btn btn_login btn-primary">
                                {{ __('登入') }}
                            </button>
                        </div>  

                        <div class="btn_0 col-md-2">
                            <a href="{{ route('register') }}"> {{('我要註冊')}}</a>
                        </div>

                        @if (Route::has('password.request'))
                            <a class="btn_1 from_btn btn-link col-md-2" href="{{ route('password.request') }}">
                                    {{ __('忘記密碼?') }}
                            </a>
                        @endif
                </div>
            </form>
        </div>
    </div>
</body>