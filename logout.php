<?php
$connect=mysqli_connect("localhost","root","","shop_db");
if (isset($_SESSION["adminid"])) {
	session_destroy();

}
header("Location: adminlogin.html");
?>