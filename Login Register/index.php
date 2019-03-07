<?php
session_start();
require_once "functions.php";
$user     = new loginRegistration();

$uid      =  $_SESSION['uid'];
$username = $_SESSION['uname'];

if(!$user->getSession()){
	header('Location: login.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Home</title>
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

				<p class="login_mgs">
					<?php
					if(isset($_SESSION['login_mgs'])){
						echo $_SESSION['login_mgs'];
						unset($_SESSION['login_mgs']);
					}
					?>
				</p>
				<h2>Welcome, <?php echo $username?></h2>

				<p class ="userlist">All user list</p>

				<table class="tbl_one">
					<tr>
						<th>Serial</th>
						<th>Name</th>
						<th>Profile</th>
					</tr>
					<?php 
						$i = 0;
						$alluser = $user->getAllusers();
						foreach ($alluser as $user) {
							$i++;
							# code...
						
					 ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $user['name']; ?></td>
						<td><a href="userProfile.php?id=<?php echo $user['id'];  ?>">View details<a></td>
					</tr>
					<?php }  ?>

				</table>

			</div>

			<div  class="footer">
				<h3>&copy;2019|Md. Juel Chowhury.</h3>
			</div>


		</div>
	</body>
</html>