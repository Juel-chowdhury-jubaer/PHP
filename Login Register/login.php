<?php
session_start();
require_once "functions.php";
$user = new loginRegistration();
if($user->getSession()){
	header('Location:index.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login Page</title>
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

				<h2>Login</h2>
			

				<p class="mgs">
					<span class="login_mgs">
						<?php 
							if (isset($_GET['response'])){

								if(($_GET['response']) == '1'){

									echo "Logout sccessfully..";

									}
							}
						?>
					</span>
					<?php

					if($_SERVER['REQUEST_METHOD'] == 'POST'){

						$email    = $_POST['email'];
						$password = $_POST['password'];

						if(empty($email) or empty($password)){

							echo "<span style='color:#e53d37'>Field must not be empty..</span>";
						}else{
							///$password=md5($password);
							$login = $user->loginUser($email,$password);

							if($login){
								header('Location:index.php');
							}else{
								echo "<span style='color:#e53d37'>Error...email/password not match</span>";
							}
						}

					}
					?>
				</p>
				<div class="login_reg">
					<form action="" method="post">
						<table>
							
							<tr>
								<td>Email:</td>
								<td><input type="email" name="email" placeholder="Please Enter Your E-mail" /></td>
							</tr>


							<tr>
								<td>Password:</td>
								<td><input type="password" name="password" placeholder="Please Give Your Password" /></td>
							</tr>

							
							<tr >
								<td colspan="2">
									<span style="float:right">
										<input type="submit" name="login" value="login" />
										<input type="reset" value="Reset" />
									</span>
								</td>
							</tr>
						</table>
					</form>
				</div>

				<div class="back">
					<a href="register.php"><img src="img/back.png" alt="back" /></a>
				</div>
			</div>

			<div  class="footer">
				<h3>&copy;2019|Md. Juel Chowhury.</h3>
			</div>


		</div>
	</body>
</html>