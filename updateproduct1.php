<?php
session_start();
  Class myproduct{
    public $product;
    public $sale;
    public $price;
    public $profit;
    public $quantity;
    public $file;
    //public $type;
        public $connect;
     function connect(){
      $this->connect=mysqli_connect("localhost", "root", "", "shop_db");
    }
      function updateToDataBase($product,$sale,$price,$profit,$quantity,$file){
      $result=mysqli_query($this->connect, "update product_tb set  product_name='$product',sale='$sale', price='$price',profit='$profit', quantity='$quantity', pimage='$file',date=now(),year=now() where product_id='$_SESSION[id]'");
        //echo $_SESSION['id'];
        //echo $_SESSION['id'];
      echo "<script> window.location='product.php';</script>";
}
  } 
  $product=new myproduct();
  $product->connect();
  $product->updateToDataBase($_POST["product"],$_POST["sale"],$_POST["price"],$_POST["profit"], $_POST["quantity"],('images/'.$_FILES['file']['name']));
 
 
?>