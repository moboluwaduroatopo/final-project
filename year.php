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
<?php 
$con=mysqli_connect("localhost","root","","shop_db");
$sale= mysqli_query($con, "select  sum(od.sale_total) as this_year from sale_tb o inner join invoice_tb od on o.sales_id = od.sales_id where  o.dates >= last_day(now()) + interval 1 day - interval 1 month ");
$sale1= mysqli_query($con, "SELECT sum(od.sale_total) as a_day from sale_tb o inner join invoice_tb od on o.sales_id = od.sales_id WHERE dates >= curdate() - interval dayofweek(curdate())+1 day ");
$sale2= mysqli_query($con, "SELECT sum(od.sale_total) as this_week from sale_tb o inner join invoice_tb od on o.sales_id = od.sales_id WHERE dates >= curdate() - interval dayofweek(curdate())+6 day AND dates < curdate() - interval dayofweek(curdate())-1 day ");
$sale3= mysqli_query($con, "SELECT sum(od.sale_total) as two_day from sale_tb o inner join invoice_tb od on o.sales_id = od.sales_id WHERE dates >= curdate() - interval dayofweek(curdate())+3 day AND dates < curdate() - interval dayofweek(curdate())-1 day ");
//echo $sale_total;
 while($r=mysqli_fetch_array($sale)){

  //echo $r['last_1_month'];
  $_SESSION['sales']=$r['this_year'];
  echo "         <div class='col-xl-3 col-sm-6 mb-3'>
          <div class='card text-white bg-primary o-hidden h-100'>
            <div class='card-body'>
              <div class='card-body-icon'>
                <i class='fa fa-fw fa-comments'></i>
              </div>
              <div class='mr-5 text-centre' >This Year Sales</div>
            </div>
            <a class='card-footer text-white clearfix small z-1' href='#'>
              <span class='float-left'>#".$r['this_year']."</span>
              <span class='float-right'>
                <i class='fa fa-angle-right'></i>
              </span>
            </a>
          </div>
        </div>
      ";
 };
  while($r=mysqli_fetch_array($sale1)){

  //echo $r['last_1_month'];
  $_SESSION['sales']=$r['a_day'];
  echo "   <div class='col-xl-3 col-sm-6 mb-3'>
          <div class='card text-white bg-primary o-hidden h-100'>
            <div class='card-body'>
              <div class='card-body-icon'>
                <i class='fa fa-fw fa-comments'></i>
              </div>
              <div class='mr-5 text-centre' >A Day Sales</div>
            </div>
            <a class='card-footer text-white clearfix small z-1' href='#'>
              <span class='float-left'>#".$r['a_day']."</span>
              <span class='float-right'>
                <i class='fa fa-angle-right'></i>
              </span>
            </a>
          </div>
        </div>";
 };
 while($r=mysqli_fetch_array($sale2)){

  //echo $r['last_1_month'];
  $_SESSION['sales']=$r['this_week'];
  echo "  <div class='col-xl-3 col-sm-6 mb-3'>
          <div class='card text-white bg-primary o-hidden h-100'>
            <div class='card-body'>
              <div class='card-body-icon'>
                <i class='fa fa-fw fa-comments'></i>
              </div>
              <div class='mr-5 text-centre' >week Sales</div>
            </div>
            <a class='card-footer text-white clearfix small z-1' href='#'>
              <span class='float-left'>#".$r['this_week']."</span>
              <span class='float-right'>
                <i class='fa fa-angle-right'></i>
              </span>
            </a>
          </div>
        </div>";
 };

  while($r=mysqli_fetch_array($sale3)){

  //echo $r['last_1_month'];
  $_SESSION['sales']=$r['two_day'];
  echo "  <div class='col-xl-3 col-sm-6 mb-3'>
          <div class='card text-white bg-primary o-hidden h-100'>
            <div class='card-body'>
              <div class='card-body-icon'>
                <i class='fa fa-fw fa-comments'></i>
              </div>
              <div class='mr-5 text-centre' >2Day Sales</div>
            </div>
            <a class='card-footer text-white clearfix small z-1' href='#'>
              <span class='float-right text-danger text-centre'>#".$r['two_day']."</span>
              <span class='float-right'>
                <i class='fa fa-angle-right'></i>
              </span>
            </a>
          </div>
        </div>";
 };
?>
 </div>
</body>
</html>