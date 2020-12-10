<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>練團室預約</title>
    <!-- Bootstrap -->
    <link href="../css/bandrooms/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="../css/bandrooms/lendstyle.css" rel="stylesheet" type="text/css">
</head>
	
	
<body>
	  
<header>
  <a href="{{ url('/') }}">
  <div class="header col-md-12">
  <div class="main_list col-md-4"><img src="../images/bandrooms/btn_navbar.png"></div></a>
  <div class="title_home  col-md-4"><p class = "title">練團室預約</p></div> <!--預約-->
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
	
	
  <div class="img_0 col-md-4">
    <a href="../images/bandrooms/{{$bandroom->image}}">
        <img class="imgbtn" src="../images/bandrooms/{{$bandroom->image}}"/>
    </a>
      </div>
	
      <div class="font_0 col-md-6">
        <p>{{$bandroom->name}}<br>
          每小時 {{$bandroom->rent}} 費用<br>
        </p>
      </div>
	
      <form action="/bandroom_check/{{$bandroom->id}}" method="get">
        <div class="INTRODUCTION col-md-6">

            <div class="font col-md-2"><strong>預約日期:</strong></div>
            <input type="date" id="lend_date" class="message col-md-9" name="lend_date" required>
            <div class="font col-md-2"><strong>預約時間:</strong></div>
            <div class="message col-md-9">
              <select class="time hour_choose" name="lend_time"  required>
                <option value="A">09:00~10:00</option>
                <option value="B">10:00~11:00</option>
                <option value="C">11:00~12:00</option>
                <option value="D">13:00~14:00</option>
                <option value="E">14:00~15:00</option>
                <option value="F">15:00~16:00</option>
                <option value="G">16:00~17:00</option>
                <option value="H">17:00~18:00</option>
                <option value="I">18:00~19:00</option>
                <option value="J">19:00~20:00</option>
                <option value="K">20:00~21:00</option>
              </select>
  
            </div>

            <div class="font col-md-2"><strong>備註:</strong></div>
            <input type="text" id="content" class="message col-md-9" name="content" >
         </div>

        <div class="blank_l col-md-5"></div>
        <div class="blank_lcol-md-3">
             <a href='{{url("/bandroom_sure/{$bandroom->id}")}}'>
                <input class="btn_sure btn-link " type="submit" value="預約">
             </a>
        </div>
        <div class="blank col-md-5"></div>

    </form>

</main>
	  
<!-- body code goes here -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="../js/bandrooms/jquery-3.2.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bandrooms/popper.min.js"></script>
  <script src="../js/bandrooms/bootstrap-4.0.0.js"></script>
  <script src="../js/bandrooms/laydate/laydate.js"></script>
</body>
</html>