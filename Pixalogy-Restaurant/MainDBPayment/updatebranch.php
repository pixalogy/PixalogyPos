<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$branchID = mysqli_real_escape_string($con,$data->branchID);

$branchname = mysqli_real_escape_string($con,$data->branchname);
$location = mysqli_real_escape_string($con,$data->location);
$phonenumber = mysqli_real_escape_string($con,$data->phonenumber);
$address = mysqli_real_escape_string($con,$data->address);
$Email = mysqli_real_escape_string($con,$data->Email);
$manager = mysqli_real_escape_string($con,$data->manager);
$noemployee = mysqli_real_escape_string($con,$data->noemployee);



$query= "UPDATE employee SET employeeName = '$branchname' , permission ='$location' , phone ='$phonenumber' , address ='$address', email='$Email', designation = '$manager', salary = '$noemployee' WHERE 	employeeID = '$branchID'";

mysqli_query($con,$query);









 ?>