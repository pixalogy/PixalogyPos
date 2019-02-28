<?php 



$con=mysqli_connect("localhost","root","","pixalogypos");

$supde = mysqli_query($con,"SELECT `supname`, `supDA`, `supPnum`, `supBranch`, `companyName` , `Tel` FROM `suptem`");


$result = mysqli_fetch_array($supde);

$supname=$result['supname'];
$supDA=$result['supDA'];
$supPnum=$result['supPnum'];
$supBranch=$result['supBranch'];
$companyName=$result['companyName'];
$Tel=$result['Tel'];



$sup = mysqli_query($con,"SELECT * FROM `suptem`");







require('fpdf17/fpdf.php');

$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(130,5,'Company Name',0,0);
$pdf->Cell(59,5,'Supplier Details',0,1);
$pdf->Cell(189,5,'',0,1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(130,5,'Supplier Name:',1,0);
$pdf->Cell(59,5,"$supname",1,1);

$pdf->Cell(130,5,'Distribute Address:',1,0);
$pdf->Cell(59,5,"$supDA",1,1);

$pdf->Cell(130,5,'Phone:',1,0);
$pdf->Cell(59,5,"$supPnum",1,1);


$pdf->Cell(130,5,'Branch:',1,0);
$pdf->Cell(59,5,"$supBranch",1,1);


$pdf->Cell(130,5,'CompanyName:',1,0);
$pdf->Cell(59,5,"$companyName",1,1);

$pdf->Cell(130,5,'CompanyTel:',1,0);
$pdf->Cell(59,5,"$Tel",1,1);

$pdf->SetFont('Arial','B',12);

$pdf->Cell(189,15,'Product Details:',0,1);

while ($row=mysqli_fetch_array($sup)) {




	$projectName=$row[11];
	$ItemName=$row[12];
	$sizeAvailable=$row[13];
	$sizeAvailable=$row[13];
	$Smallav=$row[14];
	$prices=$row[15];
	$mediumav=$row[16];
	$pricem=$row[17];
	$largeav=$row[18];
	$pricel=$row[19];
	$unitAvailable=$row[20];
	$smallua=$row[21];
	$smallu=$row[22];
	$smallup=$row[23];
	$mediumua=$row[24];
	$mediumu=$row[25];
	$mediumup=$row[26];
	$largeua=$row[27];
	$Largeu=$row[28];
	$Largeup=$row[29];

	$other=$row[30];

	



	# code...
$pdf->Cell(189,11,'*..............................................................................................................................................................',0,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(130,5,'Productname:',1,0);
$pdf->Cell(59,5,"$projectName",1,1);




$pdf->Cell(130,5,'item Name:',1,0);
$pdf->Cell(59,5,"$ItemName",1,1);

$pdf->Cell(130,5,'',0,1);



$pdf->Cell(130,5,'sizeAvailable:',0,0);
$pdf->Cell(59,5,"$sizeAvailable",0,1);

$pdf->Cell(130,5,'Small:',1,0);
$pdf->Cell(59,5,"$Smallav",1,1);

$pdf->Cell(130,5,'Price:',1,0);
$pdf->Cell(59,5,"$prices",1,1);
$pdf->Cell(130,5,'Medium:',1,0);
$pdf->Cell(59,5,"$mediumav",1,1);
$pdf->Cell(130,5,'price:',1,0);
$pdf->Cell(59,5,"$pricem",1,1);
$pdf->Cell(130,5,'Large:',1,0);
$pdf->Cell(59,5,"$largeav",1,1);

$pdf->Cell(130,5,'Price:',1,0);
$pdf->Cell(59,5,"$pricel",1,1);


$pdf->Cell(189,5,'',0,1);

$pdf->Cell(130,5,'unitAvailable:',0,0);
$pdf->Cell(59,5,"$unitAvailable",0,1);


$pdf->Cell(130,5,'Small:',1,0);
$pdf->Cell(59,5,"$smallua",1,1);
$pdf->Cell(130,5,'Unit:',1,0);
$pdf->Cell(59,5,"$smallu",1,1);
$pdf->Cell(130,5,'Price:',1,0);
$pdf->Cell(59,5,"$smallup",1,1);

$pdf->Cell(130,5,'Medium:',1,0);
$pdf->Cell(59,5,"$mediumua",1,1);
$pdf->Cell(130,5,'Unit:',1,0);
$pdf->Cell(59,5,"$mediumu",1,1);
$pdf->Cell(130,5,'Price:',1,0);
$pdf->Cell(59,5,"$mediumup",1,1);


$pdf->Cell(130,5,'large:',1,0);
$pdf->Cell(59,5,"$largeua",1,1);
$pdf->Cell(130,5,'Unit:',1,0);
$pdf->Cell(59,5,"$Largeu",1,1);
$pdf->Cell(130,5,'Price:',1,0);
$pdf->Cell(59,5,"$Largeup",1,1);




$pdf->Cell(130,5,'Other Price:',1,0);
$pdf->Cell(59,5,"$other",1,1);


$pdf->Cell(189,10,'',0,1);











}


$pdf->Output();

















 ?>