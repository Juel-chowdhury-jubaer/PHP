
<?php
require_once("include/header.php");
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<style type="text/css">
	#contenar{
		height: 100%;
		width: 100%;
		
	}
	#r{
		margin:10px;
		padding-bottom:10px;
		float: center;
		background-color: #b7bcbd;
		
	}
	
		

	</style>
	

     
</head>

<body>
<?php
include('include/db_con.php');
session_start();
$insert="";
$result="";
if(isset($_POST['sub']))
{
$username=$_POST['username'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$roomcost=$_POST['field_1'];
$email=$_POST['email'];

if($roomcost=="80")
  $roomtype="standard";
else if($roomcost=="70")
  $roomtype="moderate";
else if($roomcost=="60")
  $roomtype="moderate";
else if($roomcost=="50")
  $roomtype="deluxe";

$room_nos=$_POST['room_nos'];
$total_amount=$_POST['total_amount'];
$paid_amount=$_POST['paid_amount'];

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$result=generateRandomString();

//echo $result;
$s1="INSERT INTO `roomdetail`(id,username,checkin_date,checkout_date,room_type,email,no_of_room,total_amount,paid_amount)VALUES('$result','$username','$startdate','$enddate','$roomtype','$email','$room_nos','$total_amount','$paid_amount')";
//echo $roomtype.$email.$roomcost;
$insert=mysqli_query($con,$s1) or die (mysqli_error($con));
if(!$insert){
	echo"<h2 color='red'>Failed to insert data.</h2>";
}
}
?>

<div id="contenar">

	<div id="r">
	<form action="registration.php" method="POST">
	<h2 align="center" id="h"><u><i>Book Room</i></u></h2>
	
        <table >
		
          <tr>
            <td width="113">Username</td>
            <td width="215">
              <input name="username" type="text"  value="" /></td>
          </tr>
          <tr>
       
            <td>Check In Date</td>
            <td>
              <input name="startdate" type="date" value="" placeholder="YYYY/MM/DD" /></td>
          </tr>
          <tr>
		   
            <td>Check out Date</td>
            <td>
              <input name="enddate" type="date" value="" placeholder="YYYY/MM/DD" /></td>
          </tr>
			   <tr>
            <td>Room type</td>   
            <td>
              <select id="field_1" name="field_1">
                  <option value="80" id="" name="standard">Standard</option>
                  <option value="70" id="" name="moderate">Moderate</option>
                  <option value="60" id="" name="superior">Superior</option>
                  <option value="50" id="" name="deluxe">Deluxe</option>
              </select>
            </td>
         </tr>
        <tr>
          <td>Price per Room</td>
            <td>
              <span id="a1" ></span>$
           </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
              <input name="email" type="email" /></td>
          </tr>
          <tr>
            <td>No. of Rooms </td>
            <td>
              <input name="room_nos" id="room_nos" type="number"  onchange="gettotal1();" onkeyup="gettotal1();" /></td>
          </tr>
          <tr>
            <td >Total Amount To Pay</td>
            <td>
             <input type="text" name="total_amount" id="total1"  size="10px" />
            </td>
          </tr>
          <tr>
            <td >Paid Amount</td>
            <td>
             <input type="text" name="paid_amount" id=""  size="10px" />
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center">
               <input type="submit" name="sub" value="Pay & Book" /></td>
            </tr>

       </table>
	   </br>
	   <?php 
	   	if($insert){
	   		echo"You have successfully registered.";
	   		echo "<br/>Your Booking Id(Preserve it):";
	   		echo  "<strong style='color:green'> ".$result."</strong>";
	   		echo"For check profile.";
	   		echo "<a href='admin/index.php'>click here</a>";
	   	}
	   ?>
		</form>
		
		
		<script language="javascript" type="text/javascript">
function notEmpty(){

var e = document.getElementById("field_1");
var strUser = e.options[e.selectedIndex].value;
 var strUser=document.getElementById('a1').innerHTML=strUser;
}


notEmpty();
    
    document.getElementById("field_1").onchange = notEmpty;


   function gettotal1(){
      var gender1=document.getElementById('a1').innerHTML;
      var gender2=document.getElementById('room_nos').value;
      var gender3=parseFloat(gender1)* parseFloat(gender2);
			
      document.getElementById('total1').value=gender3;
	
   }

			</script>
 
		
	</div>
</div>
</body>
</html>

<?php 

require_once('include/footer.php');
?>