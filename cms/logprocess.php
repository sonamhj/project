<?php

	//initializing variables to null.
	$username = "";
	$password = "";

	$errors = array(); //creating error variable as an array variable.

	include '../inc/dbcon.php';
	if (isset($_POST['login'])) {

		$username = mysqli_real_escape_string($con,$_POST['username']);
		$password = mysqli_real_escape_string($con,$_POST['password']);

		//ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "username is required");
		}

		if (empty($password)) {
			array_push($errors, "password is required");
		}

		if (count($errors) == 0) {

			$qry = " SELECT * FROM login WHERE username = '$username' AND password = '$password' ";
			$run = mysqli_query($con, $qry);
			if (mysqli_num_rows($run) == 1) {

				//log user in...
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "welcome to admin panel";
				header('location:dashboard.php');
				exit();
			}else{
				session_start();
				$_SESSION['error'] = "wrong username/password combination";
				header('location:login.php');
				exit();
			}
		}
	}

?>