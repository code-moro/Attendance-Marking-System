
<?php

session_start();


error_reporting(0);
$connect=mysqli_connect('localhost','root','','te a');
if(mysqli_connect_errno($connect))
{
echo 'failed to connect'.mysql_connect_error();
}

session_start();
$div=$_POST['div'];
$str=$_POST["absent"];
$sub=$_POST["subject"];
$dat=$_POST["dat"];


$a=explode(",",$str);
$b=count($a);

$roll='r';
if($sub=='daa'){
mysqli_query($connect,"insert into daa(dat,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12,r13,r14,r15,r16,r17,r18,r19,r20,r21,r22,r23) values('$dat','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1')");
}
elseif($sub=='cg'){
mysqli_query($connect,"insert into cg(dat,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12,r13,r14,r15,r16,r17,r18,r19,r20,r21,r22,r23) values('$dat','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1')");
}
elseif($sub=='esiot'){
mysqli_query($connect,"insert into esiot(dat,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12,r13,r14,r15,r16,r17,r18,r19,r20,r21,r22,r23) values('$dat','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1')");
}
elseif($sub=='dm'){
mysqli_query($connect,"insert into dm(dat,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12,r13,r14,r15,r16,r17,r18,r19,r20,r21,r22,r23) values('$dat','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1')");
}

for($i=0;$i<$b;$i++)
{
	$c=$roll.$a[$i];
	if($sub=='daa'){
	mysqli_query($connect,"update daa set $c='0' ");
    }
	elseif($sub=='cg'){
	mysqli_query($connect,"update sub set $c='0' ");
    }
	elseif($sub=='esiot'){
	mysqli_query($connect,"update esiot set $c='0' ");
    }
	elseif($sub=='dm'){
	mysqli_query($connect,"update dm set $c='0' ");
    }
	
}

header("location:profile.php");

?>