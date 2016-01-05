
<html>
    <head> 
        <link rel="stylesheet" href="./css/style.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>

    </head>
    <body style="margin: 0">
            <div style ="width:100%; height:100%; background-color:#e9eaed;">
            <div style ="width:100%; height:15%; background-color:#3a5795;" >
                    <h1 align ="center">INSERT BOOKS</h1>
                    <?php
            require_once ('db_connectivity.php');
            if (isset($_GET['addedBook'])) {
                echo "<center><font style='font-size:30px;'><b>Book Added Successfully</font></b></center>";
            }
            if (isset($_GET['error_adding_book'])) {
                echo "<h2 align='center'>Book Not Added </h2>";
            }

?>
            </div>

            

          
        <div class="container">
        <section class="register">
        <form action="insert_books_database.php" method="get">
        <fieldset>
        <legend>Enter the book details</legend>
        ISSN:<input type="text" name="issn" required=true><br>
        Name:<input type="text" name="name"  required=true><br>
	Genre:<select name="genre">';

<?php
            //query to select genres
            $query_genres = "SELECT * FROM `genre`";
            $exe_genre = mysql_query($query_genres);
            while ($fetch_genre_details = mysql_fetch_array($exe_genre)) {
                echo"<option value=" .$fetch_genre_details[1]. ">$fetch_genre_details[1]</option>";
            }
              ?>	
           	</select><br>
        No of books you want to add:<input type="number" min="0" name="no_books" required=true><br>
        Author:<input type="text" name="author"  required=true><br>
        Publication:<input type="text" name="publication"  required=true><br>
        Edition:<input type="number" min="0" name="edition"  required=true><br>
        <input type="submit" value="insert"  >
        </fieldset>
        </form>
        

        </div>
</body>
</html>

          

