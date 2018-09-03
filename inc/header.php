<!DOCTYPE html>
<html>
<head>
	<title>header</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<div class="header">
		<div class="wrapper">
			<div class="headerDiv">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 col-sm-9">
							<div class="logo">
								<a href="../index.php"><img src="../img/logo.png" width="300" height="85"alt="logo">
									<!-- <img src="assets/img/logo.png" alt="logo"> -->
								</a>
							</div>
						</div>
						<div class="col-sm-12 col-sm-3">
							<?php 
								$current_page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
								if ($current_page == 'index') {
									?>
									<div class="login">
										<h4><a href="cms/login.php" ">Admin Login</a></h4>
									</div>
									<?php
								}
							 ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>