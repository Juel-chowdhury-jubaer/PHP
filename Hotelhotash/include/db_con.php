<?php
$con=mysqli_connect("localhost","root","","hotel_hotash");
//mysqli_select_db("hotel_hotash",$con) or die(mysqli_connect_error($con));
//error_reporting(E_ALL ^ E_NOTICE);
if(!$con){
	die(mysqli_connect_error($con));
}
?>