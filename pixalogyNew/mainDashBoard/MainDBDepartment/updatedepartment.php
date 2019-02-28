<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$DepartmentId = mysqli_real_escape_string($con,$data->DepartmentId);

$DepertmentName = mysqli_real_escape_string($con,$data->DepertmentName);



$query= "UPDATE departments SET Name='$DepertmentName' WHERE departmentID='$DepartmentId'";

mysqli_query($con,$query);
?>