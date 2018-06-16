<?php 

//initializing variables
$semester = "";

//if the register button is clicked...
include '../inc/dbcon.php';
if (isset($_POST['next'])) {
	
	$semester = mysqli_real_escape_string($con, $_POST['semester']);

	//ensure that the form field are filled properly(form validation)...
	if ($semester == 1) {

		session_start();
		$_SESSION['error'] = "semester is required";
		header('location:resultAdd.php');
		exit();

	}

	if (!isset($_SESSION['error'])) {

		header('location:resultAddTable.php');

	}

}else{

	session_start();
	$_SESSION['warning'] = "unauthorized access";
	header('location:resultAdd.php');
	exit();
}

?>