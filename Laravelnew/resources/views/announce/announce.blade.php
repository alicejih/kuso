<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>活動公告</title>
    <!-- Bootstrap -->
	<link href="../css/announce_bootstrap-4.0.0.css" rel="stylesheet">
	<link href="../css/announce_style.css" rel="stylesheet" type="text/css">

</head>
  <body>
<header>
  <a href="{{ url('/') }}"> 
  <div class="main_list col-md-4"><img src="../images/announce/lil_home.png"/></div></a>
  <div class="title_home  col-md-5"><p class="title">活動公告</p></div> <!--教師列表/樂器列表/場地列表-->
  
  <a href="{{ route('login') }}">
  <div class="lil_member  col-md-3">
    <blockquote>
      <blockquote>
        <p class="align-content-md-center"><img src="../images/announce/btn_lil_member-1.png"/></p></a>
      </blockquote>
    </blockquote>
  </div>
 </header>
<main>
  <div class="blank col-md-2"></div>
  <div class="LIST col-md-8">

    <a href="" >
      <p class="bg000 col-lg-2">發布時間 </p>
      <p class="bg000 col-lg-10">內容</p>
   </a>
   @foreach ($announces as $announce)

       <p class="bg001 col-lg-2">{{$announce->time}} </p>
       <p class="bg001 col-lg-10">{{$announce->title}}<a href='{{url("/announce_present/{$announce->id}")}}'>......more</a></p>


    @endforeach

  </div>
  <div class="col-md-2"></div>

	  </main>

<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/announce_jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/announce_popper.min.js"></script>
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/announce_bootstrap-4.0.0.js"></script>
</body>
</html>
