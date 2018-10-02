<?php
session_start();
$errors=array();
//require('conn.php');
	Class Staff{
		// public $
		// public $password;
		// public $username;
		public $connection;

		public function connect(){

			$this->connection=mysqli_connect("localhost", "root", "", "shop_db");
		}

			
		public function login($username, $password){
			if (isset($_POST['username']) AND isset($_POST['password'])) {
				$username = $_POST['username'];
                $password=$_POST['password'];
			$login=mysqli_query($this->connection, "SELECT * FROM admin Where username='$username' and password='$password'");
			$count=mysqli_num_rows($login);
			while ($row=mysqli_fetch_array($login)) {
			$_SESSION['adminid']=$row['admin_id'];
			$_SESSION['name'] =$row['surname'];
			$_SESSION['middle']=$row['middlename'];
			$_SESSION['pass'] = $row['passport'];

			}
			if ($count > 0) {
				header("Location:index.php");
				//$_SESSION['username'] = $usern;
                //$_SESSION['success'] = "You are now logged in";
				//echo "done";
			}else{
				echo"failed".mysqli_error($this->connection);
				//header("Location: adminlogin1.php");
				//echo ("Not Found". mysqli_error($this->connection));
			}
			}
			else{
				echo"failed".mysqli_error($this->connection);
				//header("Location: adminlogin1.php");
				//echo ("Not Found". mysqli_error($this->connection));
			}
			
			
	
	}
	}


 $staff = new Staff();
  $staff->connect();
 echo $staff->login($_POST["username"], $_POST["password"]);


 
 
?>