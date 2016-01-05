<?php
require_once ('db_connectivity.php');
 $book_id=$_GET['book_id'];
 $name=$_GET['name'];
 $genre=$_GET['genre'];
 //echo $genre ;
 $copies=$_GET['copies'];
 $author=$_GET['author'];
 $publication=$_GET['publication'];
 $edition=$_GET['edition'];
 //query to update record in database
$update="UPDATE `books` SET `book_id`='$book_id',`genre`='$genre',`name`='$name',`no_books`='$copies',`author`='$author',
    `publication`='$publication',`edition`='$edition' WHERE `book_id`='$book_id'";
// "UPDATE `books` 
//		SET `no_of_copies` = '$copies',
//		`name`='$name',
//		`genre`='$genre',
//		`author`='$author',
//		`publication`='$publication',
//		`edition`='$edition'
//        where `book_id`='$book_id'
//		
//		"; 
$exe=mysql_query($update);
if($exe)
{
 header("Location:edit_books_details.php?edited");
}
else
{
header("Location:edit_books_details.php?unedited");
}		 
?>