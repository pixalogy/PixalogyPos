<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$empname = mysqli_real_escape_string($con,$data->empname);
$empaddress = mysqli_real_escape_string($con,$data->empaddress);
$empphonenumber = mysqli_real_escape_string($con,$data->empphonenumber);
$nic = mysqli_real_escape_string($con,$data->nic);
$Email = mysqli_real_escape_string($con,$data->Email);
$empgender = mysqli_real_escape_string($con,$data->empgender);
$desingnationget = mysqli_real_escape_string($con,$data->desingnationget);
$empsalary = mysqli_real_escape_string($con,$data->empsalary);
$birthday = mysqli_real_escape_string($con,$data->birthday);
$empbranch = mysqli_real_escape_string($con,$data->empbranch);
$empdepartment = mysqli_real_escape_string($con,$data->empdepartment);
$join = mysqli_real_escape_string($con,$data->join);

$empID=mysqli_real_escape_string($con,$data->empID);



$query= "UPDATE `employee` SET `name`='$empname',`address`='$empaddress',`Tel`='$empphonenumber',`nic`='$nic',`Email`='$Email',`Gender`='$empgender',`designation`='$desingnationget',`salary`='$empsalary',`birthday`='$birthday',`branch`='$empbranch',`department`='$empdepartment',`joinedDate`='$join' WHERE `EmployeeID`='$empID' ";

mysqli_query($con,$query);









 ?>