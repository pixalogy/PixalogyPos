<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$orderNo = mysqli_real_escape_string($con,$data->orderNo);
$out=array();


$query= "SELECT `no`, `qty`, `meal`, `Size`, `price`, `Value`, `orderNo` FROM `order`    WHERE 	orderNo	='".$orderNo."'";

$result=mysqli_query($con,$query);

while ($row=mysqli_num_rows($result)) {


	$out[]=$row;
	# code...
}


echo json_decode($out);









 ?>