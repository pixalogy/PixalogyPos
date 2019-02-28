<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$itemname = mysqli_real_escape_string($con,$data->itemname);
$ProductName = mysqli_real_escape_string($con,$data->ProductName);
$branch = mysqli_real_escape_string($con,$data->branch);
$namebranch = mysqli_real_escape_string($con,$data->namebranch);
$company = mysqli_real_escape_string($con,$data->company);
$namecompany = mysqli_real_escape_string($con,$data->namecompany);
$manudate = mysqli_real_escape_string($con,$data->manudate);
$exdate = mysqli_real_escape_string($con,$data->exdate);
$section = mysqli_real_escape_string($con,$data->section);
$addeddatesize = mysqli_real_escape_string($con,$data->addeddatesize);
$itemtype = mysqli_real_escape_string($con,$data->itemtype);
$itemsizeselect = mysqli_real_escape_string($con,$data->itemsizeselect);

$getprice = mysqli_real_escape_string($con,$data->getprice);
$sellprice = mysqli_real_escape_string($con,$data->sellprice);
$unit = mysqli_real_escape_string($con,$data->unit);
$unitqty = mysqli_real_escape_string($con,$data->unitqty);
$puqty = mysqli_real_escape_string($con,$data->puqty);
$profit = mysqli_real_escape_string($con,$data->profit);
$amount = mysqli_real_escape_string($con,$data->amount);




$id=uniqid('sizeav',true);

$query= "INSERT INTO `sizeavitemtem`(`ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyID`, `companyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `SelectSize`, `GetPrice`, `SellPrice`, `unit`, `UnitQty`, `purchaseQty`, `Profit`,`GetAmount` ) VALUES ('".$id."','".$itemname."','".$ProductName."','".$namebranch."','".$branch."','".$namecompany ."','".$company."','".$manudate."','".$exdate."','".$section."','".$addeddatesize."','".$itemtype."','".$itemsizeselect."','".$getprice."','".$sellprice."','".$unit."','".$unitqty."','".$puqty."','".$profit."','".$amount."')";

mysqli_query($con,$query);

?>