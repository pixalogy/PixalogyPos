
<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$stockID = mysqli_real_escape_string($con,$data->stockID);

$query="DELETE FROM stocks WHERE stockID='".$stockID."'";

mysqli_query($con,$query);





?>

