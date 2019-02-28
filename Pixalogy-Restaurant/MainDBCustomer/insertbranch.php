<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$custName = mysqli_real_escape_string($con,$data->custName);
$phonenumber = mysqli_real_escape_string($con,$data->phonenumber);
$address = mysqli_real_escape_string($con,$data->address);

$id=uniqid('cID',true);

$query= "INSERT INTO customers (custID, custName, phone, address) VALUES ('".$id."','".$custName."','".$phonenumber."','".$address."')";

mysqli_query($con,$query);









 ?>