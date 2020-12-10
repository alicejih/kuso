<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>預約樂器</title>
    <!-- Bootstrap -->
	<link href="../css/musical_reserve_bootstrap-4.0.0.css" rel="stylesheet">
	<link href="../css/musical_reserve_style.css" rel="stylesheet" type="text/css">
</head>


<body>

<header>
  <div class="header col-md-12">
  <a href="{{ url('/') }}">
    <div class="main_list col-md-4"> 
      <img src="../images/musical_reserve/lil_home.png"/>
    </div>
  </a>
  
  <div class="title_home  col-md-4"><p class = "title">預約樂器</p></div> <!--預約-->
  <a href="{{ route('login') }}">
  <div class="lil_member  col-md-4">
    <blockquote>
      <blockquote>
        <p class="align-content-md-center"><img src="../images/musical_reserve/btn_lil_member-1.png"/></p></a>
      </blockquote>
    </blockquote>
  </div>
  </div>
 </header>


<main>


	<div class="img_0 col-md-4">
	  <img src="{{ $musical->musical_pic}}"/>
	</div>

  <div class="font_0 col-md-6">
	  <p>{{ $musical->musical_name}}<br>$NT {{ $musical->musical_rent}}(次/日)
    </p>
	</div>

    <form action="/musical_reserve_add/{{$musical->id}}" method="get">
        <div class="INTRODUCTION col-md-6">

            <div class="font col-md-3">租借日期:</div>
            <input type="text" id="period" class="message col-md-9" name="period"onblur="checknull(this)" required>

            <div class="font col-md-3">備註:</div>
            <input type="text" id="ps" class="message col-md-9" name="ps" placeholder="借音譜、架子等，限50字">
         </div>

        <div class="blank_l col-md-5"></div>
        <div class="blank_lcol-md-3">
             <a href='{{url("/musical_sure/{$musical->id}")}}'>
                <input class="btn_sure btn-link " type="submit" value="預約" onblur="checknull(this)">
             </a>
        </div>
        <div class="blank col-md-5"></div>

    </form>


</main>

<!-- body code goes here -->

  <script src="../js/laydate/laydate.js"></script>
  <script src="../js/app.js"></script>


</body>
</html>
