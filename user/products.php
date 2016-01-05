<?php
require_once 'db_connectivity.php';
require '../core.php';
if(loggedin())
{
$username=$_SESSION['username'];
$user_id=$_SESSION['user_id'];
?>

<html>
<head>
    <link rel="stylesheet" href="include/categories.css">
        <link rel="stylesheet" href="user.css">
        <link rel="stylesheet" href="styles.css"> 
<!--        <link rel="stylesheet" href="New.css">-->
</head>
<body style = "margin: 0px"> 
        <?php

include 'include/header.htm';
?>
           
        
     
	
        
		<?php
              
        }
    ?>
<div id="mainspace">
    
<div id="left_margin">                
<div id='cssmenu'>
<ul>
   <li><a href='../homepage.php'<span>Home</span></a></li>
   <li><a href='products.php'><span>Products</span></a></li>
   <li><a href='coupons.php'><span>Coupons</span></a></li>
   <li><a href='#'><span>Contact</span></a></li>
   <li><a href='#'><span>Contact</span></a></li>
   <li><a href='#'><span>Contact</span></a></li>
   <li><a href='#'><span>Contact</span></a></li>
</ul>
</div>
</div>
       
    
        
        
        
        
    
        
<center>
    <div id="commentbox3">
    <div id="commenttext">PRODUCTS</div>
            <?php
    $cart="SELECT `issn`,`name`,`genre`,`author`,`timestamp`FROM `books`INNER JOIN `cart` ON cart.book_id=books.book_id AND `user_id`='$user_id' AND `flag`='1'  ";
//    echo "$wishlist";
    $exe2=  mysql_query($cart);
    if($exe2 === FALSE) { 
    die(mysql_error());    // TODO: better error handling
}

else
{  ?>

            <table border=1><tr align= center>
            <th> ISSN</th>
            <th> Book Name</th>
            <th> Genre</th>
            <th> Author</th>
            <th> Date of purchase</th>
            <th> Time</th>
            </tr>
            
            
            
         <?php 
         
         
         
         
         
         while($fetch2=mysql_fetch_array($exe2)){
             $timestamp =$fetch2[4];
            $splitTimeStamp = explode(" ",$timestamp);
             $date = $splitTimeStamp[0];
            $t1 = $splitTimeStamp[1];
            $t2= explode(".",$t1);
            $time=$t2[0];
              echo"<tr align= center>
            
              <td>$fetch2[0]</td>
              <td>$fetch2[1]</td>
              <td>$fetch2[2]</td>
              <td>$fetch2[3]</td>
              <td> $date</td>
              <td> $time</td>
              </tr>";
              
              }  


}?>
    
    </div>
    </div>

</center>
</body>
</html>