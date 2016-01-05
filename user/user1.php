<?php
require_once 'include/db_connectivity.php';
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
             <?php 
if(isset($_GET['inserted'])){
    echo '<CENTER><h1 style="color:steelblue">ADDED TO WISHLIST</h1></CENTER>'; 
}
elseif(isset($_GET['present'])){
    echo '<CENTER><h1 style="color:steelblue">ALREADY PRESENT IN WISHLIST</h1></CENTER>'; 
}
if(isset($_GET['inserted2'])){
    echo '<CENTER><h1 style="color:steelblue">ADDED TO CART</h1></CENTER>'; 
}
elseif(isset($_GET['present2'])){
    echo '<CENTER><h1 style="color:steelblue">ALREADY PRESENT IN CART</h1></CENTER>'; 
}
    
?>  
        
        
        
        
    <div id="commentbox1">
    <div id="commenttext">WISHLIST</div>
    <?php
    $wishlist="SELECT `issn`,`name`,`genre`,`no_books`FROM `books`INNER JOIN `wishlist` ON wishlist.book_id=books.book_id AND `user_id`='$user_id'   ";
//    echo "$wishlist";
    $exe=  mysql_query($wishlist);
    if($exe === FALSE) { 
    die(mysql_error());    // TODO: better error handling
}

else
{  ?>

            <table border=1><tr align= center>
            <th> ISSN</th>
            <th> Book Name</th>
            <th> Genre</th>
            <th> No Of Copies</th>
            <th> Remove</th>
            </tr>
         <?php while($fetch=mysql_fetch_array($exe)){
              echo"<tr align= center>
            
              <td>$fetch[0]</td>
              <td>$fetch[1]</td>
              <td>$fetch[2]</td>
              <td>$fetch[3]</td>
              <td><a href='wishlist_delete.php?user_id=$user_id&issn=$fetch[0]'><button>REMOVE</button></td>
              </tr>"
    ;
              
              }  

                
}?>
   </table>
    </div>
    
        
    <div id="commentbox2">
    <div id="commenttext">CART</div>
    
     


       
        
        
        
            <?php
    $cart="SELECT `issn`,`name`,`genre`,`no_books`FROM `books`INNER JOIN `cart` ON cart.book_id=books.book_id AND `user_id`='$user_id' AND `flag`='0'  ";
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
            <th> No Of Copies</th>
            <th> BUY</th>
            </tr>
         <?php while($fetch2=mysql_fetch_array($exe2)){
              echo"<tr align= center>
            
              <td>$fetch2[0]</td>
              <td>$fetch2[1]</td>
              <td>$fetch2[2]</td>
              <td>$fetch2[3]</td>
              <td><a href='cart_delete.php?user_id=$user_id&issn=$fetch2[0]'><button>BUY</button></td>
              </tr>";
              
              }  


}?></table>
            <?php
              
        }
    ?>
    
    </div>   
</div>	
	</body>
        </html>