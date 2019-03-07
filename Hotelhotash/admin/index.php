<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Admin login page</title>
<style type="text/css">
	#contenair{
		height: 100%;
		width: 100%;
		
	}
	#r{
		margin-top: 5%;
		margin-bottom: 5%;
		font-size:20px;
		padding-bottom:15px;
		height:100%;
		background:#ddd;
	 
		
	}
	#h{
		text-decoration:none;
	}
	
	</style>
	

</head>
<body>
<div id="contenair">
	<div id="r" >
	
	
	<form action="index.php" method="POST">
	<h2 align="center" id="h"><u><i>Check Profile</i></u></h2>
        <table align="center">
          <tr>
            <td width="113">ID(<small>That you have given after registration</small>):</td>
            <td width="215">
              <input name="id" type="text"  size="40" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
			<input type="submit" name="sub" value="Submit" /></td>
            </tr>
			
       </table>
		</form>
		<?php 
	include('../include/db_con.php');
	//session_start();
		if (isset($_POST['id']))
			   {
                $id=$_POST['id'];
                   if (empty($id))
                   {
                      $error = 'You must fill the box.';
                    }
                     
					 else {  
					 $login="select * from roomdetail where id='".$id."'";
					 $result=mysqli_query($con,$login);
					 echo"";
					 $data=mysqli_fetch_array($result);
						echo"<h2>Information:</h2>";
						echo"<table border='2'>";
							echo"<tr>";
								echo"<td>Attribute</td>";
								echo"<td>Value</td>";
							echo"</tr>";
							echo"<tr>";
								echo"<td> Name </td>";
								echo"<td>".$data['username']."<td>";
							echo"</tr>";
							echo"<tr>";
								echo"<td> Checkin Date </td>";
								echo"<td>".$data['checkin_date']."<td>";
							echo"</tr>";
							echo"<tr>";
								echo"<td> Checkout Date </td>";
								echo"<td>".$data['checkout_date']."<td>";
							echo"</tr>";
							echo"<tr>";
								echo"<td> Room Type </td>";
								echo"<td>".$data['room_type']."<td>";
							echo"</tr>";
							echo"<tr>";
								echo"<td> Email </td>";
								echo"<td>".$data['email']."<td>";
							echo"</tr>";
							echo"<tr>";
								echo"<td> NO of Room </td>";
								echo"<td>".$data['no_of_room']."<td>";
							echo"</tr>";
							echo"<tr>";
								echo"<td> Room Type </td>";
								echo"<td>".$data['room_type']."<td>";
							echo"</tr>";
							echo"<tr>";
								echo"<td> Total Amount </td>";
								echo"<td>".$data['total_amount']."<td>";
							echo"</tr>";
							echo"<tr>";
								echo"<td>Paid_amount </td>";
								echo"<td>".$data['paid_amount']."<td>";
							echo"</tr>";
						echo"</table";
			}
		}		
	
  
  ?>
		
	</div>
</div>
</body>
</html>