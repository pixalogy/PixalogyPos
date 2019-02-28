<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$supliername = mysqli_real_escape_string($con,$data->supliername);
$Daddress = mysqli_real_escape_string($con,$data->Daddress);
$pnumber = mysqli_real_escape_string($con,$data->pnumber);
$Supplierb = mysqli_real_escape_string($con,$data->Supplierb);


$id=uniqid('Sup',true);

$query= "INSERT INTO `supplier`(`supID`, `Name`, `DistributeAddress`, `phoneNumber`, `Branch`) VALUES ('".$id."','".$supliername."','".$Daddress."','".$pnumber."','".$Supplierb."')";

mysqli_query($con,$query);



?>