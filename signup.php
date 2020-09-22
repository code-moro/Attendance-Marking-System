<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Sign up Form with Icons</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="css/home.css">
<style type="text/css">
	body {
		color: #fff;
		/*background: #19aa8d;*/
		font-family: 'Roboto', sans-serif;
	}
	.form-control, .form-control:focus, .input-group-addon {
		border-color: #e1e1e1;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 390px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
	.signup-form .form-control {
		min-height: 38px;
		box-shadow: none !important;
	}	
	.signup-form .input-group-addon {
		max-width: 42px;
		text-align: center;
	}
	.signup-form input[type="checkbox"] {
		margin-top: 2px;
	}   
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #19aa8d;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #179b81;
        outline: none;
	}
	.signup-form a {
		color: #fff;	
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #19aa8d;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
	.signup-form .fa {
		font-size: 21px;
	}
	.signup-form .fa-paper-plane {
		font-size: 18px;
	}
	.signup-form .fa-check {
		color: #fff;
		left: 17px;
		top: 18px;
		font-size: 7px;
		position: absolute;
	}
</style>

<script type="text/javascript">
//javascript function to valid data
function valid()
{
var email=document.getElementById("email").value;
var mobile=document.getElementById("phone").value;
var pass=document.getElementById("pass").value;
var conf=document.getElementById("conf").value;
//regular exp to check email and phone number validation
var email1=/^([a-zA-z0-9\.-]+)@([a-zA-z0-9-]+)\.([a-z]{3})$/;
var mobile1=/^[7-9][0-9]{9}$/;
if(email1.test(email)==false)
{
 alert("Provide a proper Email-Id");
 return false;	
}
else if(mobile1.test(mobile)==false)
{
alert("Provide a proper Mobile Number");
return false;	
}
else if(pass.length<8)
{
alert("Password To small");
return false;	
}
else if(pass!==conf)
{

	alert("Your Password and Retype password Dont Match");
	return false;	
}
else{
alert("Sign UP Successful");
return true;	
}
}	
</script>
</head>
<body>
<div class="container1">
  <img src="dose-media-424257-unsplash-SMALL.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
<div class="signup-form">
    <form action="confirmation.php" onsubmit="return valid()"  method="post">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="username" placeholder="Username" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="text" id="email" class="form-control" name="email" placeholder="Email Address" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-home"></i></span>
		<input type="text" class="form-control" name="Department" placeholder="Department" required="required">
			</div>
        </div>
         <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-phone"></i></span>
				<input type="text" id="phone" class="form-control" name="phonno" placeholder="Mobileno" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" id="pass"class="form-control" name="password" placeholder="Password"  required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lock"></i>
					<i class="fa fa-check"></i>
				</span>
				<input type="password" id="conf" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
			</div>
        </div>
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
              <button type="reset" class="btn btn-primary btn-lg" onclick="window.location.href = 'homepage.php';">Cancel</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="lgin.php">Login here</a></div>
</div>
</div>
</div>
</body>
</html>                            
<?php
include 'connecting.php';
 session_start();


$_SESSION['username']=$name;
$_SESSION['email']=$name;
$_SESSION['Department']=$dept;
$_SESSION['phonno']=$phone;
$_SESSION['password']=$pass;

?>