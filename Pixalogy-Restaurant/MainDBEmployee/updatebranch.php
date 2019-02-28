<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$empID = mysqli_real_escape_string($con,$data->empID);

$empName = mysqli_real_escape_string($con,$data->empName);
$phonenumber = mysqli_real_escape_string($con,$data->phonenumber);
$address = mysqli_real_escape_string($con,$data->address);
$Email = mysqli_real_escape_string($con,$data->Email);
$salary = mysqli_real_escape_string($con,$data->salary);
$designation = mysqli_real_escape_string($con,$data->designation);
$permission = mysqli_real_escape_string($con,$data->permission);



$query= "UPDATE employees SET empName = '$empName' , phone ='$phonenumber' , address ='$address', email='$Email', salary ='$salary' , designation='$designation', permission = '$permission' WHERE 	empID = '$empID'";

mysqli_query($con,$query);









 ?>