<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>教師預約</title>
    <!-- Bootstrap -->
	<link href="../css/teachers/laydate.css">
  <link href="../css/teachers/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="../css/teachers/res_style.css" rel="stylesheet" type="text/css" src="../js/teachers/laydate/laydate.js">
</head>
	
	
<body>
	  
<header>
  <div class="header col-md-12">
  <a href="{{ url('/') }}">
  <div class="main_list col-md-4"><img src="../images/teachers/lil_home.png"/></div></a>
  <div class="title_home  col-md-4"><p class = "title">教師預約</p></div> <!--預約-->
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
	
	
	<div class="img_0 col-md-4">
      <img src="../images/teachers/{{$teachers->tea_image}}"  height="250"/>
	</div>
	
  <div class="font_0 col-md-6">
	  <p>{{ $teachers->name }}<br>{{ $teachers->tea_inst }}
    </p>
  </div>
  
    <form action="/teacher_check/{{$teachers->id}}" method="get">
    
	    <div class="INTRODUCTION col-md-6">
	
	      <div class="font col-md-2">預約日期</div>
          <div class="message col-md-9">
            <input type="date" id="test1" class="message col-md-9" name="tea_date" required>
          </div>
		
	      <div class="font col-md-2">預約時段</div>
          <div class="message col-md-9">
            <select class="Ttime" name="tea_time"  required>
              <option value="A">T1  09:00~10:00</option>
              <option value="B">T2  10:00~11:00</option>
              <option value="C">T3  11:00~12:00</option>
              <option value="D">T4  12:00~13:00</option>
              <option value="E">T5  13:00~14:00</option>
              <option value="F">T6  14:00~15:00</option>
              <option value="G">T7  15:00~16:00</option>
              <option value="H">T8  16:00~17:00</option>
              <option value="I">T9  17:00~18:00</option>
              <option value="J">T10 18:00~19:00</option>
              <option value="K">T11 19:00~20:00</option>
              <option value="L">T12 20:00~21:00</option>
            </select>

          </div>
		
	      <div class="font col-md-2">給老師的話</div>
          <div class="message col-md-9">
            <input type="text" placeholder="輸入備註" name="tea_remarks">
          </div>
		
      </div>

        <div class="INTRODUCTION col-md-6"></div>
        <input class="btn_sure col-md-3" type="submit" value="預約">
        <a href='{{url("/teacher_sure/{$teachers->id}")}}'></a>
    </form>
	


</main>
	  
<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="../js/teachers/res_jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/teachers/res_popper.min.js"></script> 
  <script src="../js/teachers/res_bootstrap-4.0.0.js"></script>
  <script src="../js/teachers/laydate/laydate.js"></script>
</body>
</html>