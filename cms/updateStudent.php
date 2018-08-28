<?php 
include '../inc/session.php';
include '../inc/template_header.php';
include '../inc/navigation.php';
?>

<div class="hidden">
	<?php include 'updateProcess.php'; ?>
</div>

<!DOCTYPE html>
<html>
<head>
	<title>deletestudent</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php include '../inc/alert.php'; ?>
				<h1 class="page-header">
					Update Student 
				</h1>
				<ol class="breadcrumb" style="background: #e0ebeb">
					<li>
						<i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
					</li>
					<li class="active">
						<i class="fa fa-file"></i> Admin panel
					</li>
				</ol>
				<div class="form-container">
					<div class="title">
						<h2>Update</h2>
					</div>
					<!--creating form -->
					<form action="" method="post">
						<!-- display validation error here -->
						<?php
						include '../inc/errors.php';
						?>
						<div class="input-group">
							<label for="symbol_number">Symbol number</label>
							<input type="number" name="sym_num" value="<?php echo($symbol_number); ?>">
						</div>
						<div class="input-group">
							<label for="batch">Batch</label>
							<input type="number" name="batch" value="<?php echo($batch); ?>">
						</div>
						<div class="input-group">
							<button type="submit" name="search" class="btn">Search</button>
						</div>
					</form>
				</div>

				<div class="container">
					<div class="search-result">
						<table class="table" style="margin-top: 20px">
							<thead>
								<tr>
									<th>Student name</th>
									<th>Contact number</th>
									<th>Registration number</th>
									<th>Symbol number</th>
									<th>Batch</th>
									<th>Update</th>
								</tr>
								<tr>
									<?php 
									include 'updateProcess.php';
									?>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php 
include '../inc/template_footer.php';
?>