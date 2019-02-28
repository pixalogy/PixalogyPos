<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$qty = mysqli_real_escape_string($con,$data->qty);
$Size = mysqli_real_escape_string($con,$data->Size);
$meal = mysqli_real_escape_string($con,$data->meal);


$query= "INSERT INTO order (qty, meal, Size) VALUES ('".$qty."','".$meal."','".$Size."')";

mysqli_query($con,$query);









 ?>