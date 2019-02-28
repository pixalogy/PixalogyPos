<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT `companyID`, `companyName`, `DistributeAddress`, `Tel` FROM `company` ");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"companyID":"'  . $rs["companyID"] . '",';
  $outp .= '"companyName":"'   . $rs["companyName"]        . '",';
  $outp .= '"DistributeAddress":"'   . $rs["DistributeAddress"]        . '",';
  
  
  $outp .= '"Tel":"'. $rs["Tel"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>