<?php
session_start();
include_once("database.php");
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $query="select * from Registration where R_emailid='$_POST[email]'";
    $sql=mysqli_query($con,$query);
    $row=mysqli_num_rows($sql);
    if($row==1)
    {
        $_SESSION['email']=$email;
        $to = $email;
        $subject = 'the subject';
        $message = 'hello';
        $headers = 'From: jainam.k.addweb@gmail.com' . "\r\n";
        $mail=mail($to, $subject, $message, $headers);

        if($mail==true)
        {
            echo "Message sent successfully";
        }
        else
        {
            echo "Message could not sent";
        }
    }
    else
    {
        echo "<script>
                alert('Please Enter Valid Email Id');
                window.location.href = 'forgetpassword.php';
            </script>";
        //header("location:forgetpassword.php?message=Please Enter Valid Email Id");
    }
}
?>