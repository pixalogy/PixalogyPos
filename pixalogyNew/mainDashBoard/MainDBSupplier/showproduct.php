<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT `proAID`, `productName`, `itemName`, `sizeAvailable`, `SA-small`, `SA-s-Price`, `SA-medium`, `SA-m-price`, `SA-large`, `SA-l-price`, `unitAvailable`, `UA-small`, `UA-s-unit`, `UA-s-price`, `UA-medium`, `UA-m-unit`, `UA-m-price`, `UA-large`, `UA-l-unit`, `UA-l-price`, `price` FROM `productAvailable`");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"proAID":"'  . $rs["proAID"] . '",';
  $outp .= '"productName":"'   . $rs["productName"]        . '",';
  $outp .= '"itemName":"'   . $rs["itemName"]        . '",';
  $outp .= '"sizeAvailable":"'   . $rs["sizeAvailable"]        . '",';
  $outp .= '"SAsmall":"'   . $rs["SA-small"]        . '",';
  $outp .= '"SAsPrice":"'   . $rs["SA-s-Price"]        . '",';
  $outp .= '"SAmedium":"'   . $rs["SA-medium"]        . '",';
  $outp .= '"SAmprice":"'   . $rs["SA-m-price"]        . '",';
  $outp .= '"SAlarge":"'   . $rs["SA-large"]        . '",';
  $outp .= '"SAlprice":"'   . $rs["SA-l-price"]        . '",';
  $outp .= '"unitAvailable":"'   . $rs["unitAvailable"]        . '",';
  $outp .= '"UAsmall":"'   . $rs["UA-small"]        . '",';
  $outp .= '"UAsunit":"'   . $rs["UA-s-unit"]        . '",';
  $outp .= '"UAsprice":"'   . $rs["UA-s-price"]        . '",';
  $outp .= '"UAmedium":"'   . $rs["UA-medium"]        . '",';
  $outp .= '"UAmunit":"'   . $rs["UA-m-unit"]        . '",';
  $outp .= '"UAmprice":"'   . $rs["UA-m-price"]        . '",';
  $outp .= '"UAlarge":"'   . $rs["UA-large"]        . '",';
  $outp .= '"UAlunit":"'   . $rs["UA-l-unit"]        . '",';
  $outp .= '"UAlprice":"'   . $rs["UA-l-price"]        . '",';
  
  $outp .= '"price":"'. $rs["price"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>