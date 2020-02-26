<?php
session_start();
$user = 'bookbech_placement';
$password = 'placement@123';
$db = 'bookbech_placement';
$host = 'localhost:3306';


$connection = mysqli_connect($host,$user,$password,$db);
if($connection)
{
  
}
else
{
  die("connection failed becaues ".mysqli_connect_error() );
}
?>
<?php 

$departid = $_GET['depart']; 
// department id

$sql = 'SELECT name2 FROM sub_courses WHERE name1="'.$departid.'"';

$result = mysqli_query($connection,$sql);
$output='<h2>TEST WILL BE BASED ON FOLLOWING CONTENTS</h2>';
$output.='<br>';
$output.='<h3>TEST WILL HAVE 20 MCQ QUESTIONS.1 MARK EACH QUESTION</h3>';

while( $row = mysqli_fetch_array($result) ){
    $output.= '<p>'.str_replace("_"," ",ucfirst(nl2br($row['name2']))).'</p>';
}

// encoding array to json format
$output.='<button type="submit" name="take_test" form="totest" value="'.$departid.'">TAKE TEST</button>';
echo $output;
 
 ?>