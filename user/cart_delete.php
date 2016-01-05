<?php
require_once 'db_connectivity.php';
$user_id=$_GET['user_id'];
$issn=$_GET['issn'];
//echo "$issn";
$query="SELECT `book_id` FROM `books` WHERE `issn` LIKE '$issn'";
$exe=  mysql_query($query);
$fetch=  mysql_fetch_array($exe);
$book_id=$fetch[0];
echo "$book_id";

$query2="UPDATE `cart` SET `flag`='1' WHERE `book_id` like'$book_id' AND `user_id` LIKE '$user_id' ";
//echo "$query2";
$exe=  mysql_query($query2);
header('Location:user1.php');
?>