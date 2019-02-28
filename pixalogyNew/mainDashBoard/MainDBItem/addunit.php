<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$unitname = mysqli_real_escape_string($con,$data->unitname);

$id=uniqid('unit',true);

$query= "INSERT INTO `units`(`uId`, `unit`) VALUES ('".$id."','".$unitname."')";

mysqli_query($con,$query);






?>