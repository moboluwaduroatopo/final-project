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
</style>
<body class=>
	<?php include 'staffdashboard.php'; ?>
	<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Best Food</li>
      </ol>
   <div style="width: 90%;height: 100px">
<div class="row text-center">
					<div class="col-md-12">
						<h4 class="font-weight-bold">Best Food</h4>
						<hr/>
					</div></div>
	
<div class="row">
<?php
$tid= $_GET['tid'];
$view = mysqli_query($con, "select * from product_tb where type_id ='$tid'")or die(mysqli_error($con));
$counter = 0;
while($r=mysqli_fetch_array($view)){


	$id=$r['product_id'];
	$_SESSION['id']=$id;
	
echo "<div class='col-md-4'><div class='card'><img src='".$r['pimage']."' width=200px height =200px /><div class='card-block'><h4>".$r['product_name']."</h4><p>".$r['price']."</p></div></div></div>";
$counter++;
	if($counter == 3)
	{
		echo "</div><div class='row'>";
		$counter = 0;
	}

}

?></div></div></div></body></html>