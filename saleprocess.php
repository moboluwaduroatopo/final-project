<?php session_start();
Class product {
	public $connect;
		
		function creatConnection(){
			$this->connect=mysqli_connect("localhost","root","","shop_db");
		}
		function saveToDataBase($customer_name,$total,$tende,$chang,$payment_type,$id){
			echo $nid;
			$key = sha1(customer_name." ".rand(1000,1000000));
			$result=mysqli_query($this->connect, "INSERT INTO sale_tb(customer_name,total,tende,chang,payment_type,dates,keyd,admin_id)VALUES('$customer_name','$total','$tende','$chang','$payment_type',now(),'$key','$id')");
					
				if ($result) 
				{
					// $return = "Order saved";
					// 	include"sale.php";
					
					//echo "SAVED ";
					 header("Location:sale.php");
					$fetchID = mysqli_query($this->connect,"select sales_id from sale_tb where keyd = '$key'");
					while($fid = mysqli_fetch_array($fetchID))
					{
						//$sid = $fid['sales_id'];
						$_SESSION['id']=$fid['sales_id'];
					}
					for($i=0;$i<=10; $i++)
					{

						if(isset($_POST['sproducts'.$i])) 
                       
						{
							
							$pid = $_POST['sproducts'.$i];
                            $saleqty=$_POST['saleqty'.$i];
                            $sale_tota=$_POST['sale_tota'.$i];
                            $qt=$_POST['qt'.$i];
                            $rem_qty=$qt - $saleqty;
                          
						$result1=mysqli_query($this->connect, "INSERT INTO invoice_tb(sales_id,product_id,sale_qty,sale_total)VALUES('$_SESSION[id]','$pid','$saleqty','$sale_tota')");

                           $result1s=mysqli_query($this->connect, "update product_tb set quantity='$rem_qty' where product_id='$pid'")or die(mysql_error($this->connect));
          
						}
					}
					// echo "<script> window.open('print.php');</script>";
            	
				}
				else
				{
					echo "failed".mysqli_error($this->connect);
				}
		}
				
		
};
    $product = new product();
	$product->creatConnection();
	 $product->saveToDataBase($_POST["customer_name"],$_POST["total"],$_POST["tende"],$_POST["chang"],$_POST["payment_type"],$_POST["id"]);
		
?>
              