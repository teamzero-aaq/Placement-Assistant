<?php session_start(); 
error_reporting(0);


include('dashboard/db.php');
include('dashboard/security.php');
include('include_root/header.php');

?>

<?php 

$departid = $_GET['depart']; 
// department id
$pass=$_GET['pass'];
$result = mysqli_query($connection,$sql);
$q="select pass from tests_data where test_id='$departid'";
$run=mysqli_query($connection,$q);
$row=mysqli_fetch_array($run);
$output="";
if($row['pass']==$pass)
{
	$output.='<button type="submit" name="take_test" form="totest" class="btn btn-info btn-sm align-item-center" value="'.$departid.'" >TAKE TEST</button>';
echo $output;
}
else
{
	
	echo 'WRONG PASSWORD';
}
 ?>