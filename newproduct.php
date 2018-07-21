<?php

	Class myproduct{
		public $product;
		public $price;
		public $quan;
		public $file;
		public $type;
        public $connect;

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "shop_db");
		}
			function saveToDataBase($product, $price,$quan,$file,$type){
			$result=mysqli_query($this->connect, "INSERT INTO product_tb(product_name,price,quantity,pimage,date,type_id) VALUES ('$product','$price','$quan','$file',now(),'$type')");
				if ($result) {
					
					//echo " ";
					header("Location:product.php");
				}

			else{
					echo("NOT SAVED").mysqli_error($this->connect);
				}
		}
	


	} 
  $myproduct=new myproduct();
  $myproduct->connect();
  $myproduct->saveToDataBase($_POST["product"], $_POST["price"], $_POST["quan"], ('images/'.$_FILES['file']['name']), $_POST["typ"]);

 
 
?>