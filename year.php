<?php  session_start();
$con=mysqli_connect("localhost","root","","shop_db"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
   <script type="text/javascript" src="jquery/jquery-3.1.1.js"></script>
<script type="text/javascript" src="jquery/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
<script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
</head>
<body>
	 <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">26 New Messages!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
<?php 
$con=mysqli_connect("localhost","root","","shop_db");
$sale= mysqli_query($con, "select  sum(od.sale_total) as last_1_month from sale_tb o inner join invoice_tb od on o.sales_id = od.sales_id where  o.dates >= last_day(now()) + interval 1 day - interval 1 month ");
//echo $sale_total;
 while($r=mysqli_fetch_array($sale)){

 	//echo $r['last_1_month'];
	$_SESSION['sales']=$r['last_1_month'];
	echo "<div>".$r['last_1_month']."</div>";
 };
?>
</body>
</html>