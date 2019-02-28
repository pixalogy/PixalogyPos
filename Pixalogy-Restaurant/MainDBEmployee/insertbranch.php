<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$empName = mysqli_real_escape_string($con,$data->empName);
$phonenumber = mysqli_real_escape_string($con,$data->phonenumber);
$address = mysqli_real_escape_string($con,$data->address);
$Email = mysqli_real_escape_string($con,$data->Email);
$salary = mysqli_real_escape_string($con,$data->salary);
$designation = mysqli_real_escape_string($con,$data->designation);
$permission = mysqli_real_escape_string($con,$data->permission);

$id=uniqid('eID',true);

$query= "INSERT INTO employees (empID, empName, salary, phone, address, email,designation, permission) VALUES ('".$id."','".$empName."','".$salary."','".$phonenumber."','".$address."','".$Email."','".$designation."','".$permission."')";

mysqli_query($con,$query);









 ?>