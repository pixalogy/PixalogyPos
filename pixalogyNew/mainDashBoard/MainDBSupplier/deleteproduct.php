<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$proAID = mysqli_real_escape_string($con,$data->proAID);

$query="DELETE FROM `productAvailable` WHERE 	proAID='".$proAID."'";

mysqli_query($con,$query);





?>

