<?php
session_start();
if ($_SESSION['usertype']==2) {
	header("Location: ./index.php");
}
?>