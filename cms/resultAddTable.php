<?php
include '../inc/session.php';
include '../inc/template_header.php';
include '../inc/navigation.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>registration page</title>
	</head>
	<body style="background: white">
		<div class="container-fluid">
			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					
					<h1 class="page-header">
					Result Add
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
		
		<!-- creating table -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<form action="" method="">
						<table class="table table-responsive table-bordered table-hover " align="center">
							<thead>
								<tr>
									<th colspan="4"><center>COMPULSARY</center></th>
								</tr>
								<tr>
									<th rowspan="2"><center>Course</center></th><th colspan="3"><center>Marks Obtained</center></th>
								</tr>
								<tr>
									<th>Asst</th><th>Sem</th><th>Practical</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><b>Computer Networks</b></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
								</tr>
								<tr>
									<td><b>Simulation And Modeling</b></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
								</tr>
								<tr>
									<td><b>Design And Analysis Of Algorithm</b></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
								</tr>
								<tr>
									<td><b>Artificial Intelligence</b></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
								</tr>
							</tbody>
							<thead>
								<tr>
									<th colspan="4"><center>ELECTIVE AND EXTRA ELECTIVE</center></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><b>E-governance</b></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
								</tr>
								<tr>
									<td><b>Wireless Networking</b></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
								</tr>
								<tr>
									<td><b>Neural Networks</b></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
								</tr>
								<tr>
									<td><b>Cryptography</b></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
								</tr>
								<tr>
									<td colspan="4" align="center"><button type="submit" class="btn btn-primary">submit</button></td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
include '../inc/template_footer.php';
?>