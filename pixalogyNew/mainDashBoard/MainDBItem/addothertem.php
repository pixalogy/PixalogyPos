<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$itemname = mysqli_real_escape_string($con,$data->itemname);
$ProductName = mysqli_real_escape_string($con,$data->ProductName);
$BranchID = mysqli_real_escape_string($con,$data->namebranch);
$BranchName = mysqli_real_escape_string($con,$data->branch);
$CompanyId = mysqli_real_escape_string($con,$data->namecompany);
$CompanyName = mysqli_real_escape_string($con,$data->company);
$manufactureDate = mysqli_real_escape_string($con,$data->manudate);
$ExDate = mysqli_real_escape_string($con,$data->exdate);
$Section = mysqli_real_escape_string($con,$data->section);
$AddedDate = mysqli_real_escape_string($con,$data->addeddatesize);
$ItemType = mysqli_real_escape_string($con,$data->itemtype);


$getPriceother = mysqli_real_escape_string($con,$data->getPriceother);
$sellPriceother = mysqli_real_escape_string($con,$data->sellPriceother);
$qtyother = mysqli_real_escape_string($con,$data->qtyother);
$totamountother = mysqli_real_escape_string($con,$data->totamountother);
$otherprocal = mysqli_real_escape_string($con,$data->otherprocal);



$id=uniqid('othertem',true);

$query= "INSERT INTO `otheravitem`(`ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyId`, `CompanyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `GetPrice`, `SellPrice`, `Qty`, `TotalAmount`, `Profit`) VALUES ('".$id."','".$itemname."','".$ProductName."','".$BranchID."','".$BranchName."','".$CompanyId."','".$CompanyName."','".$manufactureDate."','".$ExDate."','".$Section."','".$AddedDate."','".$ItemType."','".$getPriceother."','".$sellPriceother."','".$qtyother."','".$totamountother."','".$otherprocal."')";

mysqli_query($con,$query);











 ?>