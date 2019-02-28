<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "pixalogypos");

$result = $conn->query("SELECT `id`, `supID`, `supname`, `supDA`, `supPnum`, `supBranch`, `comID`, `companyName`, `DistributeAddress`, `Tel`, `proAID`, `productName`, `itemName`, `sizeAvailable`, `smallav`, `priceavs`, `mediumav`, `priceavm`, `largeav`, `priceavl`, `unitAvailable`, `smallusa`, `smallus`, `smallup`, `mediumuma`, `medianus`, `medianup`, `largeusa`, `largeus`, `largeup`, `otherprice` FROM `suptem` ");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"id":"'  . $rs["id"] . '",';
  $outp .= '"supID":"'  . $rs["supID"] . '",';
  $outp .= '"supname":"'   . $rs["supname"]        . '",';
  $outp .= '"supDA":"'   . $rs["supDA"]        . '",';
  $outp .= '"supPnum":"'   . $rs["supPnum"]        . '",';
  $outp .= '"supBranch":"'   . $rs["supBranch"]        . '",';
  $outp .= '"comID":"'   . $rs["comID"]        . '",';
  $outp .= '"companyName":"'   . $rs["companyName"]        . '",';
  $outp .= '"DistributeAddress":"'   . $rs["DistributeAddress"]        . '",';
  $outp .= '"Tel":"'   . $rs["Tel"]        . '",';
  $outp .= '"proAID":"'   . $rs["proAID"]        . '",';
  $outp .= '"productName":"'   . $rs["productName"]        . '",';
  $outp .= '"itemName":"'   . $rs["itemName"]        . '",';
  $outp .= '"sizeAvailable":"'   . $rs["sizeAvailable"]        . '",';
  $outp .= '"smallav":"'   . $rs["smallav"]        . '",';
  $outp .= '"priceavs":"'   . $rs["priceavs"]        . '",';
  $outp .= '"mediumav":"'   . $rs["mediumav"]        . '",';
  $outp .= '"priceavm":"'   . $rs["priceavm"]        . '",';
  $outp .= '"largeav":"'   . $rs["largeav"]        . '",';
  $outp .= '"priceavl":"'   . $rs["priceavl"]        . '",';
  $outp .= '"unitAvailable":"'   . $rs["unitAvailable"]        . '",';
  $outp .= '"smallusa":"'   . $rs["smallusa"]        . '",';
  $outp .= '"smallus":"'   . $rs["smallus"]        . '",';
  $outp .= '"smallup":"'   . $rs["smallup"]        . '",';
  $outp .= '"mediumuma":"'   . $rs["mediumuma"]        . '",';
  $outp .= '"medianus":"'   . $rs["medianus"]        . '",';

  $outp .= '"medianup":"'   . $rs["medianup"]        . '",';
  $outp .= '"largeusa":"'   . $rs["largeusa"]        . '",';
  $outp .= '"largeus":"'   . $rs["largeus"]        . '",';
  $outp .= '"largeup":"'   . $rs["largeup"]        . '",';
  
  
  
  $outp .= '"otherprice":"'. $rs["otherprice"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>