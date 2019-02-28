<<?php  


$con=mysqli_connect("localhost","root","","pixalogypos");

$supde = mysqli_query($con,"SELECT  `BranchName`, `CompanyName`,  `AddedDate` FROM `otheravitem`");

$result = mysqli_fetch_array($supde);

$BranchName=$result['BranchName'];
$CompanyName=$result['CompanyName'];
$AddedDate=$result['AddedDate'];

$sup = mysqli_query($con,"SELECT `ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyId`, `CompanyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `GetPrice`, `SellPrice`, `Qty`, `TotalAmount`, `Profit`, `AvailableProfit` FROM `otheravitem` WHERE 1");


ob_start();
require('fpdf18/fpdf.php');

$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(50,6,'CompanyName',1,0);
$pdf->Cell(50,6,'Invoice',1,0);
$pdf->Cell(70,6,"$AddedDate",1,1);
$pdf->Cell(189,5,'',0,1);

$pdf->SetFont('Arial','',14);

$pdf->Cell(20,6,'Branch:',0,0);
$pdf->Cell(20,6,"$BranchName",0,1);
$pdf->Cell(189,3,'',0,1);
$pdf->Cell(30,6,'Company:',0,0);
$pdf->Cell(30,6,"$CompanyName",0,1);

$pdf->Cell(189,5,'',0,1);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(30,6,'Products:',0,1);
$pdf->Cell(189,5,'',0,1);

while ($row=mysqli_fetch_array($sup)) {

$ItemID=$row[0];
	$ItemName=$row[1];
	$ProductName=$row[2];
	$manufactureDate=$row[7];
	$ExDate=$row[8];
	$GetPrice=$row[12];
	$SellPrice=$row[13];
	$Qty=$row[14];
	$TotalAmount=$row[15];
	$Profit=$row[16];

	


	$pdf->Cell(189,11,'*..............................................................................................................................................................',0,1);
	
	$pdf->SetFont('Arial','',13);

	$pdf->Cell(30,5,'Productname:',0,0);
$pdf->Cell(30,5,"$ProductName",0,1);

$pdf->Cell(30,5,'item Name:',0,0);
$pdf->Cell(30,5,"$ItemName",0,1);

$pdf->Cell(50,5,'manufacture Date:',0,0);
$pdf->Cell(50,5,"$manufactureDate",0,1);

$pdf->Cell(50,5,'ExDate:',0,0);
$pdf->Cell(50,5,"$ExDate",0,1);

$pdf->Cell(50,5,'Get Price:',0,0);
$pdf->Cell(50,5,"RS:$GetPrice",0,1);
$pdf->Cell(50,5,'Sell Price:',0,0);
$pdf->Cell(50,5,"RS:$SellPrice",0,1);
$pdf->Cell(50,5,'QTY:',0,0);
$pdf->Cell(50,5,"$Qty",0,1);
$pdf->Cell(50,5,'Total Amount:',0,0);
$pdf->Cell(50,5,"RS:$TotalAmount",0,1);
$pdf->Cell(50,5,'Profit:',0,0);
$pdf->Cell(50,5,"RS:$Profit",0,1);






}


$query = mysqli_query($con,"SELECT sum(TotalAmount) as sumTotalAmount from otheravitem ");
$Date=mysqli_fetch_array($query);
$Totalamount=$Date['sumTotalAmount'];

$pdf->Cell(189,13,'',0,1);
$pdf->SetFont('Arial','B',18);

$pdf->Cell(50,5,'Total Amount:',0,0);
$pdf->Cell(50,5,"RS:$Totalamount",0,1);


$pdf->Cell(189,13,'',0,1);

$pdf->Cell(40,5,' Signature:',0,0);
$pdf->Cell(50,5,'...............',0,1);









$pdf->Output();
ob_end_flush();
?>