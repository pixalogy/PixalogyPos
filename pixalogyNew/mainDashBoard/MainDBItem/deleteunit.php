
<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$uId = mysqli_real_escape_string($con,$data->uId);

$query="DELETE FROM `units` WHERE 	uId='".$uId ."'";

mysqli_query($con,$query);





?>
