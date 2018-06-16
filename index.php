<?php include 'inprocess.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>index page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<?php include 'inc/header.php'; ?>
	<div class="form-container">
		<div class="title">
			<h2>View Result</h2>
		</div>
		<form action="" method="post">
			<?php include 'inc/errors.php'; ?>
			<div class="input-group">
				<label for="registration no">Registration number</label>
				<input type="text" name="regnum" value="<?php echo($registration_number) ?>" >
			</div>
			<div class="input-group">
				<label for="symbol no">Symbol number</label>
				<input type="number" name="symnum" value="<?php echo($symbol_number) ?>" >
			</div>
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
				<button type="submit" name="show" class="btn">show</button>
			</div>
		</form>
	</div>
	

	
</body>
</html>