
<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$eqID = mysqli_real_escape_string($con,$data->eqID);

$query="DELETE FROM equipments WHERE eqID='".$eqID."'";

mysqli_query($con,$query);





?>

