

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Manager Page</title>
</head>

<body>
 
	  <h1 style="background-color:lightgrey;">Welcome Manager</h1>
	  
	  
	  
	  
	  Choose option from Below to take action!!!!
	  Create new Booking click <a href="../registration.php"> Here</a>
	  </br>
	  </br>
	  </br>
	  <?php
	  include('../include/db_con.php');
	  $sql="select * from roomdetail ";
	  $row=mysql_query($sql) or die (mysql_error($con));
	 
	  ?><table style="background-color:lightgrey;", border="1","font-size:20px">
	  <?php
	  
	  while($data=mysql_fetch_array($row))
	  {
	  ?>
	  <tr>
	  <td><?php echo $data[id]; ?></td>
	  <td><?php echo $data[username]; ?></td>
	  <td><?php echo $data[checkin_date]; ?></td>
	  <td><?php echo $data[checkout_date]; ?></td>
	  <td><?php echo $data[room_type]; ?></td>
	  <td><?php echo $data[no_of_room]; ?></td>
	  <td><?php echo $data[amount]; ?></td>
	  <td><a href="update.php?id=<?php echo $data[id]; ?>">update</a></td>
	  <td><a href="delete.php?id=<?php echo $data[id]; ?>">delete</a></td>
	  </tr>
	  <?php
	  }
	  
	  
	  ?>
	  </table>
	  
	  </div>
</body>
</html>


