<?php 
	require_once "functions.php";
	$users=new operation();
?>

<!DOCTPE html>
<html>
	<head>
		<link rel='stylesheet' type='text/css' href="css/style.css" />
		<script type="text/javascript" src="script.js"></script>
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
		<div class="searchpage">
			<div class="searched">
			<table class="profile_tbl">
				<tr>
						<th>Serial</th>
						<th>Full Name</th>
						<th>Contact</th>
				</tr>
			<?php 
			if($_SERVER['REQUEST_METHOD']=="POST"){
				$item=$_POST['search'];
				$total_item=$users->getBloodGroup($item);
				if(!empty($total_item)){
				$i=0;
				foreach($total_item as $value){
					$i++;

		?>
				
					
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $value['full_name']; ?> </td>
						<td><?php echo $value['contact_no']; ?> </td>
					</tr>
					
				
				<?php 
			} 
		}
		
				else{
					echo"<h2>Sorry.. No match found.</h2>";
				}
			}
				?>
			</table>
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