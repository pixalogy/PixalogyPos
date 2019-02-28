<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT `DesignationID`, `Name`, `Salary` FROM `designation`");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"DesignationID":"'  . $rs["DesignationID"] . '",';
  $outp .= '"Name":"'   . $rs["Name"]        . '",';
 
  
  $outp .= '"Salary":"'. $rs["Salary"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>