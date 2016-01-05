<?php
require_once ('db_connectivity.php');
 $id=$_GET['id'];
 $copies=$_GET['copies'];
 //echo "$copies";
 //query to delette database
 $query=
 "
 SELECT `no_books`
 FROM `books`
 where `book_id`='$id'
 ";
 //echo "";
 $exe=mysql_query($query);
 $fetch=mysql_fetch_array($exe);
 $updated_copies=$fetch[0]-$copies;
 //query to update db
 $update=
 "
 UPDATE books 
SET `no_books` = '$updated_copies' 
WHERE `book_id`='$id'
";
 $exec=mysql_query($update);
 
 if(mysql_affected_rows())
{
	//updated successfully
	header("Location:edit_books_details.php?deleted");
}
else
{
	//error in updation
	header("Location:edit_books_details.php?noUpdate");
}

 
?>