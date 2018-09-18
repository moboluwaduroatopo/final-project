<?php

	Class myproduct{
		public $type_name;
		public $image;
        public $connect;

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "shop_db");
		}
			function saveToDataBase($type_name, $image){
			$result=mysqli_query($this->connect, "INSERT INTO type(type_name,image) VALUES ('$type_name','$image')");
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
  $myproduct->saveToDataBase($_POST["type_name"], ('images/'.$_FILES['image']['name']));

 
 
?>