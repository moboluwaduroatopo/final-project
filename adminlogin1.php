<?php
$connect=mysqli_connect("localhost","root","","shop_db");
if (isset($_SESSION["adminid"])) {
  //session_destroy();
header("Location: dashboard.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin registration form</title>

  <style type="text/css">
  
   
  </style>
</head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
   <script type="text/javascript" src="jquery/jquery-3.1.1.js"></script>
<script type="text/javascript" src="jquery/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
<script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
<body  class="bg-dark">

 <div id="form2" class="container" style="width: 30% ">
   <div class="card card-login mx-auto mt-5">
      <div class="card-header">ADMIN LOGIN </div>
      <div class="card-body">
<form class="form-horizontal" method="post" action="admin.php" enctype="multipart/form-data">

<fieldset>

<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">Username</label>  
  <div class="col-md-12">
  <input id="username" name="username" type="username" placeholder="username" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">Password</label>  
  <div class="col-md-12">
  <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">
    
  </div>
</div>
  <div class="contact100-form-checkbox text-white">
            Select user type:<select class="form-control" name="user_type">
                      <option value="admin" >admin</option>
            <option value="user">user</option>
 
                 </select>
        
          </div>
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-12">
    <button id="singlebutton" style="width: 100%" name="submit" class="btn btn-primary button1">log in</button>
  </div>
</div>

 <div class="text-center">
          <a class="d-block small mt-3" href="admin.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>

</fieldset>
</form>
</div>
</div>
</div>
</body>
<script type="text/javascript" src="Bootstrap4/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="Bootstrap4/js/bootstrap.js"></script>

<script type="text/javascript" src="Bootstrap4/js/popper.min.js"></script>

</html>