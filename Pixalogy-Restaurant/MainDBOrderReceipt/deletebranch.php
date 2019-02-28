
<<?php 


$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$no = mysqli_real_escape_string($con,$data->no);

$query="DELETE FROM receipt WHERE no='".$no."'";

mysqli_query($con,$query);





?>

