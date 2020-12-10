<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>教師列表</title>
    <!-- Bootstrap -->
	<link href="../css/teachers/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="../css/teachers/list_style.css" rel="stylesheet" type="text/css">
</head>
  <body>
<header>
  <a href="{{ url('/') }}">
    <div class="main_list col-md-4">
      <img src="../images/teachers/lil_home.png"/>
    </div>
  </a> 
  <div class="title_home  col-md-5"><p class="title">教師列表</p></div> <!--教師列表/樂器列表/場地列表-->
  <a href="{{ route('login') }}">
  <div class="lil_member  col-md-3">
    <blockquote>
      <blockquote>
        <p class="align-content-md-center"><img src="../images/teachers/btn_lil_member-1.png"/></p></a>
      </blockquote>
    </blockquote>
  </div>
 </header>
<main>
  <div class="blank col-md-2"></div>
  <div class="LIST col-md-8">
	  
      @foreach ($teachers as $teacher)
	    <a>
        <div class="LIST_bg col-md-3"> <img src="../images/teachers/{{$teacher->tea_image}}"/>
 		      
           <div class="box">
              <p class="ellipsis ">
              <strong>名字：</strong>{{ $teacher->name }} <br>
              <strong>專長：</strong>{{ $teacher->tea_inst }} <br>
              
              <a href="/teacher_intr/{{$teacher->id}}">>>>詳細資訊</a>
              </p>
           </div>
          
        </div>
      </a>
      @endforeach
	  


  <div class="col-md-2"></div>
	  
	  </main>
	  
<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="../js/teachers/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/teachers/popper.min.js"></script> 
  <script src="../js/teachers/bootstrap-4.0.0.js"></script>
</body>
</html>