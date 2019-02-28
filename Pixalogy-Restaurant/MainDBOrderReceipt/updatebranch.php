<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");

$no = mysqli_real_escape_string($con,$data->no);
$qty = mysqli_real_escape_string($con,$data->qty);
$meal = mysqli_real_escape_string($con,$data->meal);
$Size = mysqli_real_escape_string($con,$data->Size);




$query= "UPDATE receipt SET qty = '$qty' , meal = '$meal' , Size='$Size' WHERE no = '$no'";

mysqli_query($con,$query);









 ?>