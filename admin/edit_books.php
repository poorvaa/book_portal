<html>
<head>
<link rel="stylesheet" href="./css/style.css">
 <body style="margin: 0">
            <div style ="width:100%; height:100%; background-color:#e9eaed;">
            <div style ="width:100%; height:15%; background-color:#3a5795;" >
                    <h1 align ="center">EDIT BOOK DETAILS</h1>
            </div>
                
                <?php
require_once ('db_connectivity.php');
$book_id=$_GET['book_id'];
//query to get details of this particular id
 $book_details=
"
SELECT * 
FROM `books`
where `book_id`='$book_id'
";
$exe=mysql_query($book_details);
$fetch_details=mysql_fetch_array($exe);
//echo "$fetch_details[0]";
//query to get all genres
 $genres=
"
SELECT *
FROM `genre`
";
$exe_genres=mysql_query($genres);



echo"
  <div class='container'>
        <section class='register'>  
 <form method='get' action='edit_book_record.php'>
 <fieldset>
 <legend>Change the details</legend>
 <input type='hidden' name='book_id' value='$fetch_details[0]'/>
 Book Name:<input type='text' name='name' value='$fetch_details[3]'/><br>
 No of Copies:<input type='number' min='0' name='copies' value='$fetch_details[4]'/><br>
 Genre:<select name='genre'>";
 while($fetch_genres=mysql_fetch_array($exe_genres))
 {
     echo"<option value=".$fetch_genres[1].">$fetch_genres[1]</option>";
 }
 
 echo "</select><br>
 Author:<input type='text' name='author' value='$fetch_details[5]'/><br>
 Publication:<input type='text' name='publication' value='$fetch_details[6]'/><br>
 Edition:<input type='number' min='0' name='edition' value='$fetch_details[7]'/>
 <br><br><br>
 <input type='submit' value='submit'/>
 </fieldset>
 </form>";
?>
                </section>
        </div>
</div>
</div>
</head>
</html>