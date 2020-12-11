<?php
session_start();
include_once("database.php");

if(isset($_POST['login-user']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from Registration where R_emailid='$email' and R_password='$password'";
    $query=mysqli_query($con,$sql);
    $row=mysqli_num_rows($query);
    if($row == 1)
    {
        $_SESSION['email']=$email;
        header('location:index.php');
    }
    else
    {
        header('location:login.php');
    }
}

?>