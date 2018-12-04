<?php 
session_start();
$con=mysqli_connect("localhost","root","","shop_db");
echo $_SESSION['id'];
$view = mysqli_query($con, "select * from admin where admin_id = '$_SESSION[id]'")or die(mysqli_error($con));
while($r=mysqli_fetch_array($view)){
?>
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
<body class="bg-dark">

  <div id="form2" class="container" style="width: 50% ">
   <div class="card card-login mx-auto mt-5">
      <div class="card-header">ADMIN LOGIN </div>
      <div class="card-body">
<form class="form-horizontal" method="post" action="edit1.php" enctype="multipart/form-data">

<fieldset>

<!-- Form Name -->
<legend >STAFF REGISTRATION FORM</legend>
<input type="text" value= <?php echo $r['admin_id'] ?> name="id" hidden>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput"  id="color">surname</label>  
  <div class="col-md-6">
  <input id="textinput" name="sname" type="text" value= <?php echo $r['surname'] ?> class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">middlename</label>  
  <div class="col-md-6">
  <input id="middlename" name="mname" type="text" value= <?php echo $r['middlename'] ?> class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">lastname</label>  
  <div class="col-md-6">
  <input id="lastnmae" name="lname" type="text" value= <?php echo $r['lastname'] ?> class="form-control input-md" >
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">email</label>  
  <div class="col-md-6">
  <input id="email" name="email" type="email" value= <?php echo $r['email'] ?> class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">username</label>  
  <div class="col-md-6">
  <input id="username" name="username" type="username" value= <?php echo $r['username'] ?> class="form-control input-md" >
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">Password</label>  
  <div class="col-md-6">
  <input id="password" name="password" type="password" value= <?php echo $r['password'] ?> class="form-control input-md" >
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">Passport</label>  
  <div class="col-md-6">
  <input id="passport" name="ppt" type="file" value= <?php echo $r['passport'] ?> class="form-control input-md" accept="image " required="">
  </div>
</div>
<input style="width: 50%" type="submit" name="sub " value="Save" class="btn btn-info">
</fieldset>
</form>
</div>
</div>
</body>
</html>
<?php
};
?>