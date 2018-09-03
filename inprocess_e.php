<!DOCTYPE html>
<html>
<head>
	<title>
		<link rel="stylesheet" href="style.css">
	</title>
</head>
<body>

</body>
</html>
<?php
include 'inc/dbcon.php';
include 'inc/header.php';


if (isset($_POST['show'])) {

	//fetching form data
	
	$symNum = $_POST['symnum'];
	$batch = $_POST['batch'];
	$sem=$_POST['semid'];

	//query data
	$qry = "SELECT * FROM results WHERE symbol_number = '$symNum' AND batch='$batch' AND semester='$sem'";
	$run = mysqli_query($con, $qry);
	$result = mysqli_num_rows($run);
	if ($result < 1) {

		$_SESSION['error'] = "symbol number / registration number combination donot match";
		header('location:index.php');
		exit();

	}else{

		$data = mysqli_fetch_assoc($run);

		//exploding imploded data (string to array conversion)
		$cn_marks = explode(',', $data['computer_network']);
		$sam_marks = explode(',', $data['simulation_and_modeling']);
		$daa_marks = explode(',', $data['DAA']);
		$ai_marks = explode(',', $data['AI']);
		$egov_marks = explode(',', $data['egov']);
		$wn_marks = explode(',', $data['wireless_networking']);

		include 'resultViewTable_e.php';
		
	}
}

?>