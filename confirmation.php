

<?php
include'connecting.php';
session_start();
$name=$_POST['username'];
$email=$_POST["email"];
$dept=$_POST["Department"];
$phone=$_POST["phonno"];
$pass=$_POST["password"];
$result=mysqli_query($connect,"select username from teacher where username='$name'") ;

$row =mysqli_fetch_array($result);
if ($row[0]!="")
{
	echo "username already exist plz go back and select another username";
}	
else{
mysqli_query($connect,"insert into teacher(username,email,dept,phone,pass) values('$name','$email','$dept','$phone','$pass')");

header("location:lgin.php");

}
?>


<html>
<head>
</head>
<form method="POST">
</form>
<body>
<h1></h1>
</body>
</html>