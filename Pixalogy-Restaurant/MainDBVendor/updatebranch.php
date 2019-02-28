<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$vendorReg = mysqli_real_escape_string($con,$data->vendorReg);

$vendorname = mysqli_real_escape_string($con,$data->vendorname);
$contact = mysqli_real_escape_string($con,$data->contact);
$address = mysqli_real_escape_string($con,$data->address);
$item = mysqli_real_escape_string($con,$data->item);
$no = mysqli_real_escape_string($con,$data->no);


$query= "UPDATE vendors SET vendorReg = '$vendorReg' , vendorname = '$vendorname' , contact ='$contact' , address ='$address', item='$item'WHERE 	no = '$no'";

mysqli_query($con,$query);









 ?>