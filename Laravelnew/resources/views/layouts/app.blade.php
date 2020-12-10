<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (Route::has('register'))
        <title>註冊</title>
    @else
        <title>登入</title>
    @endif
    
    
    <!-- Bootstrap -->
	<link href="css/login_bootstrap-4.0.0.css" rel="stylesheet">
	

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '首頁') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/login_style.css" rel="stylesheet" type="text/css">
    <link href="css/register_style.css" rel="stylesheet" type="text/css">
</head>



<body>
    <div id="app">
    <header>
  <div class="header col-md-12">
  <div class="main_list col-md-4"><img src="images/btn_navbar.png"/></div>
  <div class="title_home  col-md-5"><p class="title">title</p></div> <!--登入/註冊-->
  <div class="lil_member  col-md-3">
    <blockquote>
      <blockquote>
        <p class="align-content-md-center"><img src="images/btn_lil_member-1.png"/></p>
      </blockquote>
    </blockquote>
  </div>
  </div>
 </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
