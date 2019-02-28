<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$branchname = mysqli_real_escape_string($con,$data->branchname);
$location = mysqli_real_escape_string($con,$data->location);
$phonenumber = mysqli_real_escape_string($con,$data->phonenumber);
$address = mysqli_real_escape_string($con,$data->address);
$Email = mysqli_real_escape_string($con,$data->Email);
$noemployee = mysqli_real_escape_string($con,$data->noemployee);
$manager = mysqli_real_escape_string($con,$data->manager);

$id=uniqid('bID',true);

$query= "INSERT INTO branchs (branchID, branchName, locations, phone, address, email,noemployee, manager) VALUES ('".$id."','".$branchname."','".$location."','".$phonenumber."','".$address."','".$Email."','".$noemployee."','".$manager."')";

mysqli_query($con,$query);









 ?>