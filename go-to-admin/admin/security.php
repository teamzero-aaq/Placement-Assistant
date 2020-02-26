<?php 
//include('./checking.php');
session_start();
include('db.php');

if (!isset($_SESSION['username'])||$_SESSION['usertype']!=1) {
	header("Location: ../../index.php");
}



 ?>