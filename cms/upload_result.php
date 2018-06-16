<?php 
	include '../inc/session.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>upload student result</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="upload_process.php" method="post" enctype="multipart/form-data">
			<h3 class="text-center">upload exam result</h3><hr>
			<?php 
			include '../inc/alert.php';
			?>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="file" name="exam_result" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="submit" value="upload" name="uploadBtn" class="btn btn-info">
					</div>
				</div>
			</div>
		</form>
	</div>

</body>
</html>