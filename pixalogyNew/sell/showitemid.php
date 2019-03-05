<?php






$conn = new mysqli("localhost", "root", "", "pixalogypos");
$data = json_decode(file_get_contents("php://input"));
$brn = mysqli_real_escape_string($conn,$data->brn);

$out=array();


$price = mysqli_query($conn,"SELECT `ItemID` FROM `sizeavip`  WHERE 	BranchID='".$brn."'");

while($result = mysqli_fetch_array($price))
{

    $out[] = $result;

}

$price2 = mysqli_query($conn,"SELECT `ItemID` FROM `unitavip` WHERE 	BranchID='".$brn."'  ");

while($result2 = mysqli_fetch_array($price2))
{

    $out[] = $result2;

}

$price3 = mysqli_query($conn,"SELECT `ItemID` FROM `otheravip` WHERE 	BranchID='".$brn."' ");

while($result3 = mysqli_fetch_array($price3))
{

    $out[] = $result3;

}




echo json_encode($out);

?>

