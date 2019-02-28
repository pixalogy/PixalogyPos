<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$productname = mysqli_real_escape_string($con,$data->productname);
$itemname = mysqli_real_escape_string($con,$data->itemname);
$sa = mysqli_real_escape_string($con,$data->sa);
$aas = mysqli_real_escape_string($con,$data->aas);
$smallsprice = mysqli_real_escape_string($con,$data->smallsprice);
$aam = mysqli_real_escape_string($con,$data->aam);
$mediumsprice = mysqli_real_escape_string($con,$data->mediumsprice);
$aal = mysqli_real_escape_string($con,$data->aal);
$largesprice = mysqli_real_escape_string($con,$data->largesprice);
$No = mysqli_real_escape_string($con,$data->No);

$id=uniqid('prod',true);

$query= "INSERT INTO `productAvailable`(`proAID`, `productName`, `itemName`, `sizeAvailable`, `SA-small`, `SA-s-Price`, `SA-medium`, `SA-m-price`, `SA-large`, `SA-l-price`, `unitAvailable`, `UA-small`, `UA-s-unit`, `UA-s-price`, `UA-medium`, `UA-m-unit`, `UA-m-price`, `UA-large`, `UA-l-unit`, `UA-l-price`, `price`) VALUES ('".$id."','".$productname."','".$itemname."','".$sa."','".$aas."','".$smallsprice."','".$aam."','".$mediumsprice."','".$aal."','".$largesprice."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."')";

mysqli_query($con,$query);









 ?>