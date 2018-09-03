<?php /*include 'inprocess.php';*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>index page</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<?php include 'inc/header.php'; ?>
	<div class="form-container">
		<div class="title">
			<h2>View Result</h2>
		</div>
		<form action="inprocess.php" method="post" onsubmit="return formValidation()">
			<?php /*include 'inc/errors.php';*/ ?>
			<div class="input-group">
				<label for="year">Batch</label>
				<input type="text" name="regnum" id="regnum" placeholder="Enter your year" >
				<span id="regError" class="text-danger font-weight-bold"></span>
			</div>
			
			<div class="input-group">
				<label for="semester">Semester</label>
				<select name="semester" id="semId">
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
				<span id="semError" class="text-danger font-weight-bold"></span>
			</div>
			<div class="input-group">
				<label for="symbol no">Symbol number</label>
				<input type="text" name="symnum" id="symnum" placeholder="Enter your symbol number" >
				<span id="symError" class="text-danger font-weight-bold"></span>
			</div>
			<div class="input-group">
				<button type="submit" name="show" class="btn">show</button>
			</div>
		</form>
	</div>

	<script>
		function formValidation() {
			var num = /^[0-9]+$/;
			var regNum = document.getElementById('regnum').value;
			var symNum = document.getElementById('symnum').value;
			var sem =document.getElementById('semId').value;
			var status = false;

			if (regNum != "") {
				if (regNum.match(num)) {
					document.getElementById('regError').innerHTML = "";
					status = true;
				}else{
					document.getElementById('regError').innerHTML = "* your batch";
					status = false;
				}
			}else{
				document.getElementById('regError').innerHTML = "* batch is required";
				status = false;
			}

			if (symNum != "") {
				if (symNum.match(num)) {
					document.getElementById('symError').innerHTML = "";
					status = true;
				}else{
					document.getElementBy('symError').innerHTML = "* symbol number must be a number";
					status = false;
				}
			}else{
				document.getElementById('symError').innerHTML = "* symbol number is required";
				status = false;
 			}

			return status;
		}
	</script>

</body>
</html>