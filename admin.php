<?php
session_start();
$con=mysqli_connect("localhost","root","","shop_db");

if(isset($_POST['submit'])) 
{
	$sname=$con->real_escape_string($_POST['sname']); 
	$mname=$con->real_escape_string($_POST['mname']); 
	$lname=$con->real_escape_string($_POST['lname']); 
	$email=$con->real_escape_string($_POST['email']); 
	$username=$con->real_escape_string($_POST['username']);
	$password=$con->real_escape_string($_POST['password']); 
	$ppt=$con->real_escape_string('images/'.$_FILES['ppt']['name']);
	

	$a = mysqli_query($con,"INSERT INTO admin(surname,middlename,lastname,email,username, password,passport)VALUES('$sname','$mname','$lname','$email','$username','$password','$ppt')");
	
	
	if ($a) {
		
			header("Location:adminlogin.html");
			
	}
	else
	{
		//echo "failed".mysqli_error($con);
		header("Location:admin.html");
	};
	
  
}
 
 
?>