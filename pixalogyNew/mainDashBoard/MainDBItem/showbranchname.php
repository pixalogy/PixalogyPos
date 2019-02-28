<?php



$data = json_decode(file_get_contents("php://input"));


$conn = new mysqli("localhost", "root", "", "pixalogypos");
$branch = mysqli_real_escape_string($conn,$data->branch);


$price = mysqli_query($conn,"SELECT  `branchID` FROM `branchs` WHERE 		branchName='".$branch."'");

$result = mysqli_fetch_array($price);



echo($result['branchID']);
?>