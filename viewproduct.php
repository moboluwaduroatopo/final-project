
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
<body class=>
	<?php include 'dashboard.php'; ?>
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
   	<?php

$con=mysqli_connect("localhost","root","","shop_db");
$tid= $_GET['tid'];
$view1 = mysqli_query($con, "select * from type  where type_id ='$tid'")or die(mysqli_error($con));
//$counter = 0;
while($r=mysqli_fetch_array($view1)){
	echo"<div class='row text-center'>
					<div class='col-md-12'>
						<h4 class='font-weight-bold'>".$r['type_name']."</h4>
						<hr/>
					</div></div>";
};
?>

	
<div class="row">
<?php
$tid= $_GET['tid'];
$view = mysqli_query($con, "select * from product_tb  where type_id ='$tid'")or die(mysqli_error($con));
$counter = 0;
while($r=mysqli_fetch_array($view)){


	$id=$r['product_id'];
	$_SESSION['id']=$id;
	
echo "<div class='col-md-4'>
<div class='card'>
<img src='".$r['pimage']."' width=200px height =200px />
<div class='card-block'>
<h4 id='it'>".$r['product_name']."</h4>
<p id='it'><span>#</span>".$r['price']." </p>
<p id='it'><span><a  class='' href='updateproduct.php?id=".$id."'><button class='btn btn-success'>Edit</button></a></span>
<span><a href='deletefresh.php?id=".$id."'><button class='btn btn-success'>Delete</button></a></span></p>
</div>
</div>
</div>";
$counter++;
	if($counter == 3)
	{
		echo "</div><div class='row'>";
		$counter = 0;
	}

}

?></div></div></div></body></html>
