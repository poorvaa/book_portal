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
$i=0;
while($fetch=  mysql_fetch_array($exe)){
    $id1[$i]=$fetch[0];
    $id2[$i]=$fetch[1];
    $id3[$i]=$fetch[2];
    $i++;
}
//    echo"$id1";
    ?>

<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip0").click(function(){
    $("#panel0").slideDown("slow");
    });
});

$(document).ready(function(){
    $("#flip0").click(function(){
    $("#panel0").slideUp("slow");
    });
});
$(document).ready(function(){
    $("#flip1").click(function(){
    $("#panel1").slideDown("slow");
    });
});

$(document).ready(function(){
    $("#flip1").click(function(){
    $("#panel1").slideUp("slow");
    });
});
</script>
 
<style> 
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 2px #c3c3c3;
}

#panel {
    padding: 50px;
    display: none;
}
</style>
</head>
<body>
    <?php
    echo $i;
    $x=0;
 while($x<$i)
 {
     ?>
<div id="flip<?php echo @$x; ?>"><button><?php echo "$id2[$x]" ?></button></div>
<div id="panel<?php echo $x; ?>"><?php echo "$id3[$x]" ?></div>


</body>
</html>   


		
    
    
    
    <?php
    $x++;
 }
              
        }
    ?>