<?php
//header('Content-Type: application/json');
	class Fetch{
			public $connect;

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "shop_db");
		}
			function fetchProducts(){
			$stmt = mysqli_query($this->connect,"SELECT * FROM staff_tb");
			echo("<select class='form-control' name='id' id='id'>");
			while ($row=mysqli_fetch_assoc($stmt)) {
				$_SESSION['name'] =$row['surname'];
			    $_SESSION['middle']=$row['middlename'];
				echo("<option value=".$row["staff_id"].">".$_SESSION['name']." ".$_SESSION['middle']."</option>");
			}
			echo("</select>");
			
			
		}
	
	}
		$fet = new Fetch();
		$fet->connect();
	    $fet->fetchProducts();

?>