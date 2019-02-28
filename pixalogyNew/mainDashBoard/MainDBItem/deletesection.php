
<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$id = mysqli_real_escape_string($con,$data->id);

$query="DELETE FROM `sections` WHERE 	id='".$id."' ";

mysqli_query($con,$query);





?>
