<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT employeeID, employeeName, permission, phone, address, email, designation, salary FROM employee");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"employeeID":"'  . $rs["employeeID"] . '",';
  $outp .= '"employeeName":"'   . $rs["employeeName"]        . '",';
  $outp .= '"permission":"'   . $rs["permission"]        . '",';
  $outp .= '"phone":"'   . $rs["phone"]        . '",';
  $outp .= '"address":"'   . $rs["address"]        . '",';
  $outp .= '"email":"'   . $rs["email"]        . '",';
  $outp .= '"designation":"'   . $rs["designation"]        . '",';
  $outp .= '"salary":"'. $rs["salary"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>