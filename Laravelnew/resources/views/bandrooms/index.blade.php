<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>場地列表</title>
    <!-- Bootstrap -->
	<link href="../css/bandrooms/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="../css/bandrooms/indexstyle.css" rel="stylesheet" type="text/css">
</head>
  <body>
<header>
  <a href="{{ url('/') }}">
  <div class="main_list col-md-4"><img src="../images/bandrooms/btn_navbar.png"/></div></a>
  <div class="title_home  col-md-5"><p class="title">場地列表</p></div> <!--教師列表/樂器列表/場地列表-->
  <a href="{{ route('login') }}">
  <div class="lil_member  col-md-3">
    <blockquote>
      <blockquote>
        <p class="align-content-md-center"><img src="../images/bandrooms/btn_lil_member-1.png"/></p></a>
      </blockquote>
    </blockquote>
  </div>
 </header>
<main>
  <div class="blank col-md-2"></div>
  <div class="LIST col-md-8">
	  
      @foreach ($bandrooms as $bandroom)
      <div class="LIST_bg col-md-3">
	  <a href="../images/bandrooms/{{$bandroom->image}}">
       <img class="listimg" src="../images/bandrooms/{{$bandroom->image}}"/></a>
 		  <p class="LIST_content col-lg-3"><p>
          名稱：{{$bandroom->name}}<br>
          建議：{{$bandroom->people}}人<br>
          <a href="/bandroom_list/{{$bandroom->id}}">>>>詳細資訊</a>
          </p>
      </div>
	  @endforeach

  <div class="col-md-2"></div>
	  
	  </main>
	  
<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="../js/bandrooms/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bandrooms/popper.min.js"></script>
    <script src="../js/bandrooms/bootstrap-4.0.0.js"></script>
</body>
</html>
