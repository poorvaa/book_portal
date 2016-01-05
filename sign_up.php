<html>
<head>
<script type= "text/javascript" src= "js/sign_up.js"></script>
<script type= "text/javascript" src= "js/jquery.min.js"></script>

</head>
<body>
<center>
 
  <form name="signup" action="sign_up_db.php" method="get" onsubmit="return !!(gender_check()& check_conf_pass() & check_pass() )">
<div id="name">
<input type="text" placeholder= "FIRST NAME" name="first_name" style="width:150px;height:30px" id="fname" required> &nbsp &nbsp &nbsp
<input type="text" placeholder= "LAST NAME" name="last_name" style="width:150px;height:30px" required><br><br>
</div>
<div id="email">
<input type="email" placeholder= "ENTER EMAIL ADDRESS"  name="email" style="width:330px;height:30px;" required><br><br>
</div>
<div id="pass">
<input type="password" placeholder= "ENTER PASSWORD" name="password" id="password" style="width:330px;height:30px" required ><br><br>
<span id= "error_msg" style=""></span>
</div>
<div id="conf_pass">
<input type="password" placeholder= "CONFIRM PASSWORD" name="conf_password" id="conf_password" style="width:330px;height:30px" required><br><br>
<span id= "error1_msg"></span>
</div>
<span style="font-family:">Birthday:</span> &nbsp &nbsp <input type="date" name="dob" min="1990-01-01" max="<?php echo date("Y-m-d")?>" style="width:250px;height:30px" required><br><br>
<div>
<input type="radio" name="gender" id="male" value="male">Male
<input type="radio" name="gender" id="female" value="female">Female<br><br>
<span id="error2_msg"></span>
</div>

<input class="signup_btn" type="submit" value="sign up" style="width:100px;height:30px" >
</body>
</center>
</html>