<?php
require_once 'db_connectivity.php';
require '../core.php';
if(loggedin())
{
$username=$_SESSION['username'];
$user_id=$_SESSION['user_id'];

$a=  rand(1,6);
$b=  rand(1,6);
$c=  rand(1,6);

$query="SELECT * FROM `coupons` WHERE `id` LIKE '$a' or `id` LIKE '$b' or `id` LIKE'$c'";
$exe=  mysql_query($query);
while($fetch=  mysql_fetch_array($exe)){
    $id1=$fetch[0];
    $id2=$fetch[1];
    $id3=$fetch[2];
//    echo"$id1";
    ?>

<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".btn1").click(function(){
        $("p").slideUp(1000, function(){
            alert("The slideUp() method is finished!");
        });
    });
    $(".btn2").click(function(){
        $("p").slideDown(1000, function(){
            alert("The slideDown() method is finished!");
        });
    });
});
</script>
</head>
<body>

<p>This is a paragraph.</p>

<button class="btn1">Slide up</button>
<button class="btn2">Slide down</button>

</body>
</html> <?php   
}
?>

		
    
    
    
    <?php
              
        }
    ?>