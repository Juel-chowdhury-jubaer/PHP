<?php
session_start();
require_once "functions.php";
$user = new loginRegistration();
$uid =  $_SESSION['uid'];
$username = $_SESSION['uname'];

if(isset($_REQUEST['id'])){
	$id = $_REQUEST['id'];
}else{
	header("Location: index.php");
	exit();
}

if(!$user->getSession()){
	header('Location: login.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>User Profile</title>
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
			
				<h2>Welcome, <?php echo $username?></h2>
				<p class ="userlist">Profile of :<?php $user->getUsername($id);  ?></p>

				<table class="tbl_one">
					<?php 
						$getUsers = $user->getUsersById($id);
						foreach ($getUsers as $user) {
					?>
					<tr>
						<td>Username:</td>
						<td><?php echo $user['username']; ?></td>
					</tr>

					<tr>
						<td>Name:</td>
						<td><?php echo $user['name']; ?></td>
					</tr>

					<tr>
						<td>E-mail:</td>
						<td><?php echo $user['email']; ?></td>
					</tr>

					<tr>
						<td>Website:</td>
						<td><?php echo $user['website']; ?></td>
					</tr>
					<?php if ($user['id']== $uid) {
				
					?>

					<tr>
						<td>Update Profile</td>
						<td><a href="update.php?id=<?php echo $user['id'];  ?>">Edit Profile</a></td>
					</tr>

					<?php } } ?>

				</table>
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