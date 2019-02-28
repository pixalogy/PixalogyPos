
<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$EmployeeID = mysqli_real_escape_string($con,$data->EmployeeID);

$query="DELETE FROM employee WHERE EmployeeID='".$EmployeeID."'";

mysqli_query($con,$query);





?>

