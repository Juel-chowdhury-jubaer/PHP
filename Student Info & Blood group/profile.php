<?php
	require_once"functions.php";
	if(isset($_REQUEST['serialNO'])){
		$serial=$_REQUEST['serialNO'];
	}
	$users=new operation();
?>

<!DOCTPE html>
<html>
	<head>
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
		<div class="second">
			<div class="table_element">
				<h2>Details of <strong><?php $users->getnickname($serial);?></strong></h2>
				<table>
					<?php 
					$alldata=$users->getOthers($serial);
					foreach ($alldata as $value) {
					
					?>
					<tr>
						<td>Roll</td>
						<td><?php echo ": ".$value['id'];?></td>
					</tr>
					<tr>
						<td>Full Name</td>
						<td><?php echo ": ".$value['full_name'];?></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><?php echo ": ". $value['address'];?></td>
					</tr>
					<tr>
						<td>Contact-NO</td>
						<td><?php echo ": ".$value['contact_no'];?></td>
					</tr>
					<tr>
						<td>Blood Group</td>
						<td><?php echo ": ".$value['blood_group'];?></td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td><?php echo ": ". $value['email'];?></td>
					</tr>
					<tr>
						<td>SSC GPA</td>
						<td><?php echo  ": ".$value['ssc_gpa'];?></td>
					</tr>
					<tr>
						<td>HSC GPA</td>
						<td><?php echo ": ".$value['hsc_gpa'];?></td>
					</tr>
					<tr>
						<td>About </td>
						<td><?php echo ": ".$value['special_info'];?></td>
					</tr>
					<?php }?>
				</table>
			</div>
			<h2><a href="update.php?serialNO=<?php echo $value['id']; ?>">Update Profile</a></h2>
		</div>
		<footer>
			<p>&copy; Noakhali Sciecne and Technology University (NSTU),<br>Sonapur,Noakhali-3814.</p>
			<a href="#" ><img src="images/fb.jpeg"/></a>
			<a href="#"><img src="images/Twitter.png"/></a>
			<a href="#"><img src="images/google-plus.jpg"/></a>
		</footer>
	</body>
</html>