<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$brn = mysqli_real_escape_string($con,$data->brn);
$bna = mysqli_real_escape_string($con,$data->bna);
$emp = mysqli_real_escape_string($con,$data->emp);
$date = mysqli_real_escape_string($con,$data->date);
$ItemName = mysqli_real_escape_string($con,$data->ItemName);
$ProductName = mysqli_real_escape_string($con,$data->ProductName);
$Qty = mysqli_real_escape_string($con,$data->Qty);
$total = mysqli_real_escape_string($con,$data->total);

$id=uniqid('sell-Tem',true);

$query= "INSERT INTO `sellTem`(`SID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `qty`, `EmpName`, `Date`, `TotalPrice`) VALUES ('".$id."','".$ItemName."','".$ProductName."','".$brn."','".$bna."','".$Qty."','".$emp."','".$date."','".$total."')";

mysqli_query($con,$query);



$query1 = mysqli_query($con,"SELECT sum(TotalPrice) as sumGetAmount from selltem ");
$Date=mysqli_fetch_array($query1);
$Totalamount=$Date['sumGetAmount'];


echo $Totalamount;






 ?>