<?php
require_once('db_connectivity.php');
$first_name=$_GET['first_name'];
$last_name=$_GET['last_name'];
$email=$_GET['email'];
$password=$_GET['password'];
$conf_password=$_GET['conf_password'];
$gender=$_GET['gender'];
$dob=$_GET['dob'];

$query="SELECT `email` FROM `users` where `email` like '$email'";
$exe=mysql_query($query);
if(mysql_affected_rows()==1)
{
header("Location:main.php?error2");
}
else
{
	$enc_pass = md5($password);
    $insert=
"
INSERT INTO `users`(`privilege`,`firstname`,`lastname`,`email`,`password`,`gender`,`dob`) 
VALUES(1,'$first_name','$last_name','$email','$enc_pass','$gender','$dob')
";
$exe=mysql_query($insert);
/* echo $first_name;
echo $last_name;
echo $dob; */
if($exe)                                                    //directing 2 homepage  for msg displaying
{
      header("location:homepage.php?submit&username=$first_name");         
      
}
 else 
{
       header("location:main.php?error");         // do something for this
       
}

}






//while($fetch=mysql_fetch_array($exe))                                         this while condition was giving error 
//{                                                                             corrected by using affected rows function
//   if($fetch[0]==$email){
//     header("location:main.php?error2"); 
//   }
//else{
//    $insert=
//"
//INSERT INTO `users`(`firstname`,`lastname`,`email`,`password`,`gender`,`dob`) 
//VALUES('$first_name','$last_name','$email','$password','$gender','$dob')
//";
//$exe=mysql_query($insert);
///* echo $first_name;
//echo $last_name;
//echo $dob; */
//if($exe)                                                    //directing 2 homepage  for msg displaying
//{
//      header("location:homepage.php?submit");         
//      
//}
// else 
//{
//       header("location:main.php?error");     
//       
//}
//}
//}
?>