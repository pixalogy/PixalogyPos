
<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$branchID = mysqli_real_escape_string($con,$data->branchID);

$query="DELETE FROM employee WHERE employeeID='".$branchID."'";

mysqli_query($con,$query);





?>

