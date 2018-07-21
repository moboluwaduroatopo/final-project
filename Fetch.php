<?php
//header('Content-Type: application/json');
	class Fetch{
			public $connect;

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "shop_db");
		}
			function fetchProducts($x){
			$stmt = mysqli_query($this->connect,"SELECT * FROM product_tb WHERE product_name LIKE '%".$x."%' ");
			/*while($row = $stmt->fetch_assoc()){
				//$response = "{'product': ".$row['product_name'].",'price':".$row['price']."}";
				//$row['product_name'];
				
          
			}
				 */
			$obj = mysqli_fetch_all($stmt,MYSQLI_ASSOC);
			//$j = [{NAME:'chris'},{NAME:'TAWA'}];
			//$j = ["{'NAME':'pEJU'}"];
			$j = json_encode($obj);
			return $j;
			   
			//$j = json_decode($response);
			//echo  $j;

			//echo '{product}';
		}
	
	}
		$fet = new Fetch();
		$fet->connect();
	    echo  $fet->fetchProducts($_POST["x"]);

?>