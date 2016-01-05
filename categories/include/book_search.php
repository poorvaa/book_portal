<?php
require_once('db_connectivity.php');
$book=$_GET['search_book'];
$username=$_GET['username'];
//echo "$username";
if($book==''){
 header("Location:../../homepage.php");   
}
else{
$search=" SELECT `book_id` FROM `books` WHERE `name`='$book'";
//echo"$search";
$search_exe=  mysql_query($search);
if($search_fetch= mysql_fetch_array($search_exe)){
    
$book_id=$search_fetch[0];
header("Location:search_results.php?found&book_id=$book_id&username=$username");
}
else{
header("Location:search_results.php?no&book_id=$book_id&username=$username");
    
}
}
?>

