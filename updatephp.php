<!DOCTYPE HTML>
<html>
<title></title>
    <head>
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    </head>
    <body>

 <?php include 'dashboard.php'; ?>
   <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Update</li>
      </ol>
     <div   id="margin">
        <div class="maindiv">
            <div class="divA">

               <!--  <div class="title"><h2>Update Product</h2></div> -->
                <div class="divB">
                    <div class="div">
                        

                        <?php      
                     $con=mysqli_connect("localhost","root","","shop_db"); 
                       //  $connection = mysql_connect("localhost", "root", "");
                       // $db = mysql_select_db("shop_db", $connection);
						
						if (isset($_POST['submit'])) {
                        $id = $_POST['did'];
                        $name = $_POST['dname'];
                        $price = $_POST['dprice'];
                        $quantity=$_POST['quan'];
                        $file= ('images/'.$_FILES['file']['name']);
                        $type=$_POST['type'];
                        $query = mysqli_query($con, "update product_tb set  product_name='$name',price='$price,'quantity= $quantity',pimage='$file',type_id='$type' where product_id='$id'");
                    }
						
						
						
                        // $query = mysql_query("select * from product_tb", $connection);
                        // while ($row = mysql_fetch_array($query)) {
                        //     echo "<b><a href=\"updatephp.php?update={$row['product_id']}\">{$row['product_name']}</a></b>";
                        //     echo "<br />";
                        // }
                        ?>
                    </div>
                    <?php
                    if (isset($_GET['update'])) {
                        $update = $_GET['update'];
         $view = mysqli_query($con, "select * from product_tb where product_id = '$update'")or die(mysqli_error($con));
        while($row1=mysqli_fetch_array($view)){
                        //$query1 = mysql_query("select * from product_tb where product_id=$update", $connection);
                        //while ($row1 = mysql_fetch_array($query1)) {

                            echo "<form class=\"form\" method=\"post\"  >";
							echo "<h2>Update Product</h2>";
							echo "<hr/>";
                            echo"<input class=\"input form-control\" type=\"hidden\" name=\"did\" value=\"{$row1['product_id']}\" />";
                            echo "<br />";
                            echo "<label>" . "Name:" . "</label>" . "<br />";
                            echo"<input class=\"input form-control\" type=\"text\" name=\"dname\" value=\"{$row1['product_name']}\" />";
                            echo "<br />";
                            echo "<label>" . "Email:" . "</label>" . "<br />";
                            echo"<input class=\"input form-control\" type=\"text\" name=\"dprice\" value=\"{$row1['price']}\" />";
                            echo "<br />";
                            echo "<label>" . "Quantity:" . "</label>" . "<br />";
                            echo"<input class=\"input form-control\" type=\"text\" name=\"quan\" value=\"{$row1['quantity']}\" />";
                            echo "<br />";
                             echo "<label>" . "Quantity:" . "</label>" . "<br />";
                            echo"<input id=\"file\" class=\"input form-control\" type=\"file\" name=\"file\" value=\"{$row1['pimage']}\" />";
                            echo "<br />";
                             echo "<label>" . "Catergory:" . "</label>" . "<br />";
                             ?>
                            <?php 
   require('conn.php');

    $typ= mysqli_query($con, "select * from type" );

  ?>
  <select name="type" class="form-control">

    <?php
    while($r = mysqli_fetch_array($typ)){
      
      echo "<option value='".$r['type_id']."'>".$r['type_name']."</option>";
    }
    
    
                             echo "  </select>";
                            echo "<br />";
                            // echo "<label>" . "Address:" . "</label>" . "<br />";
                            // echo "<textarea rows=\"15\" cols=\"15\" name=\"daddress\">{$row1['employee_address']}";
                            // echo "</textarea>";
                             //echo "<br />";
                            echo "<input class=\"submit btn btn-primary\" type=\"submit\" name=\"submit\" value=\"update\" />";
                            echo "</form>";
                        }
                    }                    
                   if (isset($_POST['submit'])) {
				   echo '<div class="form" id="form3"><br><br><br><br><br><br><Span>Data Updated Successfuly......!!</span></div>';
				   }
                
                    ?>
                    
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>        
       <!--  <div class="formget"><a href=http://www.formget.com/app><img src="formget.jpg" alt="Online Form Builder"/></a>
        </div> -->
    </div>
    </div>
</div>
     </div>
    
</body>
</html>
