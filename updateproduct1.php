<?php
session_start();
  Class myproduct{
    public $product;
    public $price;
    public $quantity;
    public $file;
    //public $type;
        public $connect;
     function connect(){
      $this->connect=mysqli_connect("localhost", "root", "", "shop_db");
    }
      function updateToDataBase($product, $price, $quantity,$file){
      $result=mysqli_query($this->connect, "update product_tb set  product_name='$product', price='$price', quantity='$quantity', pimage='$file' where product_id='$_SESSION[id]'");
        //echo $_SESSION['id'];
        //echo $_SESSION['id'];
      echo "<script> window.location='product.php';</script>";
}
  } 
  $product=new myproduct();
  $product->connect();
  $product->updateToDataBase($_POST["product"],$_POST["price"], $_POST["quantity"],('images/'.$_FILES['file']['name']));
 
 
?>