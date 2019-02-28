<<?php  


$con=mysqli_connect("localhost","root","","pixalogypos");

$supde = mysqli_query($con,"SELECT  `ItemName`, `ProductName`, `BranchName`, `companyName`, `ExDate`, `Section`, `AddedDate`, `SelectSize`, `GetPrice`, `purchaseQty`, `GetAmount` FROM `sizeavitemtem`");

$result = mysqli_fetch_array($supde);

$BranchName=$result['BranchName'];
$companyName=$result['companyName'];
$AddedDate=$result['AddedDate'];

$sup = mysqli_query($con,"SELECT `ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyID`, `companyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `SelectSize`, `GetPrice`, `SellPrice`, `unit`, `UnitQty`, `purchaseQty`, `Profit`, `GetAmount`, `AvailableProfit` FROM `sizeavitemtem`");


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
$pdf->Cell(30,6,"$companyName",0,1);

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
	$SelectSize=$row[12];
	$GetPrice=$row[13];
	$SellPrice=$row[14];
	$purchaseQty=$row[17];
	$GetAmount=$row[19];

	


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

$pdf->Cell(50,5,'Size:',0,0);
$pdf->Cell(50,5,"$SelectSize",0,1);
$pdf->Cell(50,5,'Get Price:',0,0);
$pdf->Cell(50,5,"RS:$GetPrice",0,1);
$pdf->Cell(50,5,'Sell Price:',0,0);
$pdf->Cell(50,5,"RS:$SellPrice",0,1);
$pdf->Cell(50,5,'purchase Qty:',0,0);
$pdf->Cell(50,5,"$purchaseQty",0,1);
$pdf->Cell(50,5,'Get Amount:',0,0);
$pdf->Cell(50,5,"RS:$GetAmount",0,1);






}


$query = mysqli_query($con,"SELECT sum(GetAmount) as sumGetAmount from sizeavitemtem ");
$Date=mysqli_fetch_array($query);
$Totalamount=$Date['sumGetAmount'];

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