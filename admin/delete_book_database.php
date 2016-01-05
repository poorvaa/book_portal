<?php
require_once ('db_connectivity.php');
 $id=$_GET['book_id'];
 //$copies=$_GET['copies'];
 //echo "$copies";
 //query to delette database
// $query=
// "
// SELECT `no_books`
// FROM `books`
// where `book_id`='$id'
// ";
// //echo "";
// $exe=mysql_query($query);
// $fetch=mysql_fetch_array($exe);
// $updated_copies=$fetch[0]-$copies;
 //query to update db
$delete=
"
DELETE FROM `books` 
WHERE `book_id`='$id'
";
 $exec=mysql_query($delete);
 
 if(mysql_affected_rows())
{
	//updated successfully
	header("Location:delete_books2.php?deleted");
}
else
{
	//error in updation
	header("Location:delete_books2.php?noUpdate");
}

 
?>