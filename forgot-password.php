<?php 
    error_reporting(0);
    if($_POST['submit']=='Send') {
        //keep it inside
        $email=$_POST['email'];
        $con=mysqli_connect("localhost","root","","shop_db");
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $query = mysqli_query($con,"select * from  admin where email='$email'") or die(mysqli_error($con)); 

        $numrows = $query->num_rows();                                  

        if ($numrows == 1) {  
            $code=rand(100,999);
            $message='You activation link is: http://localhost/CRGSFAS/forgot-password.php?email=$email&code=$code';
            mail($email, "Subject Goes Here", $message);
            echo 'Email sent';
        } else {
            echo 'No user exist with this email id';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Forget Password</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>Forgot your password?</h4>
          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>
        <form action="forgot-password.php" method="post">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter email address">
          </div>
           <input class="btn btn-primary btn-block" type="submit" name="submit" value="Send">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="adminregister.php">Register an Account</a>
          <a class="d-block small" href="user.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
