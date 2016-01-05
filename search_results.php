<?php
require 'core.php';
if(loggedin())
{
$username=$_SESSION['username'];
$user_id=$_SESSION['user_id'];
$id=$_GET['book_id'];
?>

<html>
<head>
    <link rel="stylesheet" href="categories/include/categories.css">	
</head>
<body style = "margin: 0px"> 
                    <?php

include 'header.htm';
?>

        <center>
            
            <?php 
if(isset($_GET['found'])){
    echo '<CENTER><h1 style="color:steelblue">BOOK HAS BEEN FOUND</h1></CENTER>'; 
}
elseif(isset($_GET['no'])){
    echo '<CENTER><h1 style="color:steelblue">NOT PRESENT</h1></CENTER>'; 
}
?>
	
        <div class="table">
		<?php
                require_once('db_connectivity.php');
                $suspense="select * from `books` where `book_id` like '$id'";
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
    ";
    
    }}
        
        }
    ?>
	</div>
        </center>
        </div>	
	</body>
        </html>