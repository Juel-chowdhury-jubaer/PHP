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
		function getnickname($serial){
			global $pdo;
			$query=$pdo->prepare("SELECT nick_name FROM ice_2nd WHERE id=?");
			$query->execute(array($serial));
			$result=$query->fetch();
			echo $result['nick_name'];

		}
		/*public function getUserDetails($userid){

			global $pdo;
			$query = $pdo->prepare("SELECT * FROM users WHERE id=? ");
			$query->execute(array($userid));
			return $query->fetchALL(PDO::FETCH_ASSOC);
		}*/
		public function getOthers($serial){
			global $pdo;
			$query=$pdo->prepare("SELECT * FROM ice_2nd WHERE id=?");
			$query->execute(array($serial));
			$result=$query->fetchALL(PDO::FETCH_ASSOC);
			return $result;
		}
		public function updateUser($id,$fullname,$nickname,$address,$contact,$email,$blood,$ssc,$hsc,$special){
			global $pdo;
			$query = $pdo->prepare("UPDATE ice_2nd SET full_name =?, nick_name =?,address =?, contact_no=?, email=?, blood_group=?, ssc_gpa=?, hsc_gpa=?, special_info=?  WHERE id =? ");
			$query->execute(array($fullname,$nickname,$address,$contact,$email,$blood,$ssc,$hsc,$special,$id));
			return true;

		}
		public function getBloodGroup($item){
			global $pdo;
			$query=$pdo->prepare("SELECT * FROM ice_2nd WHERE blood_group=?");
			$query->execute(array($item));
			$result=$query->fetchALL(PDO::FETCH_ASSOC);
			return $result;
		}
		
	}
 ?>