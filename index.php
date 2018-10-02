<!DOCTYPE HTML>
<html>
<head>
<!-- <script>
window.onload = function () {

var options = {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "Monthly Sales Data"
	},
	axisX: {
		valueFormatString: "MMM"
	},
	axisY: {
		prefix: "#",
		labelFormatter: addSymbols
	},
	toolTip: {
		shared: true
	},
	legend: {
		cursor: "pointer",
		itemclick: toggleDataSeries
	},
	data: [
		{
			type: "column",
			name: "Actual Sales",
			showInLegend: true,
			xValueFormatString: "MMMM YYYY",
			yValueFormatString: "N#,##0",
			dataPoints: [
				{ x: new Date(2017, 0), y: 20000 },
				{ x: new Date(2017, 1), y: 25000 },
				{ x: new Date(2017, 2), y: 30000 },
				{ x: new Date(2017, 3), y: 70000, indexLabel: "High Renewals" },
				{ x: new Date(2017, 4), y: 40000 },
				{ x: new Date(2017, 5), y: 60000 },
				{ x: new Date(2017, 6), y: 55000 },
				{ x: new Date(2017, 7), y: 33000 },
				{ x: new Date(2017, 8), y: 45000 },
				{ x: new Date(2017, 9), y: 30000 },
				{ x: new Date(2017, 10), y: 50000 },
				{ x: new Date(2017, 11), y: 35000 }
			]
		},
		{
			type: "line",
			name: "Expected Sales",
			showInLegend: true,
			yValueFormatString: "N#,##0",
			dataPoints: [
				{ x: new Date(2017, 0), y: 32000 },
				{ x: new Date(2017, 1), y: 37000 },
				{ x: new Date(2017, 2), y: 40000 },
				{ x: new Date(2017, 3), y: 52000 },
				{ x: new Date(2017, 4), y: 45000 },
				{ x: new Date(2017, 5), y: 47000 },
				{ x: new Date(2017, 6), y: 42000 },
				{ x: new Date(2017, 7), y: 43000 },
				{ x: new Date(2017, 8), y: 41000 },
				{ x: new Date(2017, 9), y: 42000 },
				{ x: new Date(2017, 10), y: 50000 },
				{ x: new Date(2017, 11), y: 45000 }
			]
		},
		{
			type: "area",
			name: "Profit",
			markerBorderColor: "white",
			markerBorderThickness: 2,
			showInLegend: true,
			yValueFormatString: "N#,##0",
			dataPoints: [
				{ x: new Date(2017, 0), y: 4000 },
				{ x: new Date(2017, 1), y: 7000 },
				{ x: new Date(2017, 2), y: 12000 },
				{ x: new Date(2017, 3), y: 40000 },
				{ x: new Date(2017, 4), y: 20000 },
				{ x: new Date(2017, 5), y: 35000 },
				{ x: new Date(2017, 6), y: 33000 },
				{ x: new Date(2017, 7), y: 20000 },
				{ x: new Date(2017, 8), y: 25000 },
				{ x: new Date(2017, 9), y: 16000 },
				{ x: new Date(2017, 10), y: 29000 },
				{ x: new Date(2017, 11), y: 20000 }
			]
		}]
};
$("#chartContainer").CanvasJSChart(options);

function addSymbols(e) {
	var suffixes = ["", "K", "M", "B"];
	var order = Math.max(Math.floor(Math.log(e.value) / Math.log(1000)), 0);

	if (order > suffixes.length - 1)
		order = suffixes.length - 1;

	var suffix = suffixes[order];
	return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
}

function toggleDataSeries(e) {
	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else {
		e.dataSeries.visible = true;
	}
	e.chart.render();
}


}
</script> -->
</head>
<style type="text/css">
	#margin{
		background-color: #f5f5f5;
		width:80%;
         height: 500px;
        }
  
	</style>
<body>
	 <?php include 'dashboard.php'; ?>
     <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
     <div   id="margin">
     	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
						<div class="card-body">
						<h4 class="card-title">Categories</h4>
						<p class="card-text">Here you can add new  categories</p>
						<a href="addtype" class="btn btn-primary">Add</a>
						<!-- <a href="manage_categories.php" class="btn btn-primary">Manage</a> -->
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
						<div class="card-body">
						<h4 class="card-title">Staff</h4>
						<p class="card-text">Here you can add new staff</p>
						<a href="staff1.php"  class="btn btn-primary">Add</a>
						<!-- <a href="manage_brand.php" class="btn btn-primary">Manage</a> -->
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
						<div class="card-body">
						<h4 class="card-title">Products</h4>
						<p class="card-text">Here you can add new products</p>
						<a href="Addnewproduct.php" class="btn btn-primary">Add</a>
						<!-- <a href="manage_product.php" class="btn btn-primary">Manage</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div> -->
</div>
<script src="jquery/jquery-1.11.1.min.js"></script>
<script src="jquery/jquery.canvasjs.min.js"></script>
</body>
</html>