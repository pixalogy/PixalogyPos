<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT `vendorReg`, `vendorname`, `contact`, `address`, `no`, `item` FROM `vendors`");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"vendorReg":"'  . $rs["vendorReg"] . '",';
  $outp .= '"no":"'   . $rs["no"]        . '",';
  $outp .= '"vendorname":"'   . $rs["vendorname"]        . '",';
  $outp .= '"contact":"'   . $rs["contact"]        . '",';
  $outp .= '"address":"'   . $rs["address"]        . '",';
  $outp .= '"item":"'. $rs["item"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>