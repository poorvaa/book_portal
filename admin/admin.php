<?php
require '../core.php';

if(loggedin())
{
?>
<html>
    <head> 
        <link rel="stylesheet" href="./css/style.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
    </head>
    
    
    
    <body style="margin: 0">
            <div style ="width:100%; height:100%; background-color:#e9eaed;">
            <div style ="width:100%; height:15%; background-color:#3a5795;" >
                    <h1 align ="center">ADMIN PAGE</h1>
					<a href = "../logout.php"><button>logout</button></a>
            </div>
               
        
        
        <div align="center">
            <br><br>    
        <a href="insert_books.php"><input type="button" class="button" value="Insert books"></a><br><br>
        <a href= "edit_books_details.php"><input type="button" class="button" value="Edit books"></a><br><br>
        <a href= "delete_books2.php"><input type="button" class="button" value="Delete books"></a>
        </div>
    
            </div> 
            
    </body>
</html>

<?php

}
else
{
	//echo 'hey';
	//header('Location: ../main.php?admin_login_error');
	echo "WORKING";
}
?>