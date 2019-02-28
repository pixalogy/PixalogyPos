<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$supID = mysqli_real_escape_string($con,$data->supID);

$query="DELETE FROM `supplier` WHERE 	supID='".$supID."'";

mysqli_query($con,$query);





?>

