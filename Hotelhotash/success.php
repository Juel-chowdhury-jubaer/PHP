<?php
require_once("include/header.php");
?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Booking conformation</title></head>

<body>
<div style="color:red"><h1>Your room Booked successfully,You will be contacted soon.</h1></div>

<?php
	  include('include/db_con.php');
	  $sql="select * from roomdetail ";
	  $row=mysqli_query($con,$sql) or die (mysqli_error($con));
	 
	  ?>
	  <table style="border="1">
	  <?php
	  
	 while($data=mysqli_fetch_array($row))
	  {
	  ?>
	  <tr>
	  </br>
	  <td"><?php echo "Your Booking Id(Preserve it):";?><?php echo  $data['id']; ?></td>
	  </tr>
	  <?php
	  }
	  
	  
	  ?>

</body>
</html>

