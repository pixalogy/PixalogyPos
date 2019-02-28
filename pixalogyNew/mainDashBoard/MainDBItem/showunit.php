<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT `uId`, `unit` FROM `units` `");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"uId":"'  . $rs["uId"] . '",';
  
  
  $outp .= '"unit":"'. $rs["unit"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>