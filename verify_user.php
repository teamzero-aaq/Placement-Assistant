<?php  

include('dashboard/security.php');

#Register Section

if(isset($_POST['signup']))
{
	$fname =$_POST['fname'];
	$lname =$_POST['lname'];
	$email =$_POST['email'];
	//$contact =$_POST['contact'];
	$password =$_POST['password'];
	$cpass =$_POST['cpassword'];
	$type = 2;

	if ($password === $cpass) {
		
	$query = "INSERT INTO `google_user`(`First_name`, `Last_name`, `email_id`, `password`, `usertype`) VALUES ('$fname','$lname','$email','$password',$type)";
	$query_run = mysqli_query($connection, $query);
	$mypath =  'dashboard/users/'.$email;
        //echo $mypath;
        if (file_exists($mypath) && is_dir($mypath)) 
        { 
            echo "The  folder exists. </br>"; 
        } 
        else 
        { 
            echo "The folder does not exists. New Folder created.</br>"; 
            mkdir($mypath);
        } 
	
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

		
	$query = "SELECT * FROM google_user WHERE email_id = '$username' AND password = '$password' ";
	
	$query_run = mysqli_query($connection, $query);
	$usertype = mysqli_fetch_array($query_run);
	print_r($usertype);
	  if(mysqli_num_rows($query_run)>0)
	  {
	      $_SESSION['usertype']=$usertype['usertype'];
	  	$_SESSION['username'] = $username ;
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