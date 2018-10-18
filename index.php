<?php 
$con=mysqli_connect("localhost","root","","shop_db");
$result = mysqli_query($con, "select * from product_tb")or die(mysqli_error($con));
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ year:'".$row["year"]."', profit:".$row["profit"].", price:".$row["price"].", sale:".$row["sale"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
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
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<style type="text/css"> 
</style>
<body>
	 <?php include 'dashboard.php'; ?>
     <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">dashboard</li>
      </ol>
				 <div class="row row-offcanvas row-offcanvas-right">
      
   <div style="margin:20px;width: 100% ">
   	<!-- <h5 style="text-align: center;">LIST OF STAFF</h5> -->
  <!-- <div class="containe" style="width:800px;"> -->
   <h2 align="center">Sale Record Chart </h2>  
   <div id="chart"></div>
 <!--  </div> -->
     <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Product Data </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Product_name</th>
                    <th>Price</th>
                    <th>quantity</th>
                    <th>year</th>
                    <th>image</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                     <th>No</th>
                    <th>Product_name</th>
                    <th>Price</th>
                    <th>quantity</th>
                    <th>year</th>
                    <th>image</th>
                  </tr>
              </tfoot>
              <tbody>
               
             

<?php
$n=0;
$view = mysqli_query($con, "select * from product_tb")or die(mysqli_error($con));
while($r=mysqli_fetch_array($view)){
	$n++;
	$id=$r['product_id'];
	$_SESSION['id']=$id;
echo "<tr><td>". $n."</td><td>".$r['product_name']."</td><td><span>#</span>".$r['price']." </td><td>".$r['quantity']." </td><td>".$r['year']."</td><td><img src='".$r['pimage']."' width=50px height =50px /></td></tr>";
}

?> </tbody>
            </table>
          </div>
        </div>
        
      </div></div></div></div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Staff Data </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Surname</th>
                    <th>Middlename</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Passport</th>
                   
                  </tr>
              </thead>
              <!-- <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Surname</th>
                    <th>Middlename</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Passport</th>
                   
                  </tr>
              </tfoot> -->
              <tbody>
               
             

<?php
$n=0;
$view = mysqli_query($con, "select * from staff_tb")or die(mysqli_error($con));
while($r=mysqli_fetch_array($view)){
  $n++;
  $id=$r['staff_id'];
  $_SESSION['id']=$id;
echo "<tr><td>". $n."</td><td>".$r['surname']."</td><td>".$r['middlename']."</td><td>".$r['lastname']."</td><td>".$r['email']."</td><td>".$r['username']."</td><td>".$r['password']."</td><td><img src='".$r['passport']."' width=50px height =50px</td></tr>";
}

?> </tbody>
            </table>
          </div>
        </div>
        
      </div></div></body>
      <script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['profit', 'price', 'sale'],
 labels:['Profit', 'price', 'Sale'],
 hideHover:'auto',
 stacked:true
});
</script>