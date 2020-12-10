<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>練團室簡介</title>
    <!-- Bootstrap -->
	<link href="../css/bandrooms/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="../css/bandrooms/liststyle.css" rel="stylesheet" type="text/css">
</head>
	
	
<body>
	  
<header>
  <a href="{{ url('/') }}">
  <div class="header col-md-12">
  <div class="main_list col-md-4"><img src="../images/bandrooms/btn_navbar.png"/></div></a>
  <div class="title_home  col-md-4"><p class = "title">練團室簡介</p></div> <!--簡介-->
  <a href="{{ route('login') }}">
  <div class="lil_member  col-md-4">
    <blockquote>
      <blockquote>
        <p class="align-content-md-center"><img src="../images/bandrooms/btn_lil_member-1.png"/></p></a>
      </blockquote>
    </blockquote>
  </div>
  </div>
 </header>
	  
	  
<main>			
	
	<div class="col-md-12">
<div class="img_0 col-md-4">
  <a href="../images/bandrooms/{{$bandroom->image}}">
      <img class="imgbtn" src="../images/bandrooms/{{$bandroom->image}}"/>
  </a>
	  </div>
	</div>
	
  <div class="INTRODUCTION col-md-7">
    <div class="font col-md-12"></div>
	  <div class="font col-md-2">練團室名稱</div>
      <div class="message_1 col-md-10">{{$bandroom->name}}</div>
		
	  <div class="font col-md-2">建議人數</div>
      <div class="message_1 col-md-10">教室約可容納  {{$bandroom->people}}  人</div>
		
	  <div class="font col-md-2">租借費用</div>
      <div class="message_1 col-md-10">一小時 {{$bandroom->rent}} 元</div>
		
	  <div class="font col-md-2">練團室簡介</div>
      <div class="message_2 col-md-10">{!! html_entity_decode($bandroom->content) !!}</div>
      <div class="font col-md-12"></div>

  </div>
  <div class="font col-md-5"></div>
        <div class="btn_sure col-md-3"><a href='{{url("/bandroom_lend/{$bandroom->id}")}}'>預約</a></div>
      <div class="blank col-md-5"></div>
</main>


<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="../js/bandrooms/jquery-3.2.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bandrooms/popper.min.js"></script>
  <script src="../js/bandrooms/bootstrap-4.0.0.js"></script>
</body>
</html>