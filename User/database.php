<?php
$host="localhost";
$user="root";
$pass="root";
$db="test";
$con=new mysqli($host,$user,$pass,$db);
if(!$con)
{
	die("Could not connect".mysql_error());
}
?>