<?php 

	$cn_marks = array();

	array_push($cn_marks, $_POST['cn_asst']);
	array_push($cn_marks, $_POST['cn_sem']);
	array_push($cn_marks, $_POST['cn_practical']);

	$string_cn_marks =  implode(',', $cn_marks);


	$sim_and_mod_marks =   array();

	array_push($sim_and_mod_marks, $_POST['sam_asst']);
	array_push($sim_and_mod_marks, $_POST['sam_sem']);
	array_push($sim_and_mod_marks, $_POST['sam_practical']);

	$string_sim_and_mod_marks = implode(',', $sim_and_mod_marks);


	$daa_marks = array();

	array_push($daa_marks, $_POST['daa_asst']);
	array_push($daa_marks, $_POST['daa_sem']);
	array_push($daa_marks, $_POST['daa_practical']);

	$string_daa_marks = implode(',', $daa_marks);


	$ai_marks = array();

	array_push($ai_marks, $_POST['ai_asst']);
	array_push($ai_marks, $_POST['ai_sem']);
	array_push($ai_marks, $_POST['ai_practical']);

	$string_ai_marks = implode(',', $ai_marks);


	$egov_marks = array();

	array_push($egov_marks, $_POST['egov_asst']);
	array_push($egov_marks, $_POST['egov_sem']);
	array_push($egov_marks, $_POST['egov_pratical']);

	$string_egov_marks = implode(',', $egov_marks);


	$wireless_marks = array();

	array_push($wireless_marks, $_POST['wn_asst']);
	array_push($wireless_marks, $_POST['wn_sem']);
	array_push($wireless_marks, $_POST['wn_practical']);

	$string_wireless_marks = implode(',', $wireless_marks);


	$neuralnetwork_marks = array();

	array_push($neuralnetwork_marks, $_POST['nn_asst']);
	array_push($neuralnetwork_marks, $_POST['nn_sem']);
	array_push($neuralnetwork_marks, $_POST['nn_practical']);

	$string_neuralnetwork_marks = implode(',', $neuralnetwork_marks);

	$cryptography_marks = array();

	array_push($cryptography_marks, $_POST['crp_asst']);
	array_push($cryptography_marks, $_POST['crp_sem']);
	array_push($cryptography_marks, $_POST['crp_practical']);

	$string_cryptography_marks = implode(',', $cryptography_marks);



	include '../inc/dbcon.php';
	$studentName = mysqli_real_escape_string($con, $_POST['student_name']);
	$collegeName = mysqli_real_escape_string($con, $_POST['college_name']);
	$symbolNumber = mysqli_real_escape_string($con, $_POST['symbol_number']);
	$registrationNumber = mysqli_real_escape_string($con, $_POST['registration_number']);


	$qry = "INSERT INTO `results`(`student_name`, `college_name`, `symbol_number`, `reg_number`, `computer_network`, `simulation_and_modeling`, `DAA`, `AI`, `egov`, `wireless_networking`, `neural_networks`, `cryptography`) VALUES ('$studentName','$collegeName','$symbolNumber','$registrationNumber','$string_cn_marks','$string_sim_and_mod_marks','$string_daa_marks','$string_ai_marks','$string_egov_marks','$string_wireless_marks','$string_neuralnetwork_marks','$string_cryptography_marks')";
	$run = mysqli_query($con, $qry);
	if ($run == true) {
		session_start();
		$_SESSION['success'] = "Data inserted successfully";
		header('location:testing.php');
		exit();
	}else{
		session_start();
		$_SESSION['error'] = "Error in data insertion";
		header('location:testing.php');
		exit();
	}




	
 ?>