<?php
require_once ('db_connectivity.php');
$name=$_GET['name'];
$issn=$_GET['issn'];
$author=$_GET['author'];
$publication=$_GET['publication'];
$edition=$_GET['edition'];
$genre=$_GET['genre'];
$no_books=$_GET['no_books'];

// query to check if this book already exists 
 $query_check=
"
Select * 
FROM `books`
where `issn`='$issn'
";
$exe_select=mysql_query($query_check);
$fetch_details=mysql_fetch_array($exe_select);
if($fetch_details['issn']==$issn)
{

   $updated_copies=$fetch_details['no_of_copies']+$no_books;
   //query to update books record 
  	$update_record=
		"UPDATE `books` 
		SET `no_of_books` = '$updated_copies'
        where `book_id`='.$fetch_details[0].'
		AND `genre`= '$genre'
		AND `name`='$name'
		AND `author`='$author'
		AND `publication='$publication'`
		"; 
		
		$exe_update_record=mysql_query($update_record);
}

else
{
 //query to inserts data in table
  $query_insert=
 "
 INSERT INTO
 `books` VALUES
 ('',$issn,'$genre','$name',$no_books,'$author','$publication','$edition')
 ";
 $exe_insert=mysql_query($query_insert);
}

if(mysql_affected_rows()==1)
{
header("Location:insert_books.php?addedBook");
}
else
{
header("Location:insert_books.php?error_adding_book");	

}
?>