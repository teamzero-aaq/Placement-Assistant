<?php 
session_start();
include('db.php');

if (!$_SESSION['username']) {
	header("Location: ./login.php");
}



 ?>