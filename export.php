<?php  
//export.php  
session_start();

$edate= $_SESSION['edate'];
$sdate=$_SESSION['sdate'];

$connect = mysqli_connect("localhost", "root", "", "te a");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * from daa where dat between '$sdate' and '$edate'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
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
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
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
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}

?>
