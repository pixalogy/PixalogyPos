<?php



$data = json_decode(file_get_contents("php://input"));


$conn = new mysqli("localhost", "root", "", "pixalogypos");
$User = mysqli_real_escape_string($conn,$data->User);
$pass = mysqli_real_escape_string($conn,$data->pass);
$out="";

$price = mysqli_query($conn,"SELECT * FROM `SystemAccount` WHERE UserName='".$User."' AND Password='".$pass."'");




if(mysqli_num_rows($price) > 0)
{
	$out="true";
}
else
{
	$out="false";
}



echo($out);
?>