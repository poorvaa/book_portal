<?php
require_once '../db_connectivity.php';
$user_id=$_GET['userid'];
$book_id=$_GET['book_id'];
$q="SELECT * FROM `cart` WHERE `book_id`='$book_id' AND `user_id`='$user_id'";
$q_exe=  mysql_query($q);
if(mysql_affected_rows()==0){
$insert="INSERT INTO `cart`(`book_id`, `user_id`)VALUES('$book_id','$user_id')";
$exe=  mysql_query($insert);
header('Location:../user/user1.php?inserted2');
}
 else {
     header('Location:../user/user1.php?present2');
}
?>