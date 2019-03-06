<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT `SID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `qty`, `EmpName`, `Date`, `TotalPrice` FROM `selltem` WHERE 1");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"ItemName":"'  . $rs["ItemName"] . '",';
  $outp .= '"ProductName":"'   . $rs["ProductName"]        . '",';
  $outp .= '"qty":"'   . $rs["qty"]        . '",';

  
  
  
  $outp .= '"TotalPrice":"'. $rs["TotalPrice"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>