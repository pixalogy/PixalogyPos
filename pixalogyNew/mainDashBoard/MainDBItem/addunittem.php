<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$itemname = mysqli_real_escape_string($con,$data->itemname);

$ProductName = mysqli_real_escape_string($con,$data->ProductName);
$BranchID = mysqli_real_escape_string($con,$data->namebranch);
$BranchName = mysqli_real_escape_string($con,$data->branch);
$CompanyID = mysqli_real_escape_string($con,$data->namecompany);
$companyName = mysqli_real_escape_string($con,$data->company);
$manufactureDate = mysqli_real_escape_string($con,$data->manudate);
$ExDate = mysqli_real_escape_string($con,$data->exdate);
$Section = mysqli_real_escape_string($con,$data->section);
$AddedDate = mysqli_real_escape_string($con,$data->addeddatesize);
$ItemType = mysqli_real_escape_string($con,$data->itemtype);
$unitneedpart = mysqli_real_escape_string($con,$data->unitneedpart);

$unitqtyneed = mysqli_real_escape_string($con,$data->unitqtyneed);
$getunitneedprice = mysqli_real_escape_string($con,$data->getunitneedprice);
$itemtypeqty = mysqli_real_escape_string($con,$data->itemtypeqty);
$sellqtyunitneed = mysqli_real_escape_string($con,$data->sellqtyunitneed);
$sellPriceunitneed = mysqli_real_escape_string($con,$data->sellPriceunitneed);
$prounitneed = mysqli_real_escape_string($con,$data->prounitneed);


$id=uniqid('unittem',true);

$query= "INSERT INTO `unitavitem`(`ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyId`, `CompanyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `GetUnit`, `UnitQty`, `GetPrice`, `SellQtyUnit`, `Qty`, `SellPrice`, `Profit`) VALUES ('".$id."','".$itemname."','".$ProductName."','".$BranchID."','".$BranchName."','".$CompanyID."','".$companyName."','".$manufactureDate."','".$ExDate."','".$Section."','".$AddedDate."','".$ItemType."','".$unitneedpart."','".$unitqtyneed."','".$getunitneedprice."','".$itemtypeqty."','".$sellqtyunitneed."','".$sellPriceunitneed."','".$prounitneed."')";

mysqli_query($con,$query);










 ?>