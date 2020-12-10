<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>教師簡介</title>
    <!-- Bootstrap -->
	<link href="../css/teachers/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="../css/teachers/teacher_style.css" rel="stylesheet" type="text/css">
</head>
	
	
<body>
	  
<header>
  <a href="{{ url('/') }}">
    <div class="header col-md-12">
      <div class="main_list col-md-4">
        <img src="../images/teachers/lil_home.png"/>  
      </div>
  </a>
  <div class="title_home  col-md-4"><p class = "title">教師簡介</p></div> <!--簡介-->
  <a href="{{ route('login') }}">
  <div class="lil_member  col-md-4">
    <blockquote>
      <blockquote>
        <p class="align-content-md-center"><img src="../images/teachers/btn_lil_member-1.png"/></p></a>
      </blockquote>
    </blockquote>
  </div>
  </div>
 </header>
	  
	  
<main>			
	
	<div class="col-md-12">
<div class="img_0 col-md-4"><img src="../images/teachers/{{$teacher->tea_image}}"  height="250"/>
	  </div>
	</div>
	
  <div class="INTRODUCTION col-md-7">
	
	  <div class="font col-md-2">姓名</div>
      <div class="message_1 col-md-10">{{ $teacher->name }}</div>
		
	  <div class="font col-md-2">專長</div>
      <div class="message_1 col-md-10">{{ $teacher->tea_inst }}</div>
		
	  <div class="font col-md-2">經歷與現職</div>
      <div class="message_2 col-md-10">{{ $teacher->tea_content }}</div>

      <div class="blank col-md-2"></div>
	    <div class="blank_l col-md-2"></div>
	    <div class="btn_sure col-md-3"><a href='{{url("/teacher_res/{$teacher->id}")}}'>預約</a></div>
      <div class="blank col-md-5"></div>
      
    
    </div>

</main>
	  
<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="../js/teachers/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/teachers/popper.min.js"></script> 
  <script src="../js/teachers/bootstrap-4.0.0.js"></script>
	  
</body>
</html>