<?php
session_start();
$connection=mysqli_connect("localhost", "root", "", "shop_db");
if(isset($_POST['Login'])){
$username=$_POST['user'];
$password=$_POST['pass'];
$user_type=$_POST['user_type'];
//$query="SELECT * FROM multiuserlogin WHERE username='".$username."' and password='".$password."' and user_type='".$user_type."'";
$query="SELECT * FROM admin Where username='$username' and password='$password'   and user_type='$user_type'";
$result = mysqli_query($connection, $query);
if($result){
while($row = mysqli_fetch_array($result)){
		$_SESSION['adminid']=$row['admin_id'];
		$_SESSION['name'] =$row['surname'];
		$_SESSION['middle']=$row['middlename'];
		$_SESSION['pass'] = $row['passport'];
echo '<script type="text/javascript">alert("you are logined successfully and you are logined as '. $row['user_type'] . '")</script>';

}
 
if($user_type=="admin"){
?>
<script type="text/javascript">
 
window.location.href = "index.php";
</script>
<?php
 
}else{
?>
<script type="text/javascript">
 
window.location.href = "userindex.php";
</script>
<?php
}
 
}else{
echo 'no result';
}
}
?>