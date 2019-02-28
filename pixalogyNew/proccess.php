<?php 

$con=mysqli_connect("localhost","root","","pixalogypos");
$password=base64_encode($_POST['password']);
session_start();

    if(isset($_POST['btnlog']))
    {
    	$query="SELECT `AccountID`, `EmployeeID`, `EmployeeName`, `Address`, `PhoneNumber`, `Designation`, `Branch`, `BranchID`, `Department`, `UserName`, `Password`, `Permissions` FROM `systemaccount` WHERE UserName='".$_POST['uname']."' AND 	Password='".$password."'";
    	$result = mysqli_query($con,$query);

        

        if(mysqli_num_rows($result)>0)
        {
           $AccountID = mysqli_fetch_array($result);
           
        	$Account=$AccountID['AccountID'];
        	$Permissions=$AccountID['Permissions'];

        	if($Permissions=='Low')
        	{
        		$_SESSION['acc']=$Account;

        		header("location:lowPermission/low.php");
        	}

        	




        }
        else
        {
        	echo "no";
        }






    }
    else
    {
        echo "Wrong Task..";   
    }
    








 ?>