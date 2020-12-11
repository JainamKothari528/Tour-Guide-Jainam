<?php
include "vendor/phpmailer/phpmailer/PHPMailer.php";
include "vendor/phpmailer/phpmailer/Exception.php";

require_once "vendor/autoload.php";

//PHPMailer Object

$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//From email address and name
$mail->From = "jainam.k.addweb@gmail.com";
$mail->FromName = "Full Name";

//To address and name
$mail->addAddress("jainam.k.addweb@gmail.com", "Recepient Name");
//$mail->addAddress("recepient1@example.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo("jainam.k.addweb@gmail.com", "Reply");

//CC and BCC
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";
echo "dxfdsfsdf";
try 
{
    $mail->send();
    echo "try";
    echo "Message has been sent successfully";
}
catch (Exception $e) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}

