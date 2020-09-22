<?php
if (isset($_POST['submit'])) 
{
require 'C:\xampp\htdocs\mail\PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "ramdevbaba2211@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "Ashu@2211";

//Set who the message is to be sent from
$mail->setFrom($_POST['Email'], $_POST['username']);

//Set an alternative reply-to address
$mail->addReplyTo('ramdevbaba2211@gmail.com', 'janhvi');

//Set who the message is to be sent to
 $mail->addAddress('ramdevbaba2211@gmail.com', 'janhvi2101');
 $mail->isHTML(true);
 $mail->Subject='Form submission';
 $mail->Body='Name: '.$_POST['username'].'<br>Email:'.$_POST['Email'].'<br>Message:'.$_POST['message'];
 if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message sent!";
	header('location: homepage.php');
}
}
?>