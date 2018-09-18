
<!DOCTYPE html>
<html>
<head>
	<title>Staff registration form</title>
	<style type="text/css">
  
  </style>
</head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
   <script type="text/javascript" src="jquery/jquery-3.1.1.js"></script>
<script type="text/javascript" src="jquery/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
<script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
<body class="bg-dark">
   <div id="form2" class="container" style="width: 50% ">
   <div class="card card-login mx-auto mt-5">
      <div class="card-header">ADMIN REGISTER FORM </div>
      <div class="card-body">
      
<form class="form-horizontal" method="post" action="admin.php" enctype="multipart/form-data">
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
<div class="form-group">
   <label for="exampleInputEmail1">Username</label>
  <input id="username" name="username" type="username" placeholder="username" class="form-control input-md" required="">
</div>
<div class="form-group"> 
   <label for="exampleInputEmail1">Password</label>
  <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">
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
          <a class="d-block small mt-3" href="adminlogin1.php">login</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>

</fieldset>
</form>
</div>
</body>
</html>