<?php

$con=mysqli_connect("localhost","root","","shop_db");
$sale= mysqli_query($con, "select * from sale_tb join staff_tb using (staff_id) where sales_id='6'");
$invoice = mysqli_query($con, "select * from invoice_tb join product_tb using (product_id) where sales_id = '6'");
require("fpdf/fpdf.php");
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,"Inventory System",0,1,"C");
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
 $pdf->Cell(20,10," ".$i["price"],0,1);	
 // $pdf->Cell(20,10," ".$i["sale_total"],0,1);	
}
$pdf->Cell(50,10,"Total",0,0);
$pdf->Cell(50,10,": ".$s["total"],0,1);
$pdf->Cell(50,10,"Tendering",0,0);
$pdf->Cell(50,10,": ".$s["tende"],0,1);
$pdf->Cell(50,10,"Issue By",0,0);
$pdf->Cell(50,10,": ".$s["surname"],0,1);
}
$pdf->Output();

?>