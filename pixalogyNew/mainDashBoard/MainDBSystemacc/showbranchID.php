<?php



$data = json_decode(file_get_contents("php://input"));


$conn = new mysqli("localhost", "root", "", "pixalogypos");
$bn = mysqli_real_escape_string($conn,$data->bn);


$price = mysqli_query($conn,"SELECT  `branchID` FROM `branchs` WHERE 		branchName='".$bn."'");

$result = mysqli_fetch_array($price);



echo($result['branchID']);
?>