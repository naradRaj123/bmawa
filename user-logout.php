<?php
	
	require_once 'include/config/dbconfig.php';

	unset($_SESSION['CUSTOMER_LOGIN_ID']);
	unset($_SESSION['CUSTOMER_NAME']);
	header('location:userlogin.php');
	exit();


?>