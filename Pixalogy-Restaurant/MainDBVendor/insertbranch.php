<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$vendorname = mysqli_real_escape_string($con,$data->vendorname);
$contact = mysqli_real_escape_string($con,$data->contact);
$address = mysqli_real_escape_string($con,$data->address);
$item = mysqli_real_escape_string($con,$data->item);

$id= mysqli_real_escape_string($con,$data->vendorReg);

$query= "INSERT INTO vendors (vendorReg, vendorname, contact, address, item) VALUES ('".$id."','".$vendorname."','".$contact."','".$address."','".$item."')";

mysqli_query($con,$query);









 ?>