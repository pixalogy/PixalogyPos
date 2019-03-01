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
            else if($Permissions=='High')
        	{
        		$_SESSION['acc']=$Account;

        		header("location:mainDashBoard/MainDashBoard.php");
            }
            
            else if($Permissions=='Mid')
        	{
        		$_SESSION['acc']=$Account;

        		header("location:MidPermission/Mid.php");
        	}

        	




        }
        else
        {
        	header("location:index.html");
        }






    }
    else
    {
        echo "Wrong Task..";   
    }
    








 ?>