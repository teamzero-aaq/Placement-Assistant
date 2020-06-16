<!DOCTYPE html>
<html>
<head>
	    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="./assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
<title>Redirect here on login</title>
</head>
<body>

<h1>Redirected here</h1>
<p>Link to be added</p>
<?php

include('config.php');

                            echo '<div class="panel-heading"></div>';
                           echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
                            // '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
                            echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
                            echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
                            echo '<h3><a href="logout.php">Logout</h3></div>';

?>

</body>
</html>
