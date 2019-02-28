<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT stockID, stockname, type, qty, vendorReg, employeeID, branchID, mDate, eDate, uprice FROM stocks");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"stockID":"'  . $rs["stockID"] . '",';
  $outp .= '"stockname":"'   . $rs["stockname"]        . '",';
  $outp .= '"type":"'   . $rs["type"]        . '",';
  $outp .= '"qty":"'   . $rs["qty"]        . '",';
  $outp .= '"vendorReg":"'   . $rs["vendorReg"]        . '",';
  $outp .= '"employeeID":"'   . $rs["employeeID"]        . '",';
  $outp .= '"branchID":"'   . $rs["branchID"]        . '",';
  $outp .= '"mDate":"'   . $rs["mDate"]        . '",';
  $outp .= '"eDate":"'   . $rs["eDate"]        . '",';
  $outp .= '"uprice":"'. $rs["uprice"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>