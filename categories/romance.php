<?php
require '../core.php';
if(loggedin())
{
$username=$_SESSION['username'];
$user_id=$_SESSION['user_id'];
?>

<html>
<head>
        <link rel="stylesheet" href="include/categories.css">	
</head>
<body style = "margin: 0px"> 
                    <?php

include 'include/header.htm';
?>
        </div>
        <center>
	
        <div class="table">
		<?php
                require_once ('../db_connectivity.php');
                $suspense="select * from `books` where `genre` like 'Romance'";
                $exe=mysql_query($suspense);
                if(mysql_affected_rows()!=0){
                ?>

            <table border=1><tr align= center>
            <th> Book Id</th>
            <th> ISSN</th>
            <th> Book Name</th>
            <th> No Of Copies</th>
            <th> Author</th>
            <th> Publication</th>
            <th> Edition</th>
            <th colspan="2"> Action</th>
            <th>image</th>
            </tr>

    <?php
    while($fetch=mysql_fetch_array($exe)){
    echo" 
    <tr align= center>
    <td>$fetch[0]</td>
    <td>$fetch[1]</td>
    <td>$fetch[3]</td>
    <td>$fetch[4]</td>
    <td>$fetch[5]</td>
    <td>$fetch[6]</td>
    <td>$fetch[7]</td>
    <td><a href='\\purva\user\wishlist_insert.php?book_id=$fetch[0]&userid=$user_id'><button>Wishlist</button></a>
         <a href='\\purva\user\cart_insert.php?book_id=$fetch[0]&userid=$user_id'><button>Cart</button></a> </td>    
    <td><img src='include/download.jpg' alt='Mountain View' style='width:150px;height:200px'></td>   
    ";
    
    }}
        else {
                echo '<h1 style="color:steelblue">NO DATA TO BE DISPLAYED</h1>';    
             }
        
        }else
{
    header('Location:main.php');
}
    ?>
	</div>
        </center>
        </div>	
	</body>
        </html>