<?php
require_once('db_connectivity.php');
//$username=$_GET['username'];

@session_start();
 $_SESSION['username'] = $_GET['username'];
$_SESSION['password'] = $_GET['password'];
 $u_name = $_GET['username'];
$username = mysql_real_escape_string($u_name); 
//$username = $_SESSION['username'];
//$password = $_SESSION['password'];
$password = $_GET['password'];

//$id_q="SELECT `user_id` FROM `users` WHERE `email` LIKE '$username'";
////echo "$id";
//$id_exe=  mysql_query($id_q);
//$id_fetch=mysql_fetch_array($id_exe);
//$id=$id_fetch[0];
//echo "$id";

$pass = md5($password);

$query = "SELECT `user_id` FROM `users` WHERE `email` = '$username' and `password` = '$pass'";
			if($query_run = mysql_query($query))
			{
				$query_num_rows = mysql_num_rows($query_run);	
			
				if($query_num_rows == 0)
					header('Location: main.php?login_error');
				else if($query_num_rows > 0)
					{
						
						$user_id = mysql_result($query_run, 0, 'user_id');
						$_SESSION['user_id'] = $user_id;
						
						$querry="SELECT `privilege`,`firstname` FROM `users` WHERE `user_id` = $user_id";
						
						if($exe_query= mysql_query($querry))
						{
							$fetch_pass= mysql_fetch_array($exe_query);
							
							$priv = $fetch_pass[0];
							$_SESSION['priv'] = $priv;

							if($priv ==1){
								header("Location:homepage.php?submit");
							}

							else {
								header("Location:admin/admin.php?submit");
							}
							
						}
						
						else
							echo "Could not connect to database";
						
						//header('Location:homepage.php');	
					}	
			}


/* $querry="SELECT `password`,`privilege` FROM `users` WHERE `email` LIKE '$username'";
if($exe_query= mysql_query($querry))
{
$fetch_pass= mysql_fetch_array($exe_query);
$pass=$fetch_pass[0];
$priv = $fetch_pass[1];


if($pass==md5($password) && $priv ==1){
    header("Location:homepage.php?submit&username=$username");
}

else if($pass==md5($password) && $priv ==0){
    header("Location:admin/admin.php?submit&username=$username");
}
else{
header("Location:main.php?error2");
} */

//}
//else
//    echo "error";
?>

