<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$eqID = mysqli_real_escape_string($con,$data->eqID);

$eqName = mysqli_real_escape_string($con,$data->eqName);
$empID = mysqli_real_escape_string($con,$data->empID);
$vendorID = mysqli_real_escape_string($con,$data->vendorID);
$qty = mysqli_real_escape_string($con,$data->qty);



$query= "UPDATE equipments SET eqName = '$eqName' , empID ='$empID' , vendorID ='$vendorID', qty = '$qty' WHERE 	eqID = '$eqID'";

mysqli_query($con,$query);









 ?>