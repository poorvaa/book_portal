<?php
date_default_timezone_set('Asia/Calcutta');
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "practice";
$link = mysql_connect($hostname, $username, $password);
/* if(!$link)
{
	die("connection failed:");
}
else
{
	echo "connection successful";
} */
$selected = mysql_select_db($db_name);
/* if(!$selected)
{
	die("failed");
}
else
{
	echo "successful";
} */

?>