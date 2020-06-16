<?php

//logout.php


//logout.php

include('config.php');

//Reset OAuth access token
$google_client->revokeToken();


//Destroy entire session data.
session_destroy();


header('LOCATION:login.php');
//https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin


//https://accounts.google.com/ServiceLogin/signinchooser?elo=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin
?>
