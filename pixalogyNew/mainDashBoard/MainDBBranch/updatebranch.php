<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$branchID = mysqli_real_escape_string($con,$data->branchID);

$branchname = mysqli_real_escape_string($con,$data->branchname);
$location = mysqli_real_escape_string($con,$data->location);
$phonenumber = mysqli_real_escape_string($con,$data->phonenumber);
$address = mysqli_real_escape_string($con,$data->address);
$Email = mysqli_real_escape_string($con,$data->Email);
$fax = mysqli_real_escape_string($con,$data->fax);



$query= "UPDATE branchs SET branchName = '$branchname' , locations ='$location' , phone ='$phonenumber' , address ='$address', email='$Email', fax = '$fax' WHERE 	branchID = '$branchID'";

mysqli_query($con,$query);









 ?>