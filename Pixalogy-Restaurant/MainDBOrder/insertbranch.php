<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$branchname = mysqli_real_escape_string($con,$data->branchname);
$location = mysqli_real_escape_string($con,$data->location);
$phonenumber = mysqli_real_escape_string($con,$data->phonenumber);
$address = mysqli_real_escape_string($con,$data->address);
$Email = mysqli_real_escape_string($con,$data->Email);
$manager = mysqli_real_escape_string($con,$data->manager);
$noemployee = mysqli_real_escape_string($con,$data->noemployee);

$id=uniqid('Branch',true);

$query= "INSERT INTO employee (employeeID, employeeName, permission, phone, address, email, designaton,salary) VALUES ('".$id."','".$branchname."','".$location."','".$phonenumber."','".$address."','".$Email."','".$manager."','".$noemployee."')";

mysqli_query($con,$query);









 ?>