<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$productname = mysqli_real_escape_string($con,$data->productname);
$itemname = mysqli_real_escape_string($con,$data->itemname);
$sa = mysqli_real_escape_string($con,$data->sa);
$ua = mysqli_real_escape_string($con,$data->ua);
$usa = mysqli_real_escape_string($con,$data->usa);
$unitsmall2 = mysqli_real_escape_string($con,$data->unitsmall2);
$smalluprice = mysqli_real_escape_string($con,$data->smalluprice);
$uma = mysqli_real_escape_string($con,$data->uma);
$unitmedium2 = mysqli_real_escape_string($con,$data->unitmedium2);
$mediumuprice = mysqli_real_escape_string($con,$data->mediumuprice);
$ula = mysqli_real_escape_string($con,$data->ula);
$unitlarge2 = mysqli_real_escape_string($con,$data->unitlarge2);
$largeuprice = mysqli_real_escape_string($con,$data->largeuprice);

$No = mysqli_real_escape_string($con,$data->No);

$id=uniqid('prod',true);

$query= "INSERT INTO `productAvailable`(`proAID`, `productName`, `itemName`, `sizeAvailable`, `SA-small`, `SA-s-Price`, `SA-medium`, `SA-m-price`, `SA-large`, `SA-l-price`, `unitAvailable`, `UA-small`, `UA-s-unit`, `UA-s-price`, `UA-medium`, `UA-m-unit`, `UA-m-price`, `UA-large`, `UA-l-unit`, `UA-l-price`, `price`) VALUES ('".$id."','".$productname."','".$itemname."','".$sa."','".$No."','".$No."','".$No."','".$No."','".$No."','".$No."','".$ua."','".$usa."','".$unitsmall2."','".$smalluprice."','".$uma."','".$unitmedium2."','".$mediumuprice."','".$ula."','".$unitlarge2."','".$largeuprice."','".$No."')";

mysqli_query($con,$query);









 ?>