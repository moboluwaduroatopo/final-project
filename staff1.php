
<!DOCTYPE html>
<html>
<head>
	<title>Staff registration form</title>
	<style type="text/css">
  	#color{
  		color: red
  	}
   
  </style>

</head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
   <script type="text/javascript" src="jquery/jquery-3.1.1.js"></script>
<script type="text/javascript" src="jquery/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
<script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
<body >
 <?php include 'dashboard.php'; ?>
     <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Register Staff</li>
      </ol>
      <!-- Icon Cards-->
      
 <div id="form2"  style=" background-color: #f5f5f5;width: 80%;height: 800px; ">
  <legend style="text-align: center;">USER REGISTER FORM</legend>
<form class="form-horizontal" method="post" action="staff.php" enctype="multipart/form-data">

<fieldset>
<span style="color: white;margin-left: 150px;background-color: red;width: 30%;height: 50px"><?php if(isset($return)){ echo $return;} ?></span>
<div class="form-group">
    <div class="form-row">
   <div class="col-md-6">
 <label for="exampleInputEmail1">Surname</label>
  <input id="textinput" name="sname" type="text" placeholder="surname" class="form-control input-md" required="">
    </div>
 <div class="col-md-6">
   <label for="exampleInputEmail1">Middlename</label>
  <input id="middlename" name="mname" type="text" placeholder="middlename" class="form-control input-md" required="">
    </div> 
  </div>
</div>
    <div class="form-group">
  <label for="exampleInputLastName">Last name</label>
  <input id="lastnmae" name="lname" type="text" placeholder="lastname" class="form-control input-md" required="">
</div>
<div class="form-group">
     <label for="exampleInputEmail1">Email address</label>
  <input id="email" name="email" type="email" placeholder="email" class="form-control input-md" required="">
</div>
<!-- //<?php 

//echo $msg?> -->
<div class="form-group">
   <label for="exampleInputEmail1">Username</label>
  <input id="username" name="username" type="username" placeholder="username" class="form-control input-md" required="">
</div>
<div class="form-group"> 
   <label for="exampleInputEmail1">Password</label>
  <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">
</div>
<div class="form-group"> 
   <label for="exampleInputEmail1">Password</label>
 <select name="usertype" class="form-control">
   <option>
     Admin
   </option>
     <option>
     User
   </option>
 </select>
</div>
<div class="form-group"> 
  <div class="col-md-12">
  <input id="passport" name="ppt" type="file" placeholder="" class="form-control input-md" accept="image/* " required="">
  </div>
</div>

<div class="form-group">
  <div class="col-md-12" >
    <button id="singlebutton" style="width: 100%" name="submit" class="btn btn-primary button1">Register</button>
  </div>
</div>
 <div class="text-center">
          <a class="d-block small mt-3" href="user.php">login</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>

</fieldset>
</form>
</div>
</div>
</div>
</body>
</html>