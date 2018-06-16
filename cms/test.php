<?php
include '../inc/session.php';
include '../inc/template_header.php';
include '../inc/navigation.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>registration page</title>
	<link rel="stylesheet" href="../style.css">
	<script
	    src="https://code.jquery.com/jquery-3.3.1.min.js"
	    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	    crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
	<script type="text/javascript">
		$("#vertical-show").steps({
			headerTag: "h3",
			bodyTag: "section",
			transitionEffect: "slideLeft",
			stepsOrientation: "vertical"
		});

	</script>
</head>
<body >
	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<?php
				if (isset($_SESSION['warning']) && $_SESSION['warning'] == "unauthorized access") {

					include '../inc/alert.php';
				}
				?>
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
	<div id="vertical-show">
		<section>
			<div class="form-container">
				<div class="title">
					<h2>upload result</h2>
				</div>
				<form>
					<!-- display validation error -->
					<?php include '../inc/alert.php'; ?>
					<div class="input-group">
						<label for="semester">Semester</label>
						<select name="semester"  value="<?php echo($semester) ?>">
							<option value="1">choose semester</option>
							<option value="2">1st sem</option>
							<option value="3">2nd sem</option>
							<option value="4">3rd sem</option>
							<option value="5">4th sem</option>
							<option value="6">5th sem</option>
							<option value="7">6th sem</option>
							<option value="8">7th sem</option>
							<option value="9">8th sem</option>
						</select>
					</div>
					<div class="input-group">
						<button type="submit" class="btn" name="next" onclick="semchoose()">next</button>
					</div>
				</form>
			</div>
			</section>
			<section> 
				
			</section>
		</div>
	</body>
	</html>

<?php
include '../inc/template_footer.php';
?>