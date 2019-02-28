<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$ItemID = mysqli_real_escape_string($con,$data->ItemID);
$ItemName = mysqli_real_escape_string($con,$data->ItemName);
$ProductName = mysqli_real_escape_string($con,$data->ProductName);
$BranchID = mysqli_real_escape_string($con,$data->BranchID);
$BranchName = mysqli_real_escape_string($con,$data->BranchName);
$CompanyID = mysqli_real_escape_string($con,$data->CompanyID);
$companyName = mysqli_real_escape_string($con,$data->companyName);
$manufactureDate = mysqli_real_escape_string($con,$data->manufactureDate);
$ExDate = mysqli_real_escape_string($con,$data->ExDate);
$Section = mysqli_real_escape_string($con,$data->Section);
$AddedDate = mysqli_real_escape_string($con,$data->AddedDate);
$ItemType = mysqli_real_escape_string($con,$data->ItemType);
$SelectSize = mysqli_real_escape_string($con,$data->SelectSize);

$GetPrice = mysqli_real_escape_string($con,$data->GetPrice);
$SellPrice = mysqli_real_escape_string($con,$data->SellPrice);
$unit = mysqli_real_escape_string($con,$data->unit);
$UnitQty = mysqli_real_escape_string($con,$data->UnitQty);
$purchaseQty = mysqli_real_escape_string($con,$data->purchaseQty);
$Profit = mysqli_real_escape_string($con,$data->Profit);
$GetAmount = mysqli_real_escape_string($con,$data->GetAmount);
$AvailableProfit = mysqli_real_escape_string($con,$data->AvailableProfit);

$id=uniqid('sizeavp',true);

$query= "INSERT INTO `sizeaviP`(`ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyID`, `companyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `SelectSize`, `GetPrice`, `SellPrice`, `unit`, `UnitQty`, `purchaseQty`, `Profit`, `GetAmount`, `AvailableProfit`) VALUES ('".$id."','".$ItemName."','".$ProductName."','".$BranchID."','".$BranchName."','".$CompanyID."','".$companyName."','".$manufactureDate."','".$ExDate."','".$Section."','".$AddedDate."','".$ItemType."','".$SelectSize."','".$GetPrice."','".$SellPrice."','".$unit."','".$UnitQty."','".$purchaseQty."','".$Profit."','".$GetAmount."','".$AvailableProfit."')";

mysqli_query($con,$query);



$query2="DELETE FROM `sizeavitemtem` WHERE 	ItemID='".$ItemID."'";

mysqli_query($con,$query2);








 ?>