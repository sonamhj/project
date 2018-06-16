
<?php 
	session_start();
	if (!isset($_SESSION['username'])) {
		$_SESSION['warning'] = "please login first";
		@header('location:login.php');
		exit();
	}
 ?>

