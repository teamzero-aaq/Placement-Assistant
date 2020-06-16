<?php 
session_start();


#Logout Section End





	session_destroy();
	unset($_SESSION['username']);
	header("Location: ../index.php");





#Logout Section End



 ?>