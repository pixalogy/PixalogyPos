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

$id=uniqid('Employee',true);

$query= "INSERT INTO employee ( EmployeeID, name ,  address , Tel ,  nic ,  Email ,  Gender ,  designation ,  salary ,  birthday,  branch , department ,  joinedDate ) VALUES ('".$id."','".$empname."','".$empaddress."','".$empphonenumber."','".$nic."','".$Email."','".$empgender."','".$desingnationget."','".$empsalary."','".$birthday."','".$empbranch."','".$empdepartment."','".$join."')";

mysqli_query($con,$query);

?>