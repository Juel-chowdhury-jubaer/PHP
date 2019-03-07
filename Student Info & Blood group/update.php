<?php 
	require_once "functions.php";
	if(isset($_REQUEST['serialNO'])){
		$serial=$_REQUEST['serialNO'];
	}
	$user=new operation();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Update Info</title>
		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel='stylesheet' type='text/css' href="css/style.css" />
		<link rel='stylesheet' type='text/css' href="fonts/stylesheet.css" />
	</head>

	<body>
		<div class="whole">
			<header>
				<img  src="images/NSTU_logo.gif"/>
				<div class="right">
					<h2>Students Information system</h2>
					<h4>-a way of getting information quickly.</h4>
				</div>
			</header>
		</div>
		
		<div class="wrapper">
			
			<div class="content">

				<h2>Update Profile</h2>
				<p class="mgs">

					<?php
						if($_SERVER['REQUEST_METHOD'] == 'POST'){
							//$id=$_POST['id'];
							$fullname = $_POST['fullname'];
							$nickname     = $_POST['nickname'];
							$address    = $_POST['address'];
							$contact  = $_POST['contact'];
							$email  = $_POST['email'];
							$blood  = $_POST['blood'];
							$ssc  = $_POST['ssc'];
							$hsc  = $_POST['hsc'];
							$special  = $_POST['special'];

							if(empty($fullname) or empty($nickname) or empty($address) or empty($contact) or empty($email) or empty($blood) or empty($ssc) or empty($hsc) or empty($special) ){
								echo "<span style='color:#e53d37'>Error..Field  must not be empty </span>";
							}else{

								$update = $user->updateUser($serial,$fullname,$nickname,$address,$contact,$email,$blood,$ssc,$hsc,$special);
								if($update){
									echo "<span style='color:green'>Information Update Successfully.</span>";
								}
							}
							
						}
					?>
				</p>
				<h2>Profile update of <strong><?php $user->getnickname($serial);?></strong></h2>
				<?php 
					$result = $user->getOthers($serial);
					foreach($result as $row){
				?>
				<div class="login_reg">
					<form action="" method="post" name="reg">
						<table>
							<tr>
								<td>Full Name</td>
								<td>:  <input type="text" name="fullname" value="<?php echo $row['full_name'];?>" /></td>
							</tr>

							<tr>
								<td>Nick Name </td>
								<td>:  <input type="text" name="nickname" value="<?php echo $row['nick_name'];?>" /></td>
							</tr>
							<tr>
								<td>Address </td>
								<td>:  <input type="text" name="address" value="<?php echo $row['address'];?>" /></td>
							</tr>
							<tr>
								<td>Contace NO </td>
								<td>:  <input type="text" name="contact" value="<?php echo $row['contact_no'];?>" /></td>
							</tr>
							<tr>
								<td>Email </td>
								<td>:  <input type="email" name="email" value="<?php echo $row['email'];?>" /></td>
							</tr>
							<tr>
								<td>Blood group </td>
								<td>:  <input type="text" name="blood" value="<?php echo $row['blood_group'];?>" /></td>
							</tr>
							<tr>
								<td>SSC GPA </td>
								<td>:  <input type="text" name="ssc" value="<?php echo $row['ssc_gpa'];?>" /></td>
							</tr>
							<tr>
								<td>HSC GPA </td>
								<td>:  <input type="text" name="hsc" value="<?php echo $row['hsc_gpa'];?>" /></td>
							</tr>
							<tr>
								<td>Special Characteristics </td>
								<td>:  <input type="text" name="special" value="<?php echo $row['special_info'];?>" /> </td>
							</tr>
							<tr >
								<td colspan="2">
									<span style="float:right;">
										<input type="submit" value="Update" />
									</span>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<?php }?>
				<div class="back">
					<a href="index.php"><img src="images/backs.jpg" alt="Back" /></a>
				</div>

			</div>

		</div>

		<footer>
			<p>&copy; Noakhali Sciecne and Technology University (NSTU),<br>Sonapur,Noakhali-3814.</p>
			<a href="#" ><img src="images/fb.jpeg"/></a>
			<a href="#"><img src="images/Twitter.png"/></a>
			<a href="#"><img src="images/google-plus.jpg"/></a>
		</footer>
		
	</body>
</html>