<?php
include_once("adminlogin.php");
 $staff = new Staff();
  $staff->connect();
 echo $staff->createUserAccount($_POST["sname"], $_POST["mname"],$_POST["lname"], $_POST["email"],$_POST["username"], $_POST["password"],('images/'.$_FILES['ppt']['name']));

?>
