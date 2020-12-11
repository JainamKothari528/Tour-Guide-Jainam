<?php
session_start();
$password=$_POST['password'];
$conpassword=$_POST['confirm_password'];
if(isset($_POST['submit']))
{
    if($password!=$conpassword)
    {
        echo "password in not match";
    }
    else
    {
        echo "password match successfully";
    }
}

?>