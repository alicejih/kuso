<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>註冊</title>
        
        <!-- Bootstrap -->
	    <link href="css/register_bootstrap-4.0.0.css" rel="stylesheet">
	

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="css/register_style.css" rel="stylesheet" type="text/css">
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
                    <p class="title">註冊</p>
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
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row col-md-12">
                        <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('姓名') }}</label>

                        <div class="col-md-9">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row col-md-12">
                        <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('信箱(帳號)') }}</label>

                        <div class="col-md-9">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row col-md-12">
                        <label for="birth" class="col-md-3 col-form-label text-md-right">{{ __('生日(YYYY/mm/dd)') }}</label>

                        <div class="col-md-9">
                            <input id="birth" type="birth" class="form-control @error('birth') is-invalid @enderror" name="birth" value="{{ old('birth') }}" required autocomplete="burth">

                            @error('birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row col-md-12">
                        <label for="phone" class="col-md-3 col-form-label text-md-right">{{ __('手機') }}</label>

                        <div class="col-md-9">
                            <input id="phone" type="phone" pattern='\d{10}' class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row col-md-12">
                        <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('密碼') }}</label>

                        <div class="col-md-9">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row col-md-12">
                        <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('確認密碼') }}</label>

                        <div class="col-md-9">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0 col-md-12">
                        <div class="col-md-2 offset-md-3">
                            <button type="submit" class="from_btn btn btn-primary">
                                {{ __('註冊') }}
                            </button>
                        </div>

                        <div class="from_btn btn_2 col-md-2">
                            <a href="{{ route('login') }}"> {{('我要登入')}}</a>
                        </div>
                     </div>
                </form>
            </div>
        </div>
    </body>
</html>


	

