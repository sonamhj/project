<?php 
include '../inc/dbcon.php';
$studentName = $_POST['student_name'];
$contactNumber = $_POST['contact_number'];
$address= $_POST['address'];
$email = $_POST['email'];
$batch = $_POST['batch'];
$symbolNumber = $_POST['symNum'];
/*echo $symbolNumber; die();*/

$qry = "UPDATE registration SET  address='$address', student_name='$studentName', contact_num='$contactNumber', email='$email',batch='$batch' WHERE symbol_num='$symbolNumber'";
$run = mysqli_query($con, $qry);
if ($run == true) {
	$_SESSION['success']= " Records Successfully updated ";
	 header('location:student_detail.php');
}else{
$_SESSION['error']= " errror.. ";
	 header('location:student_detail.php');}


