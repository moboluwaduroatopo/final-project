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
			/*while($row = $stmt->fetch_assoc()){
				//$response = "{'product': ".$row['product_name'].",'price':".$row['price']."}";
				//$row['product_name'];
				
          
			}
				 */
			// $obj = mysqli_fetch_all($stmt,MYSQLI_ASSOC);
			// //$j = [{NAME:'chris'},{NAME:'TAWA'}];
			// //$j = ["{'NAME':'pEJU'}"];
			// $j = json_encode($obj);
			// return $j;
			   
			// //$j = json_decode($response);
			// //echo  $j;

			// //echo '{product}';
			
		}
	
	}
		$fet = new Fetch();
		$fet->connect();
	    $fet->fetchProducts();

?>