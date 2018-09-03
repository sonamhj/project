
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
		<div class="container">
			<?php 
				include '../inc/dbcon.php'; 

				
				if (isset($_POST['uploadBtn'])) {
					
					$fileName = $_FILES['exam_result']['name'];
					$fileTempName = $_FILES['exam_result']['tmp_name'];

					if (empty($fileName)) {

						$_SESSION['error'] = "please choose a file first.";
						header('location:bulkregister.php');
						exit();
					}
					//find the extension of file.
					$fileExtension = pathinfo($fileName,PATHINFO_EXTENSION);
					//define allowed extension.
					$allowedExtension = array('csv');
					if (!in_array($fileExtension, $allowedExtension)) {
						
						$_SESSION['error'] = "Invalid file extension.";
						header('location:bulkregister.php');
						exit();
					}else{
							
						//upload exam result
						$handle = fopen($fileTempName, 'r'); //file in read mode.
						while (($mydata = fgetcsv($handle,1000,',')) !== FALSE) {
							
							$symbol_number = $mydata[0];
							$registration_number = $mydata[1];
							$student_name = $mydata[2];
							$address = $mydata[3];
							$email = $mydata[4];
							$contact_number = $mydata[5];
							$batch= $mydata[6];
							

								$errors = array(); //creating $errors as an array variable.
							//check whether the user already exists or not...
						$user_check_query = "SELECT * FROM registration WHERE symbol_num = '$symbol_number' OR registration_num= '$registration_number' ";
						$result = mysqli_query($con, $user_check_query);

						if ($student = mysqli_fetch_assoc($result)) {
							if ($student['symbol_num'] == $symbol_number) {
								array_push($errors, "student already exists with this symbol number.");
							}

							if ($student['registration_num'] == $registration_number) {
								array_push($errors, "student already exists with this registration number.");	
							}
						}

						if(count($errors)==0){
							$query = "INSERT INTO registration (symbol_num,registration_num,student_name,address,email,contact_num,batch) VALUES ('$symbol_number','$registration_number','$student_name','$address','$email','$contact_number','$batch')";
							$run = mysqli_query($con,$query);
						}
						else{
							$_SESSION['error'] ="error uploading";
							header('location:bulkregister.php');
							exit();
						}

						if (!$run) {

							die("error in uploaing file".mysqli_error($con));
						}else{
							
							$_SESSION['success'] = "file uploaded successfully";
							header('location:student_detail.php');
							exit();
						}
					}
				}
			}
			?>
		</div>
	</body>
</html>