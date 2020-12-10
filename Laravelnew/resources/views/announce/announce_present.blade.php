<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>活動公告</title>
    <!-- Bootstrap -->
	<link href="../css/announce_present_bootstrap-4.0.0.css" rel="stylesheet">
	<link href="../css/announce_present_style.css" rel="stylesheet" type="text/css">
</head>


<body>

<header>
  <a href="{{ url('/') }}">
  <div class="header col-md-12">
  <div class="main_list col-md-4"><img src="../images/announce_present/lil_home.png"/></div></a>
  <div class="title_home  col-md-4"><p class = "title">活動公告</p></div> <!--簡介-->
  <a href="{{ route('login') }}">
  <div class="lil_member  col-md-4">
    <blockquote>
      <blockquote>

        <p class="align-content-md-center"><img src="../images/announce_present/btn_lil_member-1.png"/></p></a>
      </blockquote>
    </blockquote>
  </div>
  </div>
 </header>


<main>

  <div class="INTRODUCTION col-md-7">

	  <div class="font col-md-12">
      <div class="message_0 col-md-12">{{$announce->title}}
      </div>
      <div class="message_1 col-md-12">{{$announce->content}}
      </div>
      <div class="message_1 col-md-10"></div>
      <div class="message_1 col-md-2">{{$announce->time}}</div>

    </div>
	<div class="blank col-md-2"></div>


</main>

<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/announce_present_jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/announce_present_popper.min.js"></script>
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/announce_present_bootstrap-4.0.0.js"></script>

</body>
</html>
