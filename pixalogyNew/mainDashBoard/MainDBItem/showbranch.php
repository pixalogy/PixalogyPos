<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT branchID, branchName, locations, phone, address, email, fax FROM branchs");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"branchID":"'  . $rs["branchID"] . '",';
  $outp .= '"branchName":"'   . $rs["branchName"]        . '",';
 
 
 
 
  
  $outp .= '"fax":"'. $rs["fax"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>