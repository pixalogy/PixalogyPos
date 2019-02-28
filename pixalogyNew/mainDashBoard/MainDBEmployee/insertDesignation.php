<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$Dname = mysqli_real_escape_string($con,$data->Dname);
$Dsalary = mysqli_real_escape_string($con,$data->Dsalary);


$id=uniqid('Designation',true);

$query= "INSERT INTO designation (DesignationID, Name, Salary) VALUES ('".$id."','".$Dname."','".$Dsalary."')";

mysqli_query($con,$query);



?>