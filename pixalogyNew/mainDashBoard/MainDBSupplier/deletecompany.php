<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$companyID = mysqli_real_escape_string($con,$data->companyID);

$query="DELETE FROM `company` WHERE 	companyID='".$companyID."'";

mysqli_query($con,$query);





?>

