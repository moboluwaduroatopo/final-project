  <!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List Of Customers</h2>

<div class="row">   

    <a href="add.php" class="btn btn-success">Create</a>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Action</th>  
      </tr>
    </thead>
    <tbody>


<?php

include 'conn.php';

$con=mysqli_connect("localhost","root","","shop_db");
//$link = con();



$limit = 4; 


    if (isset($_GET["page"] )) 
        {
        $page  = $_GET["page"]; 
        } 
    else 
       {
        $page=1; 
       };  

$record_index= ($page-1) * $limit;      






 $sql = "SELECT * FROM product_tb LIMIT $record_index, $limit";

   $retval = mysqli_query($con, $sql);
//  print_r($retval);


   if (mysqli_num_rows($retval) ) {

         while($row = mysqli_fetch_assoc($retval)) {

        echo '<tr>';

                            echo '<td>'. $row['product_name'] . '</td>';
                            echo '<td>'. $row['price'] . '</td>';
                            echo '<td>'. $row['quantity'] . '</td>';
                            echo '<td>'. $row['year'] . '</td>';
                            echo '<td>'. $row['profit'] . '</td>';
                          
     }


} 
    else {
    //echo "0 results";
}



echo "</tbody>";  
 echo "</table>";


$sql = "SELECT COUNT(*) FROM product_tb"; 
$retval1 = mysqli_query($con, $sql);  
$row = mysqli_fetch_row($retval1);  
$total_records = $row[0];
$limit = 2;
echo "<ul class='pagination'>";

    echo "<li><a href='p.php?page=".($page-1)."' class='button'>Previous</a></li>"; 
    // echo "<li><a href='p.php?page=".$i."'>".$i."</a></li>";
    echo "<li><a href='p.php?page=".($page+1)."' class='button'>NEXT</a></li>";


    echo"</ul>"; 
    //  echo $total_records;
// $total_pages = ceil($total_records / $limit);  
// //$pagLink = "<div class='pagination'>";  
// for ($i=1; $i<=$total_pages; $i++) {  

                  
// };  
//echo $pagLink . "</div>";     
    mysqli_close($con);
?>


    </div>
</div>

</body>
</html>