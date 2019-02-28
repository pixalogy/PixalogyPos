<<?php 

$con=mysqli_connect("localhost","root","","pixalogypos");
$data = json_decode(file_get_contents("php://input"));

$in = mysqli_real_escape_string($con,$data->id);

$query="DELETE FROM suptem WHERE 		id ='".$in."'";

mysqli_query($con,$query);





?>

