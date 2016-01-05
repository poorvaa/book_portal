<html>
<head>
<link rel="stylesheet" href="./css/style.css">
<script type="text/javascript" src="admin_js.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
 <body style="margin: 0">
            <div style ="width:100%; height:100%; background-color:#e9eaed;">
            <div style ="width:100%; height:15%; background-color:#3a5795;" >
                    <h1 align ="center">DELETE BOOKS</h1>
            </div>
               

<?php
require_once ('db_connectivity.php');

//if(isset($_GET['edited']))
//				{
//					echo "<h2 align='center'>Book Edited Successfully</h2>";
//				}
//				if(isset($_GET['unedited']))
//				{
//					echo "<h2 align='center'>Book Not edited </h2>";
//				}
				
if(isset($_GET['deleted']))
				{
					echo "<h2 align='center'>Books deleted </h2>";
				}				
				if(isset($_GET['noUpdate']))
				{
					echo "<h2 align='center'>Book Not deleted </h2>";
				}


//query to select all books details from database
$query_books=
"
SELECT * 
FROM `books`
";
$exe_book=mysql_query($query_books);
?>
<div class="table">    
<table border=1><tr align= center>

<th> Book Name</th>
<th> No Of Copies</th>
<th> Genre</th>
<th> Author</th>
<th> Publication</th>
<th> Edition</th>
<th colspan="2">Action</th>
</tr>
<?php
while($fetch_details=mysql_fetch_array($exe_book))
{
echo"<tr align= center>

<td>$fetch_details[3]</td>
<td>$fetch_details[4]</td>
<td>$fetch_details[2]</td>
<td>$fetch_details[5]</td>
<td>$fetch_details[6]</td>
<td>$fetch_details[7]</td>
<td>
<button><a href='delete_book_database.php?book_id=$fetch_details[0]'>Delete</button></a></td>
";

}

?>
</div>
            </div>
</head>
</html>