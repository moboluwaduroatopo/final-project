<?php
//header('Content-Type: application/json');

  $connect=mysqli_connect("localhost", "root", "", "shop_db");
$p=$_POST['high'];
$request=mysqli_query($con,"select * from product_tb where product_name like '%".$p."%'or price like '%".$p."%'  ");
$data = mysqli_fetch_all($request,MYSQLI_ASSOC);
$jdata = json_encode($data);
echo $jdata;


?>