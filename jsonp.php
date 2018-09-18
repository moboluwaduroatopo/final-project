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
<div class="container">
<input type="text" class="form-control" id="search" onKeyUp="searchData()" >
<table class="table table-striped" border="2">
<thead>

<tbody>
</thead>
</tbody>
</table>
</div>

<script type="text/javascript">
  function searchData(p)
{
  //alert();
  d=p;
  $.post("json.php",{high:d}, function(response){
   // alert(response);
    var bar =JSON.parse(response);
    var i;
    var hi ="";
    for(i=0; i< bar.length; i++)
    {
      hi += "<tr><td>"+bar[i].product_id+
      "</td><td>"+ bar[i].product_name+
      "</td><td>"+ bar[i].price+
      "</td><td>"+ bar[i].pimage+
      "</td></tr>"; 
    }
    $('tbody').html(hi);
  });
}
	
</script>
</body>
</html>