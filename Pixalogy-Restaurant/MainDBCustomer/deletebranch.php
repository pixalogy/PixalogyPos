
<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$custID = mysqli_real_escape_string($con,$data->custID);

$query="DELETE FROM customers WHERE custID='".$custID."'";

mysqli_query($con,$query);





?>

