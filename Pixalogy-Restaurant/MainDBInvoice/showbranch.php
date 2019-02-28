<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT `no`, `qty`, `meal`, `Size` FROM `order` WHERE orderNo ='"$orderNo"' ");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"no":"'  . $rs["no"] . '",';
  $outp .= '"qty":"'   . $rs["qty"]        . '",';
  $outp .= '"meal":"'   . $rs["meal"]        . '",';
  $outp .= '"Size":"'   . $rs["Size"]        . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>