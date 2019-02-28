<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT eqID, eqName, empID, vendorID,  qty FROM equipments");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"eqID":"'  . $rs["eqID"] . '",';
  $outp .= '"eqName":"'   . $rs["eqName"]        . '",';
  $outp .= '"empID":"'   . $rs["empID"]        . '",';
  $outp .= '"vendorID":"'   . $rs["vendorID"]        . '",';
  $outp .= '"qty":"'. $rs["qty"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>