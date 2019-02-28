
<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$departmentID = mysqli_real_escape_string($con,$data->departmentID);

$query="DELETE FROM departments WHERE departmentID='".$departmentID."' ";

mysqli_query($con,$query);





?>
