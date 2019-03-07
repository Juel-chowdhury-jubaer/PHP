<?php
	class databaseConnection{
		public function __construct(){
			global $pdo;
			try{
				$pdo=new PDO('mysql:host=localhost;dbname=diabetics','root','');
				}catch(PDOException $e){
					exit('No database found.');
				}

		}
	}
?>