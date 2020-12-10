<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>教師預約</title>
    <!-- Bootstrap -->
    <link href="../css/teachers/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="../css/teachers/sure_style.css" rel="stylesheet" type="text/css">
</head>
	
	
<body>
	  
<header>
  <a href="{{ url('/') }}">
    <div class="header col-md-12">
      <div class="main_list col-md-4">
        <img src="../images/teachers/lil_home.png"/>
      </div>
  </a>
  <div class="title_home  col-md-4"><p class = "title">教師預約</p></div> <!--確認-->
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
	
	<div class="font_0 col-md-12">
  	  <div class="font col-md-4"></div>
	  <div class="font col-md-4">
	    預約完成
	  </div>
	  <div class="font col-md-4"></div>
	  </div>
	
	<div class="btn_sure col-md-2"><a href="{{ url('/') }}">回首頁</a></div>

</main>
	  
<!-- body code goes here -->



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="../js/teachers/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/teachers/popper.min.js"></script> 
  <script src="../js/teachers/bootstrap-4.0.0.js"></script>
</body>
</html>