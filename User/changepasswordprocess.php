<?php
include_once("database.php");
session_start();
if(isset($_POST['submit']))
{
    if($_POST['newpassword']!=$_POST['compassword'])
    {
        echo "<script>
            alert('New password and Confirm password is not match');
            window.location.href='changepassword.php';
        </script>";
    }
    else
    {
        $new=$_POST['newpassword'];
        $current=$_POST['oldpassword'];
        $id=$_SESSION['email'];
        $query=$con->prepare("UPDATE Registration SET R_password='".$new."' WHERE R_emailid='".$id."' AND R_password='".$current."'");
        $query->execute();
        echo "<script>
                alert('Password Change Successfully');
                window.location.href='login.php';
            </script>";
        session_clear();
    }
}
?>