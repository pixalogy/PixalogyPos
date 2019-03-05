<?php






$conn = new mysqli("localhost", "root", "", "pixalogypos");

$out=array();


$price = mysqli_query($conn,"SELECT * FROM `sizeavip` ");

while($result = mysqli_fetch_array($price))
{

    $out[] = $result;

}

$price2 = mysqli_query($conn,"SELECT * FROM `unitavip`  ");

while($result2 = mysqli_fetch_array($price2))
{

    $out[] = $result2;

}

$price3 = mysqli_query($conn,"SELECT * FROM `otheravip` ");

while($result3 = mysqli_fetch_array($price3))
{

    $out[] = $result3;

}




echo json_encode($out);

?>

