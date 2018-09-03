<?php 
if(!isset($_SESSION)){
session_start();}
	$con = mysqli_connect('localhost','root','','college_project');
	if ($con == false) {
		echo "database connection failed";
	}
 ?>