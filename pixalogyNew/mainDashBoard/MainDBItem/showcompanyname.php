<?php



$data = json_decode(file_get_contents("php://input"));


$conn = new mysqli("localhost", "root", "", "pixalogypos");
$company = mysqli_real_escape_string($conn,$data->company);


$price = mysqli_query($conn,"SELECT `companyID`  FROM `company` WHERE 	companyName='".$company."'");

$result = mysqli_fetch_array($price);



echo($result['companyID']);
?>