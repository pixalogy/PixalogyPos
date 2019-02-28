<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$empid = mysqli_real_escape_string($con,$data->empid);
$empName = mysqli_real_escape_string($con,$data->empName);
$Address = mysqli_real_escape_string($con,$data->Address);
$tel = mysqli_real_escape_string($con,$data->tel);
$designationemp = mysqli_real_escape_string($con,$data->designationemp);
$branchname = mysqli_real_escape_string($con,$data->branchname);
$branchid = mysqli_real_escape_string($con,$data->branchid);
$department = mysqli_real_escape_string($con,$data->department);
$User = mysqli_real_escape_string($con,$data->User);
$pass = mysqli_real_escape_string($con,$data->pass);
$permission = mysqli_real_escape_string($con,$data->permission);

$password=base64_encode($pass);

$id=uniqid('Acc',true);

$query= "INSERT INTO `SystemAccount`(`AccountID`, `EmployeeID`, `EmployeeName`, `Address`, `PhoneNumber`, `Designation`, `Branch`, `BranchID`, `Department`, `UserName`, `Password`, `Permissions`) VALUES ('".$id."','".$empid."','".$empName."','".$Address."','".$tel."','".$designationemp."','".$branchname."','".$branchid."','".$department."','".$User."','".$password."','".$permission."')";

mysqli_query($con,$query);

?>