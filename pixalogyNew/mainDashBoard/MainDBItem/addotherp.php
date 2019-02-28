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
$GetPrice = mysqli_real_escape_string($con,$data->GetPrice);

$SellPrice = mysqli_real_escape_string($con,$data->SellPrice);
$Qty = mysqli_real_escape_string($con,$data->Qty);
$TotalAmount = mysqli_real_escape_string($con,$data->TotalAmount);
$Profit = mysqli_real_escape_string($con,$data->Profit);


$id=uniqid('Otherp',true);

$query= "INSERT INTO `otheravip`(`ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyID`, `companyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `GetPrice`, `SellPrice`, `Qty`, `TotalAmount`, `Profit`) VALUES ('".$id."','".$ItemName."','".$ProductName."','".$BranchID."','".$BranchName."','".$CompanyID."','".$companyName."','".$manufactureDate."','".$ExDate."','".$Section."','".$AddedDate."','".$ItemType."','".$GetPrice."','".$SellPrice."','".$Qty."','".$TotalAmount."','".$Profit."')";

mysqli_query($con,$query);



$query2="DELETE FROM `otheravitem` WHERE 	ItemID='".$ItemID."' ";

mysqli_query($con,$query2);








 ?>