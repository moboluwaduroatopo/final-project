
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
<style type="text/css">
	
</style>
<body>
    	 <?php include 'staffdashboard.php'; ?>
     <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Product</li>
      </ol>
        <div >
        <div class="row text-center">
					<div class="col-md-12" style="margin-top: ">
						<h4 class="font-weight-bold">Best Product</h4>
						<hr/>
					</div>
					<?php
					require("conn.php");
					$select = mysqli_query($con, "select * from type");
					while($r=mysqli_fetch_array($select)){
					echo"
					<div class='col-md-4 '>
						<div class='card'>
							<img src='".$r['image']."'>
							<div class='card-block'>
							<a href='staffviewpro.php?tid=".$r['type_id']."'><button class='btn btn-success'>View More</button></a>
							</div>
						</div>
					</div>
					";
				}
					?>
				</div>
					
				</div>
      </div><!--/row-->
  </div>			
</body>
</html>