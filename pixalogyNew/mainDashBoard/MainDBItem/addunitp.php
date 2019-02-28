<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$ItemID = mysqli_real_escape_string($con,$data->ItemID);
$ItemName = mysqli_real_escape_string($con,$data->ItemName);
$ProductName = mysqli_real_escape_string($con,$data->ProductName);
$BranchID = mysqli_real_escape_string($con,$data->BranchID);
$BranchName = mysqli_real_escape_string($con,$data->BranchName);
$CompanyId = mysqli_real_escape_string($con,$data->CompanyId);
$CompanyName = mysqli_real_escape_string($con,$data->CompanyName);
$manufactureDate = mysqli_real_escape_string($con,$data->manufactureDate);
$ExDate = mysqli_real_escape_string($con,$data->ExDate);
$Section = mysqli_real_escape_string($con,$data->Section);
$AddedDate = mysqli_real_escape_string($con,$data->AddedDate);
$ItemType = mysqli_real_escape_string($con,$data->ItemType);
$GetUnit = mysqli_real_escape_string($con,$data->GetUnit);

$UnitQty = mysqli_real_escape_string($con,$data->UnitQty);
$GetPrice = mysqli_real_escape_string($con,$data->GetPrice);
$SellQtyUnit = mysqli_real_escape_string($con,$data->SellQtyUnit);
$Qty = mysqli_real_escape_string($con,$data->Qty);
$SellPrice = mysqli_real_escape_string($con,$data->SellPrice);
$Profit = mysqli_real_escape_string($con,$data->Profit);


$id=uniqid('unitp',true);

$query= "INSERT INTO `unitavip`(`ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyID`, `CompanyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `GetUnit`, `UnitQty`, `GetPrice`, `SellQtyUnit`, `Qty`, `SellPrice`, `Profit`) VALUES ('".$id."','".$ItemName."','".$ProductName."','".$BranchID."','".$BranchName."','".$CompanyId."','".$CompanyName."','".$manufactureDate."','".$ExDate."','".$Section."','".$AddedDate."','".$ItemType."','".$GetUnit."','".$UnitQty."','".$GetPrice."','".$SellQtyUnit."','".$Qty."','".$SellPrice."','".$Profit."')";

mysqli_query($con,$query);


$query2="DELETE FROM `unitavitem` WHERE 	ItemID='".$ItemID."'";

mysqli_query($con,$query2);










 ?>