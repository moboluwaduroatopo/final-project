<?php session_start();
$con=mysqli_connect("localhost","root","","shop_db");
//$_SESSION['id'] = $_GET['id'];
 $_SESSION['id'];
$sale= mysqli_query($con, "select * from sale_tb join admin using (admin_id) where sales_id='$_SESSION[id]'");
$invoice = mysqli_query($con, "select * from invoice_tb join product_tb using (product_id) where sales_id = '$_SESSION[id]'");
require("fpdf/fpdf.php");
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,"Moboluwaduro Supermarket ",0,1,"C");
$pdf->Cell(190,10," Sales ",0,1,"C");
$pdf->setFont("Arial",null,12);
while($s=mysqli_fetch_array($sale)){
		// $date=$s['dates'];
		// $customer=$s['customer_name'];
		// $total=$s['total'];
		// echo $date." ".$customer." ".$total;
$pdf->Cell(50,10," ".$s["dates"],0,1);
$pdf->Cell(50,10,"Customer Name",0,0);
$pdf->Cell(50,10,": ".$s["customer_name"],0,1);
$pdf->Cell(50,10,"Receipt No",0,0);
$pdf->Cell(50,10,": ".$s["sales_id"],0,1);
$pdf->Cell(50,10,"Payment Mode",0,0);
$pdf->Cell(50,10,": ".$s["payment_type"],0,1);
while($i=mysqli_fetch_array($invoice)){
 $pdf->Cell(10,10," ".$i["sale_qty"],0,0);
 $pdf->Cell(80,10," ".$i["product_name"],0,0);
 $pdf->Cell(20,10," ".$i["price"],0,0);	
 	$pdf->Cell(20,10," ".$i["sale_total"],0,1);
 	//echo $i["sale_qty"]." ".$i["sale_total"];
}
$pdf->Cell(50,10,"Total",0,0);
$pdf->Cell(50,10,": ".$s["total"],0,1);
$pdf->Cell(50,10,"Tendering",0,0);
$pdf->Cell(50,10,": ".$s["tende"],0,1);
$pdf->Cell(50,10,"Change",0,0);
$pdf->Cell(50,10,": ".$s["chang"],0,1);
$pdf->Cell(50,10,"Issue By",0,0);
$pdf->Cell(20,10,": ".$s["surname"],0,0);
$pdf->Cell(0,10," ".$s["middlename"],0,1);
$pdf->Cell(190,10,"My Appreciation to all my tutors, my supervisors and my boss at SQI ",0,1,"C");
$pdf->Cell(190,10,"Thank you so much  ",0,1,"C");
//echo $s["total"]." ".$s["surname"];
}

$pdf->Output("PDF_INVOICE/PDF_INVOICE_".$s["sales_id"].".pdf","F");
$pdf->Output();

?>