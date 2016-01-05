<html>
<head>
<script type= "text/javascript" src= "js/sign_up.js"></script>
<script type= "text/javascript" src= "js/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
 
<div id= "login_div">

<div id= "header">
    <font class="heading">Online Book Store</font>
</div>

    <div id="signin_div">
<?php

include 'signin.php';
?>
        </div>
</div>
    <div class="description">
        <img src="A-bookstore...png">
    </div>

<div id= "signup_div">
    <?php 
if(isset($_GET['error2'])){
    echo'invalid username or password';
}
if(isset($_GET['login_error'])){
    echo'invalid username or password';
}
 if(isset($_GET['admin_login_error'])){
    echo'invalid username or password';
 }
 
?>   
    <center><font style="font-family: 'Freight Sans Bold', 'lucida grande',tahoma,verdana,arial,sans-serif !important;font-weight: normal; font-size: 36px;"> Sign Up</font></center>
    <br>
<?php
include 'sign_up.php';


@session_start();
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
header('Location:homepage.php');
?>
</div>
</body>
</html>

