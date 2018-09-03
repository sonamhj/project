

<?php /*include 'logprocess.php';*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../style.css">
	<style>
		.inputWithIcon input[type = "text"]{

			padding-left: 40px;

		}
		.inputWithIcon input[type = "password"]{

			padding-left: 40px;

		}
		.inputWithIcon i{

			position: absolute;
			left: 0;
			top: 8px;
			padding: 33px 10px;
			color: #aaa;

		}
		.inputWithIcon input[type = "text"]:focus+i{

			color: black;


		}
		.inputWithIcon input[type = "password"]:focus+i{

			color: black;

		}
	</style>
</head>
<body>
	<?php include '../inc/header.php'; ?>
	<div class="form-container">
		<div class="title">
			<h2>Login</h2>
		</div>
		<form action="logprocess.php" method="post" onsubmit="return validation()">

			<?php 
			include '../inc/alert.php';
			// include '../inc/errors.php';
			?>
			<div class="input-group inputWithIcon">
				<label for="username">Username</label>
				<input type="text" placeholder="Enter Username" name="username" id="username" autocomplete="off">
				<i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
				<span id="username_error" class="text-danger font-weight-bold"></span>
			</div>
			<div class="input-group inputWithIcon">
				<label for="password">Password</label>
				<input type="password" placeholder="Enter Password" name="password" id="password">
				<i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
				<span id="password_error" class="text-danger font-weight-bold"></span>
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button>
			</div>
		</form>
	</div>

	<script type="text/javascript">
				
			function validation() {

				var username = document.getElementById('username').value;
				var password = document.getElementById('password').value;
				var status = false;

				if (username != "") {
					if ((username.length < 3) || (username.length > 10)) {
						document.getElementById('username_error').innerHTML = "* Username must not be of length less than 3 and greater than 10";
						status = false;

					}else{
						document.getElementById('username_error').innerHTML = "";
						status = true;
					}
				}else{
					document.getElementById('username_error').innerHTML ="* Username is required";
					status = false;
				}

				if (password != "") {
					if (password.length < 5) {
						document.getElementById('password_error').innerHTML = "* Password must be of five character long";
						status = false;
					}else{
						document.getElementById('password_error').innerHTML = "";
						status = true;
					}
				}else{
					document.getElementById('password_error').innerHTML = "* Password is required";
					status = false;
				}
				return status;
			}
	</script>
</body>
</html>

