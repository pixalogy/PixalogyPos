<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT `supID`, `Name`, `DistributeAddress`, `phoneNumber`, `Branch` FROM `supplier`");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"supID":"'  . $rs["supID"] . '",';
  $outp .= '"Name":"'   . $rs["Name"]        . '",';
  $outp .= '"DistributeAddress":"'   . $rs["DistributeAddress"]        . '",';
  $outp .= '"phoneNumber":"'   . $rs["phoneNumber"]        . '",';
  
  
  
  $outp .= '"Branch":"'. $rs["Branch"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>