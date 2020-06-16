<?php

include('configreg.php');

$login_button1 = '';

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


if(!isset($_SESSION['access_token']))
{

 $login_button1 = '<a href="'.$google_client->createAuthUrl().'"><i class="fab fa-google-plus-g"></i></a>';
}

?>
<html lang="en-US">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Google Account</title>    <!-- Fonts -->
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
    <div class="container" id="container1">
        <div class="content-wrapper">
            <!-- FORM 1 -->
            <div class="form-container sign-up-container">

                <form action="verify_user.php" method="POST">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" placeholder="Name" name="name" required="" />
                    <input type="text" placeholder="Username" name="username" required="" />
                    <input type="email" placeholder="Email" name="email" required="" />
                    <input type="tel" placeholder="Contact" name="contact" required="" />
                    <input type="password" placeholder="Password" name="password" required="" />
                    <input type="password" placeholder="Confirm Password" name="cpassword" required="" />
                    <select name="usertype" required="">
                        <option value="Choose" disabled selected>Choose User Type</option>
                        <option value="2">Student</option>
                        <option value="3">Company</option>
                    </select>
                </form>
            </div>
            <!-- FORM 2 -->
                <form action="verify_user.php" method="POST">
                    <h1>Sign up</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f">reg</i></a>
                        <?php
                           if($login_button1 == '')
                           {
                              //include('config.php');
                              $servername = "localhost";
                              $username = "root";
                              $password = "";
                              $dbname = "user";

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
                                  echo $email;
                                  $query_run = mysqli_query($conn, "SELECT * FROM google_user WHERE email_id = '$email' ");
                                  $usertype = mysqli_fetch_array($query_run);
                                  if(mysqli_num_rows($query_run) > 0)
                                   {

                                  echo "email already exists";
                                  header("Location:http://localhost:8080/tutorial/php-login-using-google-demo/logout.php");
                              }
                              else
                              {
                              $sql = "INSERT INTO google_user (First_name,Last_name,email_id)
                              VALUES ('".$_SESSION['user_first_name']."','".$_SESSION['user_last_name']."','".$_SESSION['user_email_address']."')";

                              if ($conn->query($sql) === TRUE) {
                                echo "New record created successfully";
                              } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                              }
                              //echo '<div class="panel-heading"><a href="http://localhost:8080/tutorial/php-login-using-google-demo/redirect.php"></div>';
                              header("Location:http://localhost:8080/tutorial/php-login-using-google-demo/redirect.php");
                              }
                              $conn->close();
                              //ech "'.$_SESSION['user_first_name'].'";


                           }
                           else
                           {
                            echo '<div>'.$login_button1 . '</div>';
                           }
                           ?>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your account</span>
                    <div align="center"><input type="text" placeholder="Username" name="username" required="" /></div>
                    <div align="center"><input type="password" placeholder="Password" name="password" required="" /></div>
                    <a href="#">Forgot your password?</a>
                    <button type="submit" name="signin">Sign Up</button>
                </form>
            </div>
    </div>
  
   </div>
  </div>
  <script type="text/javascript" src="slide.js"></script>
 </body>
</html>
