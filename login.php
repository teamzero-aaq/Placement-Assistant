<?php  
#include('dashboard/security.php');
include('checking.php');
include('dashboard/db.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title></title>
    <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">


    <!-- Fonts -->
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
                    <button type="submit" name="signup">Sign Up</button>
                </form>
            </div>
            <!-- FORM 2 -->
            <div class="form-container sign-in-container">
                <form action="verify_user.php" method="POST">
                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your account</span>
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
                        <button class="bg" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="bg" id="signUp">Sign Up</button>
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

    <script type="text/javascript" src="slide.js"></script>
</body>

</html>