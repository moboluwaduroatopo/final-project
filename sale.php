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
<style type="text/css">
   
    #margin{
    background-color: #f5f5f5;
    
  
</style>
<script type="text/javascript">


  
     $(document).ready(function()
     {
    var pp="";
    var x = '';
           $.post('Fetch.php',{x:x},function(data){
            var prods = JSON.parse(data);
          //alert(data);
           //we are here creating an option out of pp
         for( i=0; i < prods.length; i++)
           // for(i=0;i<6;i++)
          //text += cars[i] + "<br>";
            {
              pp += "<option>"+prods[i].product_name+"</option>";
              pro = prods[i].price;
             }

              // p = prods[i].price;
              //  alert(p);
              //  $('#p1').val(p);
                
            });
     $("#add").on("click",function()
      {
        
        var x="<tr><td class=''> <select class='form-control put'><option>Select Product name</option>"+pp+"</select></td><td><input  placeholder='' id='p1' class='form-control p1' value='"+pro+"' onkeyup ='myfirst();'></td><td class='number'><input id='q1'  placeholder=''  class='form-control q1' onkeyup ='myfirst();' ></td><td><input placeholder='' id='t1' class='form-control t1'></td><td><button class='btn btn-danger' class='del' id='del'>-</button></td></tr>";
        $("table").append(x);
        //alert();
      });
        $(document).on("click","#del",function()
      {
        $(this).closest('tr').remove();
      });
   
     }); 

</script>
<body>
  <?php include 'dashboard.php'; ?>
     <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Sales</li>
      </ol>
   <div id="margin">

      <legend style="color:#FF5500; text-align: center;">Sales</legend>
       <input type="text" name="" placeholder="Enter customer's name" class="form-control" style="width: 50%">
    <table border="1" style="width:100%" class="table" id="salestable">
     <tr >
      <th>product Name</th>
     <th>price</th>
      <th>Qty</th>
     <th>Total</th>
     <th> <button class="btn btn-success"" id="add" >+</button></th>
     </tr>
     </table>
    <datalist id='products'></datalist>
 
       <div id="td" colspan="5" style="color: red;text-align: right; " >Total:<input type="" id="Total" name="">
      </div>
     
      <div>
   <div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">.......................................................</label>  
  <div class="col-md-6">
  <p>customer's signture</p>
  </div>
</div>
<div class="form-group" style="margin-top: -70px; margin-left: 300px">
  <label class="col-md-6 control-label" for="textinput" id="color">.......................................................</label>  
  <div class="col-md-6">
  <p id="i">Attendent's signture signture</p>
  </div>
</div>
<button onclick="printsales()" class="fa fa-print btn btn-success" >Print</button>

<p style="text-align: right;">
     <a href="Addnewproduct.php" class="" style="">Add New Product</a>
    </p> 
    </div>
    </div>
   </div>
</div>

</body>
<script type="text/javascript">
  // function myfirst() {
 //        var p=document.getElementById('p1').value;
 //        var q=document.getElementById('q1').value ;
 //        var Total=document.getElementById('t1');
 //        Total.value= q * p ;
 //         var t = parseInt(q) * parseInt(p);

    
 
        $('#salestable').on('input', '#q1',function(){
          var overallTotal=0;
          var pricevalue =$(this).val();
          var quantity= $(this).closest('tr').find('#p1').val();
          //alert(quantity);
          var product = pricevalue*quantity;
          $(this).closest('tr').find('#t1').val(product);
          $('#salestable #t1').each(function(){
            var currentotal=$(this).val();
            if(currentotal==""){currentotal=0;}
            overallTotal+=parseFloat(currentotal);
            if (isNaN(overallTotal)) {
              overallTotal=""+n;
            }
             })
              $('#Total').val(overallTotal);
        });
    
      
    function printsales(){
        window.print();
    };
     
        $('#salestable').on('input', '.first' ,function(){
          var x = $(this).val();
        // alert(x); 
          $.post('Fetch.php',{x:x},function(data){
            alert(data);
        d = JSON.parse(data);
         //alert(d.product_name);
            document.getElementById('products').innerHTML = "<option value="+d[2].product_name+">";
            p = d[2].price;
            $('#p1').val(p);
            //$(this).closest('tr').find('#p1').val("88");
           
          });
        });

</script>
</html>