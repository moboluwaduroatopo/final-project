<?php 
//session_start();
$errors=array();
//$msg="";
//require('conn.php');
	Class Staff{
		// public $
		// public $password;
		// public $username;
		public $connection;

		public function connect(){

			$this->connection=mysqli_connect("localhost", "root", "", "shop_db");
		}

			private function emailExists($email){
		$pre_stmt = $this->connection->prepare("SELECT staff_id FROM staff_tb WHERE email = ? ");
		$pre_stmt->bind_param("s",$email);
		$pre_stmt->execute() or die($this->connection->error);
		$result = $pre_stmt->get_result();
		if($result->num_rows > 0){
			return 1;
		}else{
			return 0;
		}
	}
		public function createUserAccount($sname,$mname,$lname,$email,$username,$password,$ppt){
		//To protect your application from sql attack you can user 
		//prepares statment
		if ($this->emailExists($email)) {
			$return = "EMAIL_ALREADY_EXISTS";
			include("staff1.php");
			//$msg="please";
		}else{
			//$pass_hash = password_hash($password,PASSWORD_BCRYPT,["cost"=>8]);
			//$date = date("Y-m-d");
			//$notes = "";
			$pre_stmt = $this->connection->prepare("INSERT INTO staff_tb(surname,middlename,lastname,email,username, password,passport)
            VALUES (?,?,?,?,?,?,?)");
			$pre_stmt->bind_param("sssssss",$sname,$mname,$lname,$email,$username,$password,$ppt);
			$result = $pre_stmt->execute() or die($this->connection->error);

			if ($result) {
					header("Location:stafflogin.html");
			}else{
					//echo "failed".mysqli_error($con);
		header("Location:staff1.php");
			}
		}
			
	}
		
			
	
	}
	//}
$staff = new Staff();
  $staff->connect();
 echo $staff->createUserAccount($_POST["sname"], $_POST["mname"],$_POST["lname"], $_POST["email"],$_POST["username"], $_POST["password"],('images/'.$_FILES['ppt']['name']));

	
 
 
 
?>