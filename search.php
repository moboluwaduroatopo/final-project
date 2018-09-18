<?php
  $connect=mysqli_connect("localhost", "root", "", "shop_db");
  $output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM product_tb
  WHERE pimage LIKE '%".$search."%'
  OR product_name LIKE '%".$search."%' 
  OR price LIKE '%".$search."%' 
 
 ";
}
else
{
 $query = "
  SELECT * FROM product_tb ORDER BY productID
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
   
 '
 ;
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td><img src='.$row["pimage"].' width=50px height =50px></td>
    <td>'.$row["product_name"].'</td>
    <td>'.$row["price"].'</td>
   
   </tr>
  ';
 }
 echo $output;
}

?>