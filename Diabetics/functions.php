<?php 
	require 'config.php';
	class operation{
		function __construct(){
			$database=new databaseConnection();
		}

		function getdata(){
			global $pdo;
			$query=$pdo->prepare("SELECT * FROM ice_2nd ORDER BY serial_no ASC");
			$query->execute();
			return $query->fetchALL(PDO::FETCH_ASSOC);
		}
		public function get_prescription($value){
			global $pdo;
			if($value<=1000){
				$id=1;	
			}
			elseif ($value<=1200 ) {
				$id=2;
			}
			elseif ($value<=1400) {
				$id=3;
			}
			elseif ($value<=1600) {
				$id=4;
			}
			elseif ($value<=1800) {
				$id=5;
			}
			elseif ($value<=2000) {
				$id=6;
			}
			elseif ($value<=2200) {
				$id=7;
			}
			elseif ($value<=2400) {
				$id=8;
			}
			elseif ($value<=2600) {
				$id=9;
			}
			elseif ($value<=2800){
				$id=10;
			}
			else{
				$id=11;
			}


				$query=$pdo->prepare("SELECT prescriptions,id FROM suggestions WHERE id=?");
				$query->execute(array($id));
				$result=$query->fetch();
				return $result;
		}
			 public function registerUser($name,$email,$password)
		     	{
				global $pdo;
				$query=$pdo->prepare("SELECT name FROM register WHERE email= ?");
				$query->execute(array($email));
				$num=$query->rowcount();
				if($num==0){
					$query=$pdo->prepare("INSERT INTO register(name,email,password)VALUES( ?, ?, ?)");
					$query->execute(array($name,$email,$password));
					return true;
				}else{
					return false;
				}
		}
		function loginUser($email,$password){
			global $pdo;
			$query=$pdo->prepare("SELECT name,username,dept FROM register WHERE email=? AND password=?");
			$query->execute(array($email,$password));
			$userinfo=$query->fetch();
			$num=$query->rowcount();
			if($num==1){
				/*session_start();
				$_SESSION['login']=true;
				$_SESSION['name']=$userinfo['name'];
				$_SESSION['uname']=$userinfo['username'];
				$_SESSION['msg']='Login successfully';*/
				return true;
			}
			else{
				return false;
			}
		}
		function bmi_suggestion($calculation){
			global $pdo;
			$id;
			if($calculation<=18.5){
				$id=1;
			}
			elseif($calculation<=24.9){
				$id=2;
			}
			elseif($calculation<=29.9){
				$id=3;
			}
			else{
				$id=4;
			}
			$query=$pdo->prepare("SELECT * FROM bmi where id= ?");
			$query->execute(array($id));
			$result=$query->fetch();
			return $result;
		}
	}
 ?>


                           
                                
                                