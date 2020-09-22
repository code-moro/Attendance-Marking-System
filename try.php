<?php

session_start();

$connect = mysqli_connect("localhost", "root", "", "te a");
$div=$_POST['divisions'];
$sdate=$_POST["sdate"];
$sub=$_POST["subject"];
$edate=$_POST["edate"];
$_SESSION['divisions']=$div;
$_SESSION['sdate']=$sdate;
$_SESSION['subject']=$sub;
$_SESSION['edate']=$edate;





if($sub=='daa'){
$sql = "SELECT * from daa where dat between '$sdate' and '$edate'";  
}
elseif($sub=='cg'){
$sql = "SELECT * from cg where dat between '$sdate' and '$edate'";  
}
elseif($sub=='esiot'){
$sql = "SELECT * from esiot where dat between '$sdate' and '$edate'";  
}
elseif($sub=='dm'){
$sql = "SELECT * from dm where dat between '$sdate' and '$edate'";  
}




$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">STUDENT ATTENDANCE</h2> <br /> 
    <table class="table table-bordered">
     <tr>  
                         <th>DATE</th>  
                         <th>ROLL NO 1</th>
						 <th>ROLL NO 2</th>
						 <th>ROLL NO 3</th>
						 <th>ROLL NO 4</th>
						 <th>ROLL NO 5</th>
						 <th>ROLL NO 6</th>
						 <th>ROLL NO 7</th>
						 <th>ROLL NO 8</th>
						 <th>ROLL NO 9</th>
						 <th>ROLL NO 10</th>
						 <th>ROLL NO 11</th>
						 <th>ROLL NO 12</th>
						 <th>ROLL NO 13</th>
						 <th>ROLL NO 14</th>
						 <th>ROLL NO 15</th>
						 <th>ROLL NO 16</th>
						 <th>ROLL NO 17</th>
						 <th>ROLL NO 18</th>
						 <th>ROLL NO 19</th>
						 <th>ROLL NO 20</th>
                         <th>ROLL NO 21</th>
<th>ROLL NO 22</th>
<th>ROLL NO 23</th>
						 
                         
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["dat"].'</td>  
         
<td>'.$row["r1"].'</td>
<td>'.$row["r2"].'</td> 
<td>'.$row["r3"].'</td> 
<td>'.$row["r4"].'</td> 
<td>'.$row["r5"].'</td> 
<td>'.$row["r6"].'</td> 
<td>'.$row["r7"].'</td> 
<td>'.$row["r8"].'</td> 
<td>'.$row["r9"].'</td> 
<td>'.$row["r10"].'</td> 
<td>'.$row["r11"].'</td> 
<td>'.$row["r12"].'</td> 
<td>'.$row["r13"].'</td> 
<td>'.$row["r14"].'</td> 
<td>'.$row["r15"].'</td> 
<td>'.$row["r16"].'</td> 
<td>'.$row["r17"].'</td> 
<td>'.$row["r18"].'</td> 
<td>'.$row["r19"].'</td> 
<td>'.$row["r20"].'</td> 
<td>'.$row["r21"].'</td> 
<td>'.$row["r22"].'</td> 
<td>'.$row["r23"].'</td>  		 
        
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
	
    </form>
	
   </div>  
  </div>  
 </body>  
</html>

