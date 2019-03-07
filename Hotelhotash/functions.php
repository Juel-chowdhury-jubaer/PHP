<?php

function checkAdmin()
{
	// if the session id is not set, redirect to login page
	if (!isset($_SESSION['assainment'])) {
		header('Location: ' . WEB_ROOT . 'admin/login.php');
		exit;
	}
	
	// the user want to logout
	if (isset($_GET['logout'])) {
		doLogout();
	}
}


function doLogout()
{
	if (isset($_SESSION['assainment'])) {
		unset($_SESSION['assainment']);
	//	session_unregister('auction_user_id');
	}
		
	header('Location: login.php');
	exit;
}
?>