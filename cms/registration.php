<?php 

include '../inc/dbcon.php';
include '../inc/session.php';
include '../inc/template_header.php';
include '../inc/navigation.php';

include 'regprocess.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>registration page</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	
	<div class="container-fluid"> 
		<!-- Page Heading -->
		<div class="row">

			<div class="col-lg-12">
				<?php include '../inc/alert.php'; ?>
				<h1 class="page-header">
					Student Registration
				</h1>
				<ol class="breadcrumb" style="background: #e0ebeb">
					<li>
						<i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
					</li>
					<li class="active">
						<i class="fa fa-file"></i> Admin panel
					</li>
				</ol>
			</div>
		</div>
	</div>	
	<div class="form-container">
		<div class="title">
			<h2>Registration</h2>
		</div>
		<form action="" method="post">
			<!-- display validation error -->
			<?php include '../inc/errors.php'; ?>
			<div class="input-group">
				<label for="student name">Student name</label>
				<input type="text" required="" name="student" value="">
			</div>

			<div class="input-group">
				<label for="address">Address</label>
				<input type="text" name="address" value="">
			</div>

			<div class="input-group">
				<label for="email id">Email</label>
				<input type="email" name="email" value="">
			</div>
			<div class="input-group">
				<label for=" regnum">Registration number</label>
				<input type="text" name="registration" value="">
			</div>
			<div class="input-group">
				<label for="symbolnum">Symbol number</label>
				<input type="text" name="symbol" value="">
			</div>
			<div class="input-group">
				<label for="batch">Contact Number</label>
				<input type="text" maxlength="10" name="contact" value="">
			</div>
			<div class="input-group">
				<label for="batch">Batch</label>
				<input type="text" maxlength="4" name="batch" value="">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="register">Register</button>
			</div>
		</form>
	</div>

</body>
</html>

<?php 
include '../inc/template_footer.php';
?>