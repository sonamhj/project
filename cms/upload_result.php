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
	<title>Upload student result</title>
</head>
<body>
	<div class="container">
		<form action="upload_process.php" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>Upload result</legend>
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
						<input type="submit" value="Upload" name="uploadBtn" class="btn btn-info">
					</div>
				</div>
			</div>
		</fieldset>
		</form>
	</div>

</body>
</html>

<?php 
include '../inc/template_footer.php';
?>