<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT `ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyId`, `CompanyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `GetUnit`, `UnitQty`, `GetPrice`, `SellQtyUnit`, `Qty`, `SellPrice`, `Profit`, `AvailableProfit` FROM `unitavitem`");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"ItemID":"'  . $rs["ItemID"] . '",';
  $outp .= '"ItemName":"'   . $rs["ItemName"]        . '",';
  $outp .= '"ProductName":"'   . $rs["ProductName"]        . '",';
  $outp .= '"BranchID":"'   . $rs["BranchID"]        . '",';
  $outp .= '"BranchName":"'   . $rs["BranchName"]        . '",';
  $outp .= '"CompanyId":"'   . $rs["CompanyId"]        . '",';
  $outp .= '"CompanyName":"'   . $rs["CompanyName"]        . '",';
  $outp .= '"manufactureDate":"'   . $rs["manufactureDate"]        . '",';
  $outp .= '"ExDate":"'   . $rs["ExDate"]        . '",';
  $outp .= '"Section":"'   . $rs["Section"]        . '",';
  $outp .= '"AddedDate":"'   . $rs["AddedDate"]        . '",';
  $outp .= '"ItemType":"'   . $rs["ItemType"]        . '",';
  $outp .= '"GetUnit":"'   . $rs["GetUnit"]        . '",';
  $outp .= '"UnitQty":"'   . $rs["UnitQty"]        . '",';
  $outp .= '"GetPrice":"'   . $rs["GetPrice"]        . '",';
  $outp .= '"SellQtyUnit":"'   . $rs["SellQtyUnit"]        . '",';
  $outp .= '"Qty":"'   . $rs["Qty"]        . '",';
  $outp .= '"SellPrice":"'   . $rs["SellPrice"]        . '",';
  $outp .= '"Profit":"'   . $rs["Profit"]        . '",';
  
  
  
  $outp .= '"AvailableProfit":"'. $rs["AvailableProfit"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>