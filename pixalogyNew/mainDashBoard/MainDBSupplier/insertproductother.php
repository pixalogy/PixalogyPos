<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$productname = mysqli_real_escape_string($con,$data->productname);
$itemname = mysqli_real_escape_string($con,$data->itemname);

$otherItemPrice = mysqli_real_escape_string($con,$data->otherItemPrice);

$No = mysqli_real_escape_string($con,$data->No);

$id=uniqid('prod',true);

$query= "INSERT INTO `productAvailable`(`proAID`, `productName`, `itemName`, `sizeAvailable`, `SA-small`, `SA-s-Price`, `SA-medium`, `SA-m-price`, `SA-large`, `SA-l-price`, `unitAvailable`, `UA-small`, `UA-s-unit`, `UA-s-price`, `UA-medium`, `UA-m-unit`, `UA-m-price`, `UA-large`, `UA-l-unit`, `UA-l-price`, `price`) VALUES ('".$id."','".$productname."','".$itemname."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$otherItemPrice."')";

mysqli_query($con,$query);









 ?>