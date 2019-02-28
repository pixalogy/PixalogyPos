
<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$ItemID = mysqli_real_escape_string($con,$data->ItemID);

$query="DELETE FROM `otheravitem` WHERE 	ItemID='".$ItemID."'";

mysqli_query($con,$query);





?>
