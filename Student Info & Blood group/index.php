<?php 
	require_once "functions.php";
	$users=new operation();
?>

<!DOCTPE html>
<html>
	<head>
		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel='stylesheet' type='text/css' href="css/style.css" />
		<script type="text/javascript" src="script/script.js"></script>
		<link rel='stylesheet' type='text/css' href="fonts/stylesheet.css" />
	</head>
	<body>
		<div class="whole">
			<header>
			<div class="header_left">
				<img  src="images/NSTU_logo.gif"/>
				<div class="right">
					<h2>Students Information system</h2>
					<h4>-a way of getting information quickly.</h4>
				</div>

			</header>
		</div>
		<div class="slide_section">
			<div class="slidder">
				<div class="slider-wrapper theme-bar">
					<div class="nivoSlider" id="slider">
						<img src="images/1.jpg" />
						<img src="images/2.jpg" />
						<img src="images/3.jpg" />
						<img src="images/4.jpg" />
						<img src="images/nstu4.jpg" />
					</div>
				</div>
			</div>
		</div>
		<div class="second">
			<div class="second_left">
				<h2>The list of Students of ICE department</h2>
				<table class="profile_tbl">
					<tr>
						<th>Serial</th>
						<th>Full Name</th>
						<th>Details</th>
						<th>Update</th>
					</tr>
					<?php
						$i=0;
						$alldata=$users->getdata();
						foreach($alldata as $value){
							$i++;
						
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $value['full_name']; ?> </td>
						<td><a href="profile.php?serialNO=<?php echo $value['id'] ?>">View Details</a></td>
						<td><a href="update.php?serialNO=<?php echo $value['id'] ?>">Update</a></td>
					</tr>
					<?php } ?>
				</table>
			</div>
			<div class="second_right">
				<span>Time:<em id="showtime">
					<script type="text/javascript">
						start();
					</script>
				</em></span>
				<h3>Change Themes:</h3>
				<form method="post">
					<select onclick="colors(this);">
						<option value="bg-body.png">Default</option>
						<option value="bg-2.png">Black Circle</option>
						<option value="bg-4.png">Rectengle</option>
						<option value="bg-5.png">background-5</option>
						<option value="bg-6.png">Leaf</option>
						<option value="bg-9.png">Royal-blue</option>
					</select>
				</form>
				<div class="srch">
					<form action="blood_group.php" method="post">
					<br/>
						<h4>Search Your Blood Group</h4>
						<input type="search" name="search"  placeholder="e.g-B+" />
						<input type="submit" value="Search" />
					
					</form>
				</div>
			</div>
		</div>
		
		<footer>
			<p>&copy; Noakhali Sciecne and Technology University (NSTU),<br>Sonapur,Noakhali-3814.</p>
			<a href="#" ><img src="images/fb.jpeg"/></a>
			<a href="#"><img src="images/Twitter.png"/></a>
			<a href="#"><img src="images/google-plus.jpg"/></a>
		</footer>

		<script type="text/javascript" src="script/jquery-1.9.0.min.js"></script>
	    <script type="text/javascript" src="script/jquery.nivo.slider.js"></script>
	    <script type="text/javascript">
		    $(window).load(function() {
		        $('#slider').nivoSlider();
		    });
	    </script>
	</body>
</html>