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
<body>
	 <?php include 'dashboard.php'; ?>
     <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Staff List</li>
      </ol>
				 <div class="row row-offcanvas row-offcanvas-right">
      
   <div style="margin:20px;width: 100% ">
   	<!-- <h5 style="text-align: center;">LIST OF STAFF</h5> -->
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
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Surname</th>
                    <th>Middlename</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Passport</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
              </tfoot>
              <tbody>
               
             

<?php
$n=0;
$view = mysqli_query($con, "select * from admin where user_type='user' ")or die(mysqli_error($con));
while($r=mysqli_fetch_array($view)){
	$n++;
	$id=$r['admin_id'];
	$_SESSION['id']=$id;
echo "<tr><td>". $n."</td><td>".$r['surname']."</td><td>".$r['middlename']."</td><td>".$r['lastname']."</td><td>".$r['email']."</td><td>".$r['username']."</td><td>".$r['password']."</td><td><img src='".$r['passport']."' width=50px height =50px</td><td><a href='edit.php?id=".$id."'><button class='btn btn-success'>Edit</button></a></td>
<td><a href='deletestaff.php?id=".$id."'><button class='btn btn-success'>Delete</button></a></td></tr>";
}

?> </tbody>
            </table>
          </div>
        </div >
      
      </div></div></div></div></div></body>