<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT `ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyID`, `companyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `SelectSize`, `GetPrice`, `SellPrice`, `unit`, `UnitQty`, `purchaseQty`, `Profit`,`GetAmount` , `AvailableProfit` FROM `sizeavitemtem`");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"ItemID":"'  . $rs["ItemID"] . '",';
  $outp .= '"ItemName":"'   . $rs["ItemName"]        . '",';
  $outp .= '"ProductName":"'   . $rs["ProductName"]        . '",';
  $outp .= '"BranchID":"'   . $rs["BranchID"]        . '",';
  $outp .= '"BranchName":"'   . $rs["BranchName"]        . '",';
  $outp .= '"CompanyID":"'   . $rs["CompanyID"]        . '",';
  $outp .= '"companyName":"'   . $rs["companyName"]        . '",';
  $outp .= '"manufactureDate":"'   . $rs["manufactureDate"]        . '",';
  $outp .= '"ExDate":"'   . $rs["ExDate"]        . '",';
  $outp .= '"Section":"'   . $rs["Section"]        . '",';
  $outp .= '"AddedDate":"'   . $rs["AddedDate"]        . '",';
  $outp .= '"ItemType":"'   . $rs["ItemType"]        . '",';
  $outp .= '"SelectSize":"'   . $rs["SelectSize"]        . '",';
  $outp .= '"GetPrice":"'   . $rs["GetPrice"]        . '",';
  $outp .= '"SellPrice":"'   . $rs["SellPrice"]        . '",';
  $outp .= '"unit":"'   . $rs["unit"]        . '",';
  $outp .= '"UnitQty":"'   . $rs["UnitQty"]        . '",';
  $outp .= '"purchaseQty":"'   . $rs["purchaseQty"]        . '",';
  $outp .= '"Profit":"'   . $rs["Profit"]        . '",';
  $outp .= '"GetAmount":"'   . $rs["GetAmount"]        . '",';
  
  
  $outp .= '"AvailableProfit":"'. $rs["AvailableProfit"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>