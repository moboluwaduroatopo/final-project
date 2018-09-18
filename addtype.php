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
        <li class="breadcrumb-item active">Add Categories</li>
      </ol>
     <div   id="margin">
     	<form class="form-horizontal" method="post" action="typeprocess.php" enctype="multipart/form-data">

<fieldset>

<!-- Form Name -->
<legend style="color:#FF5500; text-align: center;">Add New Categories</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">New Categories</label>  
  <div class="col-md-12">    
  <input id="Nproduct" name="type_name" type="New product" placeholder="New categories" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">product file</label>  
  <div class="col-md-12">
  <input id="file" name="image" type="file" placeholder="choose product file" class="form-control input-md" accept="image/* " required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-12" >
    <button style="width: 100%" id="singlebutton"  name="submit" class="btn btn-primary button1">save</button>
  </div>
</div>
   
</fieldset>
</form>

</div>
</div>
</div>
</body>
</html>