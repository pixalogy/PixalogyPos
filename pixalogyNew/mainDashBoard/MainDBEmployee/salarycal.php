<?php



$data = json_decode(file_get_contents("php://input"));


$conn = new mysqli("localhost", "root", "", "pixalogypos");
$desingnationget = mysqli_real_escape_string($conn,$data->desingnationget);


$price = mysqli_query($conn,"SELECT  `Salary` FROM `designation` WHERE Name='".$desingnationget."'");

$result = mysqli_fetch_array($price);



echo($result['Salary']);
?>