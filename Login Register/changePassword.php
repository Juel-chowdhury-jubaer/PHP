<?php
session_start();
require_once "functions.php";

$user = new loginRegistration();
$uid  =  $_SESSION['uid'];

if(!$user->getSession()){
	header('Location: login.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Change Password</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script type="text/javascript" src="js/script.js"></script>
	</head>

	<body>
		<div class="wrapper">
			<div class="header">
				<h3>Login Register System</h3>
				<div class="date_time">
					<?php
					date_default_timezone_set('Asia/Dhaka');
					echo "Today is: ".date("d-m-y");
					 ?>
					<p id="time">

						<script type="text/javascript">
							start();
						</script>
						
					</p>
			
				<?php 
					/* echo "Today is :".date('l');
					date_default_timezone_set('Asia/Dhaka');
					echo " , Time: ".date("h:i a")."<br>";
			*/
				?>
			
				</div>
			</div>
			<div class="mainmenu">

				<ul>
					<?php if($user->getSession()){ ?>
					<li><a href="index.php">Home</a></li>
					<li><a href="changePassword.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>

					<?php } else{?>

					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
					<?php } ?>

				</ul>

			</div>

			<div class="content">

				<h2>Update Your Profile</h2>
				<p class="mgs">
					<?php
						if($_SERVER['REQUEST_METHOD'] == 'POST'){
							$old_pass     = $_POST['old_password'];
							$new_pass     = $_POST['new_password'];
							$confirm_pass = $_POST['confirm_password'];

							if(empty($old_pass) or empty($new_pass) or empty($confirm_pass)){
								echo "<span style='color:#e53d37'>Error..Field  must not be empty </span>";
							}elseif($new_pass != $confirm_pass){
								echo "<span style='color:#e53d37'>Error..Password not match</span>";
							}else{
								//$old_pass = md5($old_pass);
								//$new_pass = md5($new_pass);
								$passUpdate = $user->updatePassword($uid,$new_pass,$old_pass);
							}
							
						}
					?>
				</p>

				<div class="login_reg">
					<form action="" method="post">
						<table>
							<tr>
								<td>Old Password:</td>
								<td><input type="password" name="old_password" placeholder="Enter Your Old Password" /></td>
							</tr>

							<tr>
								<td>New Password:</td>
								<td><input type="password" name="new_password" placeholder="Enter Your New Password" /></td>
							</tr>

							<tr>
								<td>Confirm:</td>
								<td><input type="password" name="confirm_password" placeholder="Enter Your New Password again" /></td>
							</tr>

							
							<tr >
								<td colspan="2">
									<span style="float:right">
										<input type="submit" name="update" value="Update" />
										<input type="reset" value="Reset" />
									</span>
								</td>
							</tr>
						</table>
					</form>
				</div>

				<div class="back">
					<a href="index.php"><img src="img/back.png" alt="back" /></a>
				</div>

			</div>

			<div  class="footer">
				<h3>&copy;2019|Md. Juel Chowhury.</h3>
			</div>


		</div>
	</body>
</html>