<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$Supplierselect = mysqli_real_escape_string($con,$data->Supplierselect);
$comID = mysqli_real_escape_string($con,$data->comID);
$ProductID = mysqli_real_escape_string($con,$data->ProductID);

$id=uniqid('tem');


$sup = mysqli_query($con,"SELECT `supID`, `Name`, `DistributeAddress`, `phoneNumber`, `Branch` FROM `supplier` WHERE 	supID='".$Supplierselect ."'");

$result = mysqli_fetch_array($sup);


$supID=$result['supID'];
$supname=$result['Name'];
$supDA=$result['DistributeAddress'];
$supPnum=$result['phoneNumber'];
$supBranch=$result['Branch'];



$company= mysqli_query($con,"SELECT `companyID`, `companyName`, `DistributeAddress`, `Tel` FROM `company` WHERE 	companyID='".$comID."'");

$result2 = mysqli_fetch_array($company);

$comID=$result2['companyID'];
$companyName=$result2['companyName'];
$DistributeAddress=$result2['DistributeAddress'];
$Tel=$result2['Tel'];




$Product=mysqli_query($con,"SELECT `proAID`, `productName`, `itemName`, `sizeAvailable`, `SA-small`, `SA-s-Price`, `SA-medium`, `SA-m-price`, `SA-large`, `SA-l-price`, `unitAvailable`, `UA-small`, `UA-s-unit`, `UA-s-price`, `UA-medium`, `UA-m-unit`, `UA-m-price`, `UA-large`, `UA-l-unit`, `UA-l-price`, `price` FROM `productavailable` WHERE 	proAID='".$ProductID."'");


$result3 = mysqli_fetch_array($Product);

$proAID=$result3['proAID'];
$productName=$result3['productName'];
$itemName=$result3['itemName'];
$sizeAvailable=$result3['sizeAvailable'];
$smallav=$result3['SA-small'];
$priceavs=$result3['SA-s-Price'];
$mediumav=$result3['SA-medium'];
$priceavm=$result3['SA-m-price'];
$largeav=$result3['SA-large'];
$priceavl=$result3['SA-l-price'];

$unitAvailable=$result3['unitAvailable'];
$smallusa=$result3['UA-small'];
$smallus=$result3['UA-s-unit'];
$smallup=$result3['UA-s-price'];

$mediumuma=$result3['UA-medium'];
$medianus=$result3['UA-m-unit'];
$medianup=$result3['UA-m-price'];


$largeusa=$result3['UA-large'];
$largeus=$result3['UA-l-unit'];
$largeup=$result3['UA-l-price'];

$otherprice=$result3['price'];






$queryin= "INSERT INTO `suptem`(`id`,`supID`, `supname`, `supDA`, `supPnum`, `supBranch`, `comID`, `companyName`, `DistributeAddress`, `Tel`, `proAID`, `productName`, `itemName`, `sizeAvailable`, `smallav`, `priceavs`, `mediumav`, `priceavm`, `largeav`, `priceavl`, `unitAvailable`, `smallusa`, `smallus`, `smallup`, `mediumuma`, `medianus`, `medianup`, `largeusa`, `largeus`, `largeup`, `otherprice`) VALUES ('".$id."','".$supID."','".$supname."','".$supDA."','".$supPnum."','".$supBranch."','".$comID."','".$companyName."','".$DistributeAddress."','".$Tel."','".$proAID."','".$productName."','".$itemName."','".$sizeAvailable."','".$smallav."','".$priceavs."','".$mediumav."','".$priceavm."','".$largeav."','".$priceavl."','".$unitAvailable."','".$smallusa."','".$smallus."','".$smallup."','".$mediumuma."','".$medianus."','".$medianup."','".$largeusa."','".$largeus."','".$largeup."','".$otherprice."')";

mysqli_query($con,$queryin);














?>