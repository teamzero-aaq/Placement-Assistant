<?php 
include('security.php');

 $output="";
 $output.='<option value="-1">NONE</option>';
$departid = $_POST['txtval'];
$sql="select * from subject where dept_id=".$departid;
$sql_run=mysqli_query($connection,$sql);
while($row=mysqli_fetch_array($sql_run)){
$output.='<option value="'.$row['sub_id'].'">'.$row['department'].'</option>';
}
echo $output;