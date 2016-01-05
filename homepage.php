<?php
require_once 'db_connectivity.php';
require 'core.php';

if(loggedin() && $_SESSION['priv'] == 1)
{
$username=$_SESSION['username'];
$id_q="SELECT `user_id`,`firstname` FROM `users` WHERE `email` LIKE '$username'";
//    echo "$id";
$id_exe=  mysql_query($id_q);
//echo "$id_exe";
if($id_exe === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

else
{
$id_fetch=mysql_fetch_array($id_exe);
$id=$id_fetch[0];
$firstname=$id_fetch[1];
}



?>

<html>
<head>
<style>

</style>
<title>online book store</title>
  <!--slider code--> 

<link rel="stylesheet" href="slider2.css">
<script src="//assets.codepen.io/assets/libs/modernizr-0e41cf622f0788eca25945c37bdc5b15.js"></script>

 <!--slider code-->
<link rel="stylesheet" href="homepage.css">
</head>

<body style = "margin: 0px">      
            <?php

include 'header.htm';
?>
            
            <div class="image">
        <?php

include 'slider2.htm';
?>
                
            </div>
            
    
    <div class="text">
            </div>
            
            <a href="categories/suspense.php?submit&user_id=<?php echo $id ?>">                 
            <div class="div_1">
            <div class="div1_header">
            <font class="div1_font">SUSPENSE</font>
            </div>
            </div>
            </a>
            
            <a href="categories/romance.php?submit&username=<?php echo $username ?>">
            <div class="div_2">
            <div class="div2_header">
            <font class="div2_font">ROMANCE</font>
            </div>
            </div>
            </a>
    
            <a href="categories/fiction.php?submit&username=<?php echo $username ?>">
            <div class="div_3">
            <div class="div3_header">
            <font class="div3_font">FICTION</font>
            </div>
            </div>
            </a>
    
            <a href="categories/academics.php?submit&username=<?php echo $username ?>&user_id=<?php echo $id ?>">
            <div class="div_4">
            <div class="div4_header">
            <font class="div3_font">ACADEMICS</font>
            </div>
            </div> 
            </a>
           
            </body>
            </html>
    
<?php
    
      
               
}else if(loggedin() && $_SESSION['priv'] == 0)
{
    header('Location:admin/admin.php?submit');
}

else{
	header('Location: main.php');
}
               
  ?>        