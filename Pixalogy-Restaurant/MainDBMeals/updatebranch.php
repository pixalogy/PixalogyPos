<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$mealID = mysqli_real_escape_string($con,$data->mealID);

$mealname = mysqli_real_escape_string($con,$data->mealname);
$price = mysqli_real_escape_string($con,$data->price);
$phonenumber = mysqli_real_escape_string($con,$data->phonenumber);
$address = mysqli_real_escape_string($con,$data->address);
$Email = mysqli_real_escape_string($con,$data->Email);
$manager = mysqli_real_escape_string($con,$data->manager);
$noemployee = mysqli_real_escape_string($con,$data->noemployee);



$query= "UPDATE meals SET mealname = '$mealname' , price ='$price' WHERE 	mealID = '$mealID'";

mysqli_query($con,$query);









 ?>