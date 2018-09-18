<?php $con=mysqli_connect("localhost","root","","shop_db");?>
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
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.css">
<script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
<body>
  product:<select name="productID" id="products"><option value="0">-product name-</option>
  	<?php
  	 $good =mysql_query($con,"SELECT * FROM product_tb WHERE  ");
  	 while ($data =mysql_fetch_array($good)) {
  	  	# code...
  	   ?><option value="<?php echo $data['productID'];?>" data-price="<?php echo $data['unitPrice'];?>"><?php echo $data['product_name'];?></option>
   <?php } ?>
  	</select>
  	<br>
  	<input type="text" name="price" id="priceInput" disabled="disabled"><br>
  	<script type="text/javascript">
  		$(function(){
  			$('#products').change(function()
  			{
  				$('#priceInput').val($('#products option:selected').attr('data-price'));
  			});
  		});
  	</script>
</body>
</html>
