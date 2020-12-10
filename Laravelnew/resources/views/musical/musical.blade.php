<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>樂器租借</title>
    <!-- Bootstrap -->
	<link href="../css/musical_bootstrap-4.0.0.css" rel="stylesheet">
	<link href="../css/musical_style.css" rel="stylesheet" type="text/css">

</head>
  <body>
<header>
  <a href="{{ url('/') }}"> 
    <div class="main_list col-md-4">
      <img src="../images/musical/lil_home.png"/>
    </div>
  </a>

  <div class="title_home  col-md-5"><p class="title">樂器租借</p></div> <!--教師列表/樂器列表/場地列表-->
  <a href="{{ route('login') }}">
  <div class="lil_member  col-md-3">
    <blockquote>
      <blockquote>
        <p class="align-content-md-center"><img src="../images/musical/btn_lil_member-1.png"/></p></a>
      </blockquote>
    </blockquote>
  </div>
 </header>
<main>
  <div class="blank col-md-2"></div>

  <div class="LIST col-md-8">

        @foreach ($musicals as $musical)


            <div class="LIST_bg col-md-3">

                <a href="{{ $musical->musical_pic}}"><img src="{{ $musical->musical_pic}}"/></a>
 		        <p class="LIST_content col-lg-3">

                    <p>  樂器名稱:{{ $musical->musical_name}}<br>
                         租金(日):${{ $musical->musical_rent}}<br>

                    <a href='{{url("/musical_intr/{$musical->id}")}}'>>>>詳細資訊</a>
                </p>


            </div>

        @endforeach

    </div>




        <div class="pages col-md-2"> </div>

      </main>

<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/musical_jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/musical_popper.min.js"></script>
  <script src="file:///C|/Users/viola/AppData/Local/Temp/Adobe/Dreamweaver CC 2018/js/musical_bootstrap-4.0.0.js"></script>
</body>
</html>
