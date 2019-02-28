<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT empID, empName, phone, address, email, salary,designation , permission FROM employees");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"empID":"'  . $rs["empID"] . '",';
  $outp .= '"empName":"'   . $rs["empName"]        . '",';
  $outp .= '"phone":"'   . $rs["phone"]        . '",';
  $outp .= '"address":"'   . $rs["address"]        . '",';
  $outp .= '"email":"'   . $rs["email"]        . '",';
  $outp .= '"salary":"'   . $rs["salary"]        . '",';
  $outp .= '"designation":"'   . $rs["designation"]        . '",';
  $outp .= '"permission":"'. $rs["permission"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>