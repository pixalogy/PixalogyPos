<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$custID = mysqli_real_escape_string($con,$data->custID);

$custName = mysqli_real_escape_string($con,$data->custName);
$phonenumber = mysqli_real_escape_string($con,$data->phonenumber);
$address = mysqli_real_escape_string($con,$data->address);



$query= "UPDATE customers SET custName = '$custName' , phone ='$phonenumber' , address ='$address' WHERE 	custID = '$custID'";

mysqli_query($con,$query);









 ?>