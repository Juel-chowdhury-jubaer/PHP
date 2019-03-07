<?php
session_start();
require_once "functions.php";

	$user = new loginRegistration();
	$user->logOutUser();
	header("Location:login.php?response=1");
	exit();


?>