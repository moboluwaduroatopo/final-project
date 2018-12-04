<?php

	Class myproduct{
		public $product;
		 public $sale;
		public $price;
		public $profit;
		public $quan;
		public $file;
		public $type;
        public $connect;
        

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "shop_db");
		}
			function saveToDataBase($product,$sale, $price,$profit,$quan,$file,$type){
			$result=mysqli_query($this->connect, "INSERT INTO product_tb(product_name,sale,price,profit,quantity,pimage,date,year,type_id) VALUES ('$product','$sale','$price','$profit','$quan','$file',now(),now(),'$type')");
				if ($result) {
					
					//echo " ";
					header("Location:Addnewproduct.php");
				}

			else{
					echo("NOT SAVED").mysqli_error($this->connect);
				}
		}
	


	} 
  $myproduct=new myproduct();
  $myproduct->connect();
  $myproduct->saveToDataBase($_POST["product"],$_POST["sale"],$_POST["price"],$_POST["profit"], $_POST["quan"], ('images/'.$_FILES['file']['name']), $_POST["typ"]);

 
 
?>