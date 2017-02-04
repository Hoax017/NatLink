<?php

	session_start();

	if ($_GET['t'])
		$_SESSION['user'] = $_GET['t'];
	// $_SESSION['user'] = "reserviste";
	// $_SESSION['user'] = "gestionnaire";