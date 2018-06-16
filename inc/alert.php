<?php 

	//in this project alert can be used to display the information out of any form page.
	if (isset($_SESSION['success']) && $_SESSION['success']!='') {
		echo '<h4 class="alert alert-success text-center">'.$_SESSION['success'].'</h4>';
		unset($_SESSION['success']);
	}

	if (isset($_SESSION['error']) && $_SESSION['error']!='') {
		echo '<h4 class="alert alert-danger text-center">'.$_SESSION['error'].'</h4>';
		unset($_SESSION['error']);
	}

	if (isset($_SESSION['warning']) && $_SESSION['warning']!='') {
		echo '<h4 class="alert alert-warning text-center">'.$_SESSION['warning'].'</h4>';
		unset($_SESSION['warning']);
	}
 ?>