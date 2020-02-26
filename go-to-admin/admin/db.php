<?php
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