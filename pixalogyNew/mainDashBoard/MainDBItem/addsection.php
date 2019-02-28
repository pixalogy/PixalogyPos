<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$sectionname = mysqli_real_escape_string($con,$data->sectionname);

$id=uniqid('sec',true);

$query= "INSERT INTO `sections`(`id`, `sectionName`) VALUES ('".$id."','".$sectionname."')";

mysqli_query($con,$query);






?>