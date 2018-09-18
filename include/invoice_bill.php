<?php
session_start();

include_once("../fpdf/fpdf.php");

if ($_GET["customer_name"]) {
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->setFont("Arial","B",16);
	$pdf->Cell(190,10,"Inventory System",0,1,"C");
	$pdf->setFont("Arial",null,12);

	$pdf->Cell(50,10,"Date",0,0);
	$pdf->Cell(50,10,": ".$_GET["date"],0,1);
	$pdf->Cell(50,10,"Customer Name",0,0);
	$pdf->Cell(50,10,": ".$_GET["customer_name"],0,1);

	$pdf->Cell(50,10,"",0,1);


	$pdf->Cell(10,10,"#",1,0,"C");
	$pdf->Cell(70,10,"Product Name",1,0,"C");
	$pdf->Cell(30,10,"Quantity",1,0,"C");
	$pdf->Cell(40,10,"Price",1,0,"C");
	$pdf->Cell(40,10,"Total (#)",1,1,"C");

	for ($i=0; $i < count($_GET["product_id"]) ; $i++) { 
		$pdf->Cell(10,10, ($i+1) ,1,0,"C");
		$pdf->Cell(70,10, $_GET["product_name"][$i],1,0,"C");
		$pdf->Cell(30,10, $_GET["qty"][$i],1,0,"C");
		$pdf->Cell(40,10, $_GET["price"][$i],1,0,"C");
		$pdf->Cell(40,10, ($_GET["qty"][$i] * $_GET["price"][$i]) ,1,1,"C");
	}

	$pdf->Cell(50,10,"",0,1);

	$pdf->Cell(50,10,"issued by",0,0);
	$pdf->Cell(50,10,": ".$_GET["staff_id"],0,1);
	$pdf->Cell(50,10,"Payment Type",0,0);
	$pdf->Cell(50,10,": ".$_GET["payment_type"],0,1);


	$pdf->Cell(180,10,"Signature",0,0,"R");

	$pdf->Output("../PDF_INVOICE/PDF_INVOICE_".$_GET["sale_id"].".pdf","F");

	$pdf->Output();	

}


?>