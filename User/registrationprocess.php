<?php
session_start();
include_once("database.php");

if(isset($_POST['submit']))
{
    
    $arg=$con->prepare("call procedure1(?,?,?,?,?,?)");

    $arg->bind_param("ssssss",$name,$mobno,$state,$city,$email,$pass);
    $name=$_POST['Username'];
    $mobno=$_POST['mobile'];
    $state=$_POST['statename'];
    $city=$_POST['city'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $arg->execute(); 
    header("location:login.php");
}
else
{
    header("location:reg.php");
}
?>
