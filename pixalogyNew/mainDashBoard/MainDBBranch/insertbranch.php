<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$branchname = mysqli_real_escape_string($con,$data->branchname);
$location = mysqli_real_escape_string($con,$data->location);
$phonenumber = mysqli_real_escape_string($con,$data->phonenumber);
$address = mysqli_real_escape_string($con,$data->address);
$Email = mysqli_real_escape_string($con,$data->Email);
$fax = mysqli_real_escape_string($con,$data->fax);

$id=uniqid('Branch',true);

$query= "INSERT INTO branchs (branchID, branchName, locations, phone, address, email, fax) VALUES ('".$id."','".$branchname."','".$location."','".$phonenumber."','".$address."','".$Email."','".$fax."')";

mysqli_query($con,$query);









 ?>