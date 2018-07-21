<?php
session_start();
$errors=array();
$con=mysqli_connect("localhost","root","","shop_db");

	Class Staff{
		public $password;
		public $username;
		public $connection;

		public function connect(){
			$this->connection=mysqli_connect("localhost", "root", "", "shop_db");}
		public function login($usern, $pword){
			$login=mysqli_query($this->connection, "SELECT * FROM staff_tb Where username='$usern' and password='$pword'");
			$count=mysqli_num_rows($login);
			while ($row=mysqli_fetch_array($login)) {
			$_SESSION['name'] =$row['surname'];
			$_SESSION['middle']=$row['middlename'];
			$_SESSION['pass'] = $row['passport'];

			}
			if ($count > 0) {
				header("Location:staffdashboard.php");
				//echo "staffdashboard.php";
			}
			else{
				header("Location: staff.html");
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