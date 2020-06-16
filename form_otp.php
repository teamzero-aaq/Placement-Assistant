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
    <div class="container" id="container">
        <div class="content-wrapper">
            
            <!-- FORM 2 -->
            <div class="form-container sign-in-container">
                <form action="otp_send.php" method="POST">
                    <h1>Get OTP</h1>
                    <div class="social-container">
                        
                    </div>
                    <span>Enter email id</span>
                    <input type="email" placeholder="Email" name="email" required="" autocomplete="off"/>
                    <button type="submit" name="sendotp">Send OTP</button>
                </form>
            </div>

            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                      <form action="verify_otp.php" method="POST">

                    </div>
                    <div class="overlay-panel overlay-right">

                        <h1>Verify Email-id</h1>

                         <p>Enter the OTP you have recieved on your email id entered.</p>
                         <div align="center"><input type="email" placeholder="Email" name="myemail" required="" /></div>
                         <div align="center"><input type="number" placeholder="OTP" name="otp" required="" class="bg"/></div>
                        <button type="submit"  name="mybutton" class="bg" >Verify OTP</button>
                        </div></form>
                          </script>
                    </div>
                </div>
            </div>

        </div>



    </div>
  
   </div>
  </div>
  <script type="text/javascript" src="slide.js"></script>
 </body>
</html>
