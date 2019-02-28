
<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$empID = mysqli_real_escape_string($con,$data->empID);

$query="DELETE FROM employees WHERE empID='".$empID."'";

mysqli_query($con,$query);





?>

