<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>樂器簡介</title>
    <!-- Bootstrap -->
	<link href="../css/musical_intr_bootstrap-4.0.0.css" rel="stylesheet">
	<link href="../css/musical_intr_style.css" rel="stylesheet" type="text/css">
</head>


<header>
  <div class="header col-md-12">
  <div class="main_list col-md-4"><img src="../images/musical_sure/lil_home.png"></div>
  <div class="title_home  col-md-4"><p class = "title">樂器簡介</p></div> <!--簡介-->
  <a href="{{ route('login') }}">
  <div class="lil_member  col-md-4">
    <blockquote>
      <blockquote>
        <p class="align-content-md-center"><img src="../images/musical_sure/btn_lil_member-1.png"></p></a>
      </blockquote>
    </blockquote>
  </div>
  </div>
 </header>


<main>

<div class="col-md-12">
    <div class="img_0 col-md-4">
         <img src="{{ $musical->musical_pic}}"/>
    </div>

</div>

  <div class="INTRODUCTION col-md-7">


      <div class="font col-md-12"></div>
      <div class="font col-md-2">樂器名稱</div>
      <div class="message_1 col-md-10">{{$musical->musical_name}}</div>

	  <div class="font col-md-2">樂器種類</div>
      <div class="message_1 col-md-10">{{$musical->musical_sort}}</div>

	  <div class="font col-md-2">樂器介紹</div>
      <div class="message_1 col-md-10">{{$musical->musical_content}}</div>

	  <div class="font col-md-2">租借價格(日)</div>
      <div class="message_2 col-md-10">NT$ {{$musical->musical_rent}}</div>


    </div>

    <div class="blank col-md-2"></div>

	<div class="blank_l col-md-5"></div>
    <div class="btn_sure col-md-3"><a href='{{url("/musical_reserve/{$musical->id}")}}'>預約</a></div>
	<div class="blank col-md-5"></div>


</main>

<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/popper.min.js"></script>
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/bootstrap-4.0.0.js"></script>

</body>
</html>
