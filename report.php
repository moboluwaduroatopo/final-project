<?php

$con=mysqli_connect("localhost","root","","shop_db");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
   <script type="text/javascript" src="jquery/jquery-3.1.1.js"></script>
<script type="text/javascript" src="jquery/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
<script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="myscrip.js"></script>
<style type="text/css"> 
#it{
	text-align: center;
}
</style>
<body >
 <?php include 'dashboard.php'; ?>
	<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Sales Report</li>
      </ol>
   <div style="width: 90%;height: 100px">
<div class="row text-center">
					<div class="col-md-12">
						<h4 class="font-weight-bold">Sales</h4>
						<hr/>
					</div></div>
	<!-- <table  style="width:60%;margin-left: 100px" class="table">
<div class="row"> -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Sales Data </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                    <th>No</th>
                     <th>customer_name</th>
                    <th>Issue by</th>
                    <th>Total</th>
                     <th>Tendering</th>
                    <th>change</th>
                    <th>payment_type</th>
                    <th>Date</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                     <th>No</th>
                      <th>customer_name</th>
                    <th>Issue by</th>
                    <th>Total</th>
                    <th>Tendering</th>
                    <th>Change</th>
                    <th>payment_type</th>
                    <th>Date</th>
                  </tr>
              </tfoot>
              <tbody>
               
             

<?php
$n=0;
$view = mysqli_query($con, "select * from  sale_tb  join admin using (admin_id) ")or die(mysqli_error($con));
while($r=mysqli_fetch_array($view)){
  $n++;
  $id=$r['sales_id'];
  $_SESSION['id']=$id;
echo "<tr><td>". $n."</td><td>".$r['customer_name']."</td><td>".$r['surname']." ".$r['middlename']."</td><td>".$r['total']." </td><td>".$r['tende']." </td><td>".$r['chang']."</td><td>".$r['payment_type']."</td><td>".$r['dates']."</td></tr>";
}

?>
</tbody>
            </table>
          </div>
        </div>
        
      </div>
         <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Order Data </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                    <th>No</th>
                     <th>sale_id</th>
                    <th>Product_name</th>
                    <th>Price</th>
                     <th>sale_qty</th>
                    <th>sale_total</th>
                    <th>image</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                     <th>No</th>
                      <th>sale_id</th>
                    <th>Product_name</th>
                    <th>Price</th>
                    <th>sale_qty</th>
                    <th>sale_total</th>
                    <th>image</th>
                  </tr>
              </tfoot>
              <tbody>
               
             

<?php
$n=0;
$view = mysqli_query($con, "select * from  invoice_tb join sale_tb using (sales_id)join product_tb using (product_id) ")or die(mysqli_error($con));
while($r=mysqli_fetch_array($view)){
  $n++;
  $id=$r['invoice_id'];
  $_SESSION['id']=$id;
echo "<tr><td>". $n."</td><td>".$r['sales_id']."</td><td>".$r['product_name']."</td><td><span>#</span>".$r['price']." </td><td>".$r['sale_qty']." </td><td>".$r['sale_total']."</td><td><img src='".$r['pimage']."' width=50px height =50px /></td></tr>";
}

?> </tbody>
            </table>
          </div>
        </div>
         </div>
   </div></div></div></body>