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
</head>
<body>
<div class="container1">
  <img src="dose-media-424257-unsplash-SMALL.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
<div class="signup-form">
    <form action="try.php" method="post">
		<h2>Attendence</h2>
		<p>Please fill in this form to get attendence!</p>
		<hr>
        
         <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-home"></i></span>
         <select name="divisions" style="width:290px;height:40px;">
         <option value="Select Division" selected>Select Division</option>
    <option value="TE A">TE A</option>
    <option value="TE B">TE B</option>
    <option value="SE A">SE A</option>
    <option value="SE B">SE B</option>
  </select>
  </div>
        </div>
         <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-home"></i></span>
         <select name="subject"  style="width:290px;height:40px;">
         <option value="Select Subject" selected>Select Subject</option>
    <option value="cg">Computer Graphics</option>
    <option value="esiot">ESIOT</option>
    <option value="daa">daa</option>
    <option value="dm">discrete maths</option>
  </select>
  </div>
        </div>
         <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
         <input type=date value=date name="sdate" placeholder="Start Date" style="width:290px;height:40px;">
  </div>
     </div>  
     <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
         <input type=date value=date name='edate' placeholder="End Date" style="width:290px;height:40px;">
  </div>
     </div>  
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Show Attendence</button>
              <button type="reset" class="btn btn-primary btn-lg" onclick="window.location.href ='profile.php';">Cancel</button>
        </div>
    </form>
	
</div>
</div>
</div>
</body>
</html>   


<?php 

session_start();


error_reporting(0);
$connect=mysqli_connect('localhost','root','','te a');
if(mysqli_connect_errno($connect))
{
echo 'failed to connect'.mysql_connect_error();
}


$_SESSION['divisions']=$div;
$_SESSION['sdate']=$sdate;
$_SESSION['subject']=$sub;
$_SESSION['edate']=$edate;



?>




                         
