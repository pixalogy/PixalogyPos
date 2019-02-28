<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$stockID = mysqli_real_escape_string($con,$data->stockID);

$stockname = mysqli_real_escape_string($con,$data->stockname);
$type = mysqli_real_escape_string($con,$data->type);
$qty = mysqli_real_escape_string($con,$data->qty);
$vendorReg = mysqli_real_escape_string($con,$data->vendorReg);
$employeeID = mysqli_real_escape_string($con,$data->employeeID);
$branchID = mysqli_real_escape_string($con,$data->branchID);
$mDate = mysqli_real_escape_string($con,$data->mDate);
$eDate = mysqli_real_escape_string($con,$data->eDate);
$uprice = mysqli_real_escape_string($con,$data->uprice);




$query= "UPDATE stocks SET stockname = '$stockname' , type ='$type' , qty ='$qty' , vendorReg ='$vendorReg', employeeID='$employeeID', branchID='$branchID', mDate = '$mDate', eDate = '$eDate', uprice = '$uprice' WHERE 	stockID = '$stockID'";

mysqli_query($con,$query);









 ?>