<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>預約結果</title>
    <!-- Bootstrap -->
	<link href="../css/musical_sure_bootstrap-4.0.0.css" rel="stylesheet">
	<link href="../css/musical_sure_style.css" rel="stylesheet" type="text/css">
</head>


<body>

<header>
  <div class="header col-md-12">
    <a href="{{ url('/') }}">
      <div class="main_list col-md-4">
        <img src="../images/musical_sure/lil_home.png"/>
      </div>
    </a> 
    <div class="title_home  col-md-4"><p class = "title">預約結果</p></div> <!--確認-->
    <a href="{{ route('login') }}">
    <div class="lil_member  col-md-4">
      <blockquote>
        <p class="align-content-md-center"><img src="../images/musical_sure/btn_lil_member-1.png"/></p></a>
      </blockquote>
    </div>
  </div>
</header>


<main>

	<div class="font_0 col-md-12">
  	  <div class="font col-md-4"></div>
	  <div class="font col-md-4">
	    預約失敗，此日期已有其他人預約了<a href="{{ url('/') }}"><br>回首頁</a>
	  </div>
	  <div class="font col-md-4"></div>
	  </div>



</main>

<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/popper.min.js"></script>
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/bootstrap-4.0.0.js"></script>

</body>
</html>
