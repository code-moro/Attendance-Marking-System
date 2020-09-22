



<?php
$db = mysqli_connect('localhost', 'root', '', 'attendace');

if (isset($_POST['new_password'])) {
  $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
  $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);

  // Grab to token that came from the email link
 session_start();
 $token=$_SESSION['token'];
  if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
  if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
 
    // select email address of user from the password_resets table 
    $sql = "SELECT email FROM password_resets WHERE token='$token' LIMIT 1";
    $results = mysqli_query($db, $sql);
    $email = mysqli_fetch_assoc($results)['email'];

    if ($email) {
      
      $sql = "UPDATE teacher SET pass='$new_pass' WHERE email='$email'";
      $results = mysqli_query($db, $sql);
      header('location: index.php');
    }
  }
  
  ?>
