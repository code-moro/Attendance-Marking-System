<?php 
error_reporting(0);
session_start();
$errors = [];
$user_id = "";
// connect to database
$db = mysqli_connect('localhost', 'root', '', 'attendace');

// LOG USER IN
if (isset($_POST['login_user'])) {
  // Get username and password from login form
  $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  // validate form
  if (empty($user_id)) array_push($errors, "Username or Email is required");
  if (empty($password)) array_push($errors, "Password is required");

  // if no error in form, log user in
  if (count($errors) == 0) {
    $password = md5($password);
    $sql = "SELECT * FROM teacher WHERE username='$user_id' OR email='$user_id' AND pass='$password'";
    $results = mysqli_query($db, $sql);

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $user_id;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong credentials");
    }
  }
}

/*
  Accept email of user whose password is to be reset
  Send email to user to reset their password
*/
if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  // ensure that the user exists on our system
  $query = "SELECT email FROM teacher WHERE email='$email'";
  $results = mysqli_query($db, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
  }
  // generate a unique random token of length 100
  $token = bin2hex(random_bytes(50));
  $_SESSION['token']=$token;

  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    $sql = "INSERT INTO password_resets(email, token) VALUES ('$email', '$token')";
    $results = mysqli_query($db, $sql);
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
$msg="Hi there, click on this <a href=\"localhost/mail/new_pass.php?token=" . $token . "\">link</a> to reset your password on our site";
$msg = wordwrap($msg,70);

//Set who the message is to be sent from
$mail->setFrom($_POST['Email'], $_POST['username']);

//Set an alternative reply-to address
$mail->addReplyTo('ramdevbaba2211@gmail.com', 'janhvi');
$em=$_SESSION['email'];
//Set who the message is to be sent to
 $mail->addAddress($em, 'janhvi2101');
 $mail->isHTML(true);
 $mail->Subject='Form Attendance System to reset your password';
 $mail->Body='Name: '.$_POST['username'].'<br>Email:'.$_POST['Email'].'<br>Message:'.$msg;
 if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message sent!";
	header('location: pending.php');
}
}
	}

// ENTER A NEW PASSWORD
if (isset($_POST['new_password'])) {
  $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
  $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);

  // Grab to token that came from the email link
 
 $token=$_SESSION['ashu'];
  if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
  if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
 
    // select email address of user from the password_resets table 
    $sql = "SELECT email FROM password_resets WHERE token='$token' LIMIT 1";
    $results = mysqli_query($db, $sql);
    $email = mysqli_fetch_assoc($results)['email'];

    if ($email) {
      
      $sql = "UPDATE teacher SET pass='$new_pass' WHERE email='$email'";
      $results = mysqli_query($db, $sql);
      header('location: http://localhost/lgin.php');
    }
  }

?>
