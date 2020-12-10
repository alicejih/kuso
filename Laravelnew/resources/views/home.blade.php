<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>登入</title>
        
        <!-- Bootstrap -->
	    <link href="css/logout_bootstrap-4.0.0.css" rel="stylesheet">
	

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="css/logout_style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <header>
            <div class="header col-md-12">
                <a href="{{ url('/') }}">
                    <div class="main_list col-md-4">
                        <img src="images/lil_home.png"/>
                    </div>
                </a>
                    
                <div class="title_home  col-md-4">
                    <p class = "title">登入成功</p>
                </div> <!--確認-->
                <div class="lil_member  col-md-4">
                    <a class="logout-1" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('登出') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="{{ route('login') }}">
                            <img src="images/btn_lil_member-1.png"/>
                        {{ Auth::user()->name }}
                    </a>
                </div>
            </div>
        </header>

        <div class="font_0 col-md-12">
  	        <div class="font col-md-4"></div>
	        <div class="font col-md-4">
	            登入成功
	        </div>
	        <div class="font col-md-4"></div>
        </div>
        
        <a href="{{ url('/') }}">
            <div class="btn_sure col-md-2">回首頁</div>
        </a>
    </body>
</html>
