<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$DesignationID = mysqli_real_escape_string($con,$data->DesignationID);

$query="DELETE FROM `designation` WHERE DesignationID='".$DesignationID."'";

mysqli_query($con,$query);





?>

