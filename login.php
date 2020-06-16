<?php
//session_start();
include('config.php');
if(isset($_SESSION['username'])){
	header("Location:index.php");
}

$login_button = '';

if(isset($_GET["code"]))
{
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
 if(!isset($token['error']))
 {
  $google_client->setAccessToken($token['access_token']);
  $_SESSION['access_token'] = $token['access_token'];
  $google_service = new Google_Service_Oauth2($google_client);
  $data = $google_service->userinfo->get();

  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if(!isset($_SESSION['access_token']))
{
 //Create a URL to obtain user authorization
 $login_button = '<a href="'.$google_client->createAuthUrl().'"><i class="fab fa-google-plus-g"></i></a>';
}

?>
<html lang="en-US">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login</title>    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="./assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
 </head>
 <body>
    <div class="container" id="container">
        <div class="content-wrapper">
            <!-- FORM 1 -->
            <div class="form-container sign-up-container">

                <form action="verify_user.php" method="POST" id="signup-form">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" placeholder="First Name" name="fname" required="" />
                    <input type="text" placeholder="Last Name" name="lname" required="" />
                    
                    <input type="password" placeholder="Password" name="password" id="password" required=""/>
                    <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword" required=""/>
					<input type="email" placeholder="Email" name="email" required="" />
                    <input type="hidden" value="2" name="usertype">
                    <button type="submit" name="signup" id="signup">Sign Up</button>
                </form>
            </div>
            <!-- FORM 2 -->
            <div class="form-container sign-in-container">
                <form action="verify_user.php" method="POST">
                    <h1>Sign in</h1>
                    <!--<div class="social-container">
                        
                        <?php
                           if($login_button == '')
                           {
                            //echo 'In Login';
                          //echo '<div class="panel-heading"></div>';
                           //echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
                           //header("Location:http://localhost:8080/tutorial/php-login-using-google-demo/redirect.php");
                              $servername = "localhost";
                              $username = "root";
                              $password = "";
                              $dbname = "placement_assistant";

                              // Create connection
                              $conn = new mysqli($servername, $username, $password, $dbname);
                              // Check connection
                              if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                              }
                                                              
                                  $userfname =$_SESSION['user_first_name'];
                                  $userlname =$_SESSION['user_last_name'];
                                  $email =$_SESSION['user_email_address'];
                                    
                                  $query = "SELECT * FROM google_user WHERE email_id = '$email'";
                                  
                                  $query_run = mysqli_query($conn, "SELECT * FROM google_user WHERE email_id = '$email' ");
                                  $usertype = mysqli_fetch_array($query_run);
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
										$_SESSION['usertype']=$usertype['usertype'];
                                      $_SESSION['username']=$email;
                                      header('Location:index.php'); 
                                    }
                                    else
                                    {
                                      $_SESSION['status'] = "You are not registered";
                                      //header('Location:http://localhost:8080/tutorial/php-login-using-google-demo/logout.php'); 
                                    }
                              
                                  
                                                              
                              $conn->close();
                           }
                           else
                           {
                            echo '<div>'.$login_button . '</div>';
                           }
                           ?>
                        
                    </div>
                    <span>or use your account</span>-->
                    <input type="text" placeholder="Username" name="username" required="" />
                    <input type="password" placeholder="Password" name="password" required="" />
                    <a href="#">Forgot your password?</a>
                    <button type="submit" name="signin">Sign In</button>
                </form>
            </div>

            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button type="submit" class="bg" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>

                         <p>Enter your personal details and start journey with us</p>
                        <button type="submit"  name="mybutton"  class="bg" id="signUp">Sign Up</button>

                          </script>
                    </div>
                </div>
            </div>

        </div>



    </div>
  
   </div>
   <?php 


         if (isset($_SESSION['status']) && $_SESSION['status'] != '')
           {
            echo  $_SESSION['status'];
            unset($_SESSION['status']);
           }
 			?>
  <script type="text/javascript">
 
 
  
  </script>
  <script type="text/javascript" src="slide.js"></script>
 </body>
</html>
