<?php 

session_start();


error_reporting(0);
$connect=mysqli_connect('localhost','root','','te a');
if(mysqli_connect_errno($connect))
{
echo 'failed to connect'.mysql_connect_error();
}



$div=$_POST["div"];
$str="10,15,20,25,30";
$sub=$_POST["sub"];
$a=explode(",",$str);

$b=count($a);
echo $b;
$roll='r';
mysqli_query($connect,"insert into daa(dat,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12,r13,r14,r15,r16,r17,r18,r19,r20,r21,r22,r23) values('15/20','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1')");
for($i=0;$i<$b;$i++)
{
	$c=$roll.$a[$i];
	mysqli_query($connect,"update daa set $c='0' ");

	
}

?>