<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$DepertmentName = mysqli_real_escape_string($con,$data->DepertmentName);

$id=uniqid('Depart',true);

$query= "INSERT INTO departments( departmentID ,  Name ) VALUES ('".$id."','".$DepertmentName."')";

mysqli_query($con,$query);






?>