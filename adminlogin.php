<?php
session_start();
$errors=array();
require('conn.php');
	Class Staff{
		public $password;
		public $username;
		public $connection;

		public function connect(){
			$this->connection=mysqli_connect("localhost", "root", "", "shop_db");}
		public function login($usern, $pword){
			$login=mysqli_query($this->connection, "SELECT * FROM admin Where username='$usern' and password='$pword'");
			$count=mysqli_num_rows($login);
			while ($row=mysqli_fetch_array($login)) {
			$_SESSION['name'] =$row['surname'];
			$_SESSION['middle']=$row['middlename'];
			$_SESSION['pass'] = $row['passport'];

			}
			if ($count > 0) {
				header("Location:dashboard.php");
				//$_SESSION['username'] = $usern;
                //$_SESSION['success'] = "You are now logged in";
				//echo "done";
			}
			else{
				header("Location: admin.html");
				//echo ("Not Found". mysqli_error($this->connection));
			}
		}
		public function display(){

		}

	} 
	
  $staff=new Staff();
  $staff->connect();
 echo  $staff->login($_POST["username"], $_POST["password"]);

 
 
?>