<?php
	// session_start();

	require_once 'include/config/dbconfig.php';

	unset($_SESSION['LOGIN_ID']);
	
	header('location:login.php');
	exit();


?>