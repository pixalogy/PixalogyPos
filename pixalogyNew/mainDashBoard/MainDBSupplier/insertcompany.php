<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$Companyname = mysqli_real_escape_string($con,$data->Companyname);
$Daddress = mysqli_real_escape_string($con,$data->Daddress);
$pnumber = mysqli_real_escape_string($con,$data->pnumber);

$id=uniqid('company',true);

$query= "INSERT INTO `company`(`companyID`, `companyName`, `DistributeAddress`, `Tel`) VALUES ('".$id."','".$Companyname."','".$Daddress."','".$pnumber."')";

mysqli_query($con,$query);






?>