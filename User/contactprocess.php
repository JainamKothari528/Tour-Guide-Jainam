<?php
include_once("database.php");
if(isset($_POST['submit']))
{
    
   	$arg=$con->prepare("INSERT INTO Contact_us(contact_name,contact_email_id,contact_phone_no,contact_des) VALUES (?,?,?,?)");
    $arg->bind_param("ssis",$name,$emailid,$mobileno,$des);
    $name=$_POST["name"];
    $emailid=$_POST["email"];
    $mobileno=$_POST["mobno"];
    $des=$_POST["des"];
    $arg->execute();
    header("location:index.php");
}

?>