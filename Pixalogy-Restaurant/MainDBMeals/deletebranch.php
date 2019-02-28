
<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$mealID = mysqli_real_escape_string($con,$data->mealID);

$query="DELETE FROM meals WHERE mealID='".$mealID."'";

mysqli_query($con,$query);





?>

