<?php
session_start();
require_once "functions.php";
$user = new loginRegistration();
$uid =  $_SESSION['uid'];
$username = $_SESSION['uname'];
/*
if(isset($_REQUEST['id'])){
	$id = $_REQUEST['id'];
}else{
	header("Location: index.php");
	exit();
}
*/
if(!$user->getSession()){
	header('Location:  login.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Update Profile</title>
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
							$username = $_POST['username'];
							$name     = $_POST['name'];
							$email    = $_POST['email'];
							$website  = $_POST['website'];

							if(empty($username) or empty($name) or empty($email) or empty($website) ){
								echo "<span style='color:#e53d37'>Error..Field  must not be empty </span>";
							}else{

								$update = $user->updateUser($uid,$username,$name,$email,$website );
								if($update){
									echo "<span style='color:green'>Information Update Successfully.</span>";
								}
							}
							
						}
					?>
				</p>

				<?php 
					$result = $user->getUserDetails($uid);
					foreach($result as $row){
				?>
				<div class="login_reg">
					<form action="" method="post" name="reg">
						<table>
							<tr>
								<td>Username:</td>
								<td><input type="text" name="username" value="<?php echo $row['username']?>" /></td>
							</tr>

							<tr>
								<td>Name:</td>
								<td><input type="text" name="name" value="<?php echo $row['name']?>" /></td>
							</tr>

							<tr>
								<td>Email:</td>
								<td><input type="email" name="email" value="<?php echo $row['email']?>" /></td>
							</tr>

							<tr>
								<td>Website:</td>
								<td><input type="text" name="website" value="<?php echo $row['website']?>" /></td>
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
				<?php }?>
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