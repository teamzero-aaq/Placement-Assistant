<?php 
session_start();


#Logout Section End


if(isset($_POST['logoutbtn']))
{
	session_destroy();
	unset($_SESSION['username']);
	header("Location: login.php");
	
}


	session_destroy();
	unset($_SESSION['username']);
	header("Location: .\\login.php");





#Logout Section End



 ?>