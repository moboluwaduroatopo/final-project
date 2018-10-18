<?php session_start();
$con=mysqli_connect("localhost","root","","shop_db");
$sale= mysqli_query($con, "select  sum(od.sale_total) as last_1_month from sale_tb o inner join invoice_tb od on o.sales_id = od.sales_id where  o.dates >= last_day(now()) + interval 1 day - interval 1 month ");
//echo $sale_total;
 while($r=mysqli_fetch_array($sale)){
$_SESSION['sales']=$r['last_1_month'];
echo '<div>$r['last_1_month'];</div>'
 };
?>