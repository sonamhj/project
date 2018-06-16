<?php 
include '../inc/session.php';
include '../inc/template_header.php';
include '../inc/navigation.php';
?>
<div class="hidden">
	<?php include 'deleteprocess.php'; ?>
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
					Delete Student 
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
						<h2>Deletion</h2>
					</div>
					<!--creating form -->
					<form action="" method="post">
						<!-- display validation error here -->
						<?php
							include '../inc/errors.php';
						?>
						<div class="input-group">
							<label for="symbol_number">symbol number</label>
							<input type="number" name="sym_num" value="<?php echo($symbol_number); ?>">
						</div>
						<div class="input-group">
							<label for="batch">batch</label>
							<input type="number" name="batch" value="<?php echo($batch); ?>">
						</div>
						<div class="input-group">
							<button type="submit" name="search" class="btn">search</button>
						</div>
					</form>
				</div>

				<div class="container">
					<div class="search-result">
						<table class="table" style="margin-top: 20px">
							<thead>
								<tr>
									<th>student name</th>
									<th>college name</th>
									<th>registration number</th>
									<th>symbol number</th>
									<th>batch</th>
									<th>delete</th>
								</tr>
								<tr>
									<?php 
									include 'deleteprocess.php';
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