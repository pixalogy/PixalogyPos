<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$stockname = mysqli_real_escape_string($con,$data->stockname);
$type = mysqli_real_escape_string($con,$data->type);
$qty = mysqli_real_escape_string($con,$data->qty);
$vendorReg = mysqli_real_escape_string($con,$data->vendorReg);
$employeeID = mysqli_real_escape_string($con,$data->employeeID);
$branchID = mysqli_real_escape_string($con,$data->branchID);
$mDate = mysqli_real_escape_string($con,$data->mDate);
$eDate = mysqli_real_escape_string($con,$data->eDate);
$uprice = mysqli_real_escape_string($con,$data->uprice);

$id=uniqid('Stock',true);

$query= "INSERT INTO stocks (stockID, stockname, type, qty, vendorReg, employeeID, branchID,mDate,eDate,uprice) VALUES ('".$id."','".$stockname."','".$type."','".$qty."','".$vendorReg."','".$employeeID."','".$branchID."','".$mDate."','".$eDate."','".$uprice."')";

mysqli_query($con,$query);









 ?>