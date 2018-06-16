<?php 
session_start();
if (isset($_SESSION['username'])) {
	@header('location:dashboard.php');
	exit();
}
?>

<?php include 'logprocess.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../style.css">

</head>
<body>
	<?php include '../inc/header.php'; ?>
	<div class="form-container">
		<div class="title">
			<h2>Login</h2>
		</div>
		<form action="login.php" method="post">
			<!-- display validation error here -->
			<?php 
			include '../inc/alert.php';
			include '../inc/errors.php';
			?>
			<div class="input-group">
				<label for="username">Username</label>
				<input type="text" name="username" value="<?php echo($username); ?>">
			</div>
			<div class="input-group">
				<label for="password">Password</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button>
			</div>
		</form>
	</div>
</body>
</html>

