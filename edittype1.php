<?php
session_start();
	Class myproduct{
	    
		public $type_name;
		public $image;
        public $connect;

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "shop_db");
		}
			function updateToDataBase($type_name, $image){
			$result=mysqli_query($this->connect, "update type set  type_name='$type_name',image='$image' where type_id='$_SESSION[id]'");
			 // echo "Done";
			echo "<script> window.location='product.php';</script>";

}
	} 
  $product=new myproduct();
  $product->connect();
  $product->updateToDataBase($_POST["type_name"], ('images/'.$_FILES['image']['name']));

 
 
?>