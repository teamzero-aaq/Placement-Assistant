<?php
// error_reporting(0);

// $user = 'bookbech_placement';
// $password = 'placement@123';
// $db = 'bookbech_placement';
// $host = 'localhost:3306';


// $connection = mysqli_connect($host,$user,$password,$db);
// if($connection)
// {

// }
// else
// {
//   die("connection failed becaues ".mysqli_connect_error() );
// }

error_reporting(0);

$user = 'root';
$password = 'root';
$db = 'placement';
$host = 'localhost';


$connection = mysqli_connect($host,$user,$password,$db);
if($connection)
{

}
else
{
  die("connection failed becaues ".mysqli_connect_error() );
}

?>