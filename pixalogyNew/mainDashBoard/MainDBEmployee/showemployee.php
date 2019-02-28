<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT `EmployeeID`, `name`, `address`, `Tel`, `nic`, `Email`, `Gender`, `designation`, `salary`, `birthday`, `branch`, `department`, `joinedDate` FROM `employee`");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"EmployeeID":"'  . $rs["EmployeeID"] . '",';
  $outp .= '"name":"'   . $rs["name"]        . '",';
  $outp .= '"address":"'   . $rs["address"]        . '",';
  $outp .= '"Tel":"'   . $rs["Tel"]        . '",';
  $outp .= '"nic":"'   . $rs["nic"]        . '",';
  $outp .= '"Email":"'   . $rs["Email"]        . '",';
  $outp .= '"Gender":"'   . $rs["Gender"]        . '",';
  $outp .= '"designation":"'   . $rs["designation"]        . '",';
  $outp .= '"salary":"'   . $rs["salary"]        . '",';
  $outp .= '"birthday":"'   . $rs["birthday"]        . '",';
  $outp .= '"branch":"'   . $rs["branch"]        . '",';
  $outp .= '"department":"'   . $rs["department"]        . '",';

  
  $outp .= '"joinedDate":"'. $rs["joinedDate"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>