<?php
session_start();
	Class myproduct{
		public $product;
		public $price;
		public $file;
		public $type;
        public $connect;

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "shop_db");
		}
			function saveToDataBase($product, $price,$file,$type){
			$result=mysqli_query($this->connect, "update product_tb set  product_name='$product',price='$price',pimage='$file', type_id='$type' where product_id='$_SESSION[id]'");
			 // echo "Done";
			echo "<script> window.location='product.php';</script>";

}
	} 
  $product=new myproduct();
  $product->connect();
  $product->saveToDataBase($_POST["product"], $_POST["price"], ('images/'.$_FILES['file']['name']),$_POST["typ"]);

 
 
?>