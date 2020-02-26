<?php  

include('dashboard/security.php');

#Register Section

if(isset($_POST['signup']))
{
	$name =$_POST['name'];
	$username =$_POST['username'];
	$email =$_POST['email'];
	$contact =$_POST['contact'];
	$password =$_POST['password'];
	$cpass =$_POST['cpassword'];
	$type = $_POST['usertype'];

	if ($password === $cpass) {
		
	$query = "INSERT INTO `register`(`name`, `contact`, `username`, `password`, `email`, `usertype`) VALUES ('$name','$contact','$username','$password','$email',$type)";
	$query_run = mysqli_query($connection, $query);
	  if($query_run)
	  {
	  	$_SESSION['status'] = "Registration Successfully !!!";
	  	header('Location: login.php');  
	  }
	  else
	  {
	  	$_SESSION['status'] = "Registration Failed !!!";
	  	header('Location: login.php');  
	  }
	}
	else
	{
		$_SESSION['status'] = " Password and Confirm Password Does not Match";
	  	header('Location: login.php');  
	}
}
#Register Section End



#Login Section

if(isset($_POST['signin']))
{
	$username =$_POST['username'];
	$password =$_POST['password'];

		
	$query = "SELECT * FROM register WHERE username = '$username' AND password = '$password' ";
	
	$query_run = mysqli_query($connection, $query);
	$usertype = mysqli_fetch_array($query_run);
	  if($usertype['usertype']==1)
	  {
	      $_SESSION['usertype']=1;
	  	$_SESSION['username'] = $username ;
	  	header('Location: go-to-admin/admin/');  
	  }
	  else if ($usertype['usertype'] == 2) {
	  	$_SESSION['username'] = $username ;
	  	  $_SESSION['usertype']=2;
	  	header('Location: index.php');  
	  }
	  else
	  {
	  	$_SESSION['status'] = "Username and Password Does not Match";
	  	header('Location: login.php');  
	  }
	
	
}
#Login Section End

if(isset($_POST['user_response']))
{
	$name=$_POST['name'];
	$res=$_POST['response'];
	$val=$_POST['user_response'];
	$query = "insert into forum (id,username,response) values('$val','$name','$res')";
	$query_run = mysqli_query($connection, $query);
	if($query_run)
	  {
	  	
	  	header('Location: index.php');  
	  }
}





?>