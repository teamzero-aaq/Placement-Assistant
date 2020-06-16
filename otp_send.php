                            
<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer-6.0.3/PHPMailer-6.0.3/src/Exception.php';
require 'PHPMailer-6.0.3/PHPMailer-6.0.3/src/PHPMailer.php';
require 'PHPMailer-6.0.3/PHPMailer-6.0.3/src/SMTP.php';

class VerificationCode
{
    public $smtpHost;
    public $smtpPort;
    public $sender;
    public $password;
    public $receiver;
    public $code;

    public function __construct($receiver)
    {
        $this->sender = "Emailid"; 
            
        $this->password = "password";  

    
        $this->receiver = $receiver;  

   
        $this->smtpHost="smtp.gmail.com";        
  
        $this->smtpPort = 587;

    }
    public function sendMail(){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->Host = $this->smtpHost;   
        $mail->Port = $this->smtpPort;    
        $mail->IsHTML(true);
        $mail->Username = $this->sender;
        $mail->Password = $this->password;
        $mail->Body=$this->getHTMLMessage();
        $mail->Subject = "Your verification code is {$this->code}";
        $mail->SetFrom($this->sender,"Verification Codes");
        $mail->AddAddress($this->receiver);
        if($mail->send()){
          echo "MAIL SENT SUCCESSFULLY";
          // return true; 
        }
        echo "FAILED TO SEND MAIL";
        // return false;

    }
    public function getVerificationCode()
    {
        return (int) substr(number_format(time() * rand(), 0, '', ''), 0, 6);
    }

    public function getHTMLMessage(){
        $this->code=$this->getVerificationCode();   
        $htmlMessage=<<<MSG
        <!DOCTYPE html>
        <html>
         <body>
            <h1>Your verification code is {$this->code}</h1>
            <p>Use this code to verify your account.</p>
         </body>
        </html>        
MSG;
    return $htmlMessage;
    }

}

//class over


echo 'hi before';
// pass your recipient's email
$vc= new VerificationCode($_POST["email"]); 

echo 'hi between';



$vc->sendMail(); // MAIL SENT SUCCESSFULLY



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
 }

/*$query = "SELECT * FROM google_user WHERE email_id = '$email'";
echo $email;
$query_run = mysqli_query($conn, "SELECT * FROM google_user WHERE email_id = '$email' ");
$usertype = mysqli_fetch_array($query_run);
if(mysqli_num_rows($query_run) > 0)
{

    echo "otp already sent";
    header("Location:http://localhost:8080/tutorial/php-login-using-google-demo/logout.php");
}*/

echo $vc->code;
{
   /* $query = "SELECT * FROM google_user WHERE email_id = '$vc->receiver'";
    $query_run = mysqli_query($conn, "SELECT * FROM google_user WHERE email_id = '$vc->receiver' ");
    $usertype = mysqli_fetch_array($query_run);
    if(mysqli_num_rows($query_run) > 0)
    {
      echo 'user present already'; 
    }*/
    $sql = "INSERT INTO userprofile (email_id,otp) VALUES ('$vc->receiver','$vc->code')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } 
    else {
    echo "Error: "; //. $sql . "<br>" . $conn->error;
    }
}
$conn->close();
header("Location:http://localhost:8080/tutorial/php-login-using-google-demo/form_otp.php");
?>