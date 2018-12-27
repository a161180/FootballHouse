<?php
session_start();
if (isset($_SESSION['username']) && (time() - $_SESSION['username'] > 1800)) {
	// last request was more than 30 minutes ago
	session_unset($_SESSION['username']);     // unset $_SESSION variable for the run-time 
	session_destroy($_SESSION['username']);   // destroy session data in storage
	echo "You are loged out";
	header('Location: login.php');
}
?>