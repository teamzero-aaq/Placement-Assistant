<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor1/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('809345150563-khthkl398mchu819l625q7lp4ifgel9f.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('Mq-6jwuOYITEAgOQ_wtID7I-');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Placement-Assistant-master/login.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>