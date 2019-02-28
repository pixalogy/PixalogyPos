<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT `AccountID`, `EmployeeID`, `EmployeeName`, `Address`, `PhoneNumber`, `Designation`, `Branch`, `BranchID`, `Department`, `UserName`, `Password`, `Permissions` FROM `systemaccount` ");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"AccountID":"'  . $rs["AccountID"] . '",';
  $outp .= '"EmployeeID":"'   . $rs["EmployeeID"]        . '",';
  $outp .= '"EmployeeName":"'   . $rs["EmployeeName"]        . '",';
   $outp .= '"UserName":"'   . $rs["UserName"]        . '",';
    $outp .= '"Password":"'   . $rs["Password"]        . '",';
  
  $outp .= '"Permissions":"'. $rs["Permissions"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>