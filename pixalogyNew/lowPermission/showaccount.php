<?php



$data = json_decode(file_get_contents("php://input"));


$conn = new mysqli("localhost", "root", "", "pixalogypos");
$a = mysqli_real_escape_string($conn,$data->a);
$out=array();


$price = mysqli_query($conn,"SELECT `AccountID`, `EmployeeID`, `EmployeeName`, `Address`, `PhoneNumber`, `Designation`, `Branch`, `BranchID`, `Department`, `UserName`, `Password`, `Permissions` FROM `systemaccount` WHERE 	AccountID='".$a."' ");

$result = mysqli_fetch_array($price);
$out['name']=$result['EmployeeName'];
$out['Designation']=$result['Designation'];
$out['Branch']=$result['Branch'];
$out['BranchID']=$result['BranchID'];
$out['Department']=$result['Department'];

echo json_encode($out);

?>