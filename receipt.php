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
<body class="">
 <?php include 'dashboard.php'; ?>
	<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">All Receipt</li>
      </ol>
   <div style="width: 90%;height: 100px">
<div class="row text-center">
					<div class="col-md-12">
						<h4 class="font-weight-bold">All Receipt</h4>
						<hr/>
					</div></div>
	<table  style="width:60%;margin-left: 100px" class="table">
<div class="row">

<?php
//$tid= $_GET['tid'];
$view = mysqli_query($con, "select * from  invoice_tb ")or die(mysqli_error($con));
$counter = 0;
while($r=mysqli_fetch_array($view)){


	$id=$r['invoice_id'];
	$_SESSION['id']=$id;
	
echo "
<tr><td>".$r['dates']."</td></tr>
<tr><td>Customer name</td><td>".$r['customer_name']."</td></tr>
<tr><td><p>Receipt No</p></td><td>".$r['sale_id']."</td></tr>
 <tr><td><p>Payment Mode</p></td><td>".$r['payment_type']."</td></tr>  	
 <tr><td> ".$r['product_name']."</td><td>".$r['price']."</td></tr>
 <tr><td>Total</td><td>".$r['total']."</td></tr>
 <tr><td>Tendering</td><td>".$r['tende']."</td></tr>
 
 <tr><td>Issued by</td><td>".$r['staff_name']."</td></tr>
 <tr ><td colspan='2'><button>shdj</button></td></tr>";
$counter++;
	if($counter == 3)
	{
		echo "</div><div class='row'>";
		$counter = 0;
	}

}

?></div></table></div></div></body></html>