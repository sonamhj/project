 <?php 

include '../inc/dbcon.php';

include '../inc/session.php';
include '../inc/template_header.php';

include '../inc/navigation.php';

?>
	<link rel="stylesheet" href="../style.css">

	<div class="container-fluid"> 
		<!-- Page Heading -->
		<div class="row">

			<div class="col-lg-12">
				<?php include '../inc/alert.php'; ?>
				<h1 class="page-header">
					Send Email Alert
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
			<h2>Select Batch </h2>
		</div>
		<form action="email.php" method="post">
			<!-- display validation error -->
			<div class="input-group">
				<label for="batch">batch</label>
				<input type="number" required="" name="batch" value="<?php echo($batch); ?>">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="entbatch">enter</button>
			</div>
		</form>
	</div>
	

<?php 
include '../inc/template_footer.php';
?>
