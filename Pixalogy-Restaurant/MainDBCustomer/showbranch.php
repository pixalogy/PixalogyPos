<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT custID, custName,phone, address FROM customers");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"custID":"'  . $rs["custID"] . '",';
  $outp .= '"custName":"'   . $rs["custName"]        . '",';
  $outp .= '"phone":"'   . $rs["phone"]        . '",';
  $outp .= '"address":"'   . $rs["address"]        . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>