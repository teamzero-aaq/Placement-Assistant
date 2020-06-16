<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
 }



{
    /*$sql = "INSERT INTO userprofile (email_id,otp) VALUES ('$vc->receiver','$vc->code')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } 
    else {
    echo "Error: "; //. $sql . "<br>" . $conn->error;
    }*/
    $query = "SELECT * FROM userprofile WHERE email_id = '".$_POST['myemail']."'";
    $query_run = mysqli_query($conn, "SELECT * FROM userprofile WHERE email_id = '".$_POST['myemail']."' AND otp='".$_POST['otp']."'  ");
    $usertype = mysqli_fetch_array($query_run);
    if(mysqli_num_rows($query_run) > 0)
    {
         header('Location:http://localhost:8080/tutorial/php-login-using-google-demo/redirect_otp.php'); 
         echo 'Verified otp';
    }
    else
    {
        echo 'OTP not verified';
        //header('Location:http://localhost:8080/tutorial/php-login-using-google-demo/logout.php'); 
    }
                              
}
$conn->close();
//header("Location:'http://localhost:8080/tutorial/php-login-using-google-demo/form_otp.php'");
?>