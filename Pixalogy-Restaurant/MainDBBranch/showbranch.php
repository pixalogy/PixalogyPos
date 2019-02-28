<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT branchID, branchName, locations, phone, address, email,noemployee , manager FROM branchs");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"branchID":"'  . $rs["branchID"] . '",';
  $outp .= '"branchName":"'   . $rs["branchName"]        . '",';
  $outp .= '"locations":"'   . $rs["locations"]        . '",';
  $outp .= '"phone":"'   . $rs["phone"]        . '",';
  $outp .= '"address":"'   . $rs["address"]        . '",';
  $outp .= '"email":"'   . $rs["email"]        . '",';
  $outp .= '"noemployee":"'   . $rs["noemployee"]        . '",';
  $outp .= '"manager":"'. $rs["manager"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>