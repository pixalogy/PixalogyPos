
<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$AccountID = mysqli_real_escape_string($con,$data->AccountID);

$query="DELETE FROM `systemaccount` WHERE 	AccountID='".$AccountID."'";

mysqli_query($con,$query);





?>

