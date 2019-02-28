<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$mealname = mysqli_real_escape_string($con,$data->mealname);
$price = mysqli_real_escape_string($con,$data->price);

$id=uniqid('Meal',true);

$query= "INSERT INTO meals (mealID, mealname, price) VALUES ('".$id."','".$mealname."','".$price."')";

mysqli_query($con,$query);









 ?>