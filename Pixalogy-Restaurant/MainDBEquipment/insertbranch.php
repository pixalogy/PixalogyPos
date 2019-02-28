<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$eqName = mysqli_real_escape_string($con,$data->eqName);
$empID = mysqli_real_escape_string($con,$data->empID);
$vendorID = mysqli_real_escape_string($con,$data->vendorID);
$qty = mysqli_real_escape_string($con,$data->qty);

$id=uniqid('eq',true);

$query= "INSERT INTO equipments (eqID, eqName, empID, vendorID, qty) VALUES ('".$id."','".$eqName."','".$empID."','".$vendorID."','".$qty."')";

mysqli_query($con,$query);









 ?>