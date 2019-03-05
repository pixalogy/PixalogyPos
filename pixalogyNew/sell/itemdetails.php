<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");
$itemidf = mysqli_real_escape_string($con,$data->itemidf);
$out=array();
$price1 = mysqli_query($con,"SELECT `ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyID`, `companyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `SelectSize`, `GetPrice`, `SellPrice`, `unit`, `UnitQty`, `purchaseQty`, `Profit`, `GetAmount`, `AvailableProfit` FROM `sizeavip` WHERE 	ItemID='".$itemidf."'");


if(mysqli_num_rows($price1)>0)
{
    
 $rows=mysqli_fetch_array($price1);
  

 $out['ItemName']=$rows['ItemName'];
 $out['ProductName']=$rows['ProductName'];
 $out['companyName']=$rows['companyName'];
 $out['ItemType']=$rows['ItemType'];
 $out['SellPrice']=$rows['SellPrice'];

     
 
    
  
}

$price2 = mysqli_query($con,"SELECT `ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyID`, `CompanyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `GetUnit`, `UnitQty`, `GetPrice`, `SellQtyUnit`, `Qty`, `SellPrice`, `Profit`, `AvailableProfit` FROM `unitavip` WHERE 	ItemID='".$itemidf."'");


if(mysqli_num_rows($price2)>0)
{
    
 $rows=mysqli_fetch_array($price2);
  

 $out['ItemName']=$rows['ItemName'];
 $out['ProductName']=$rows['ProductName'];
 $out['companyName']=$rows['CompanyName'];
 $out['ItemType']=$rows['ItemType'];
 $out['SellPrice']=$rows['SellPrice'];

     
 
    
  
}

$price3 = mysqli_query($con,"SELECT `ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyID`, `companyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `GetPrice`, `SellPrice`, `Qty`, `TotalAmount`, `Profit`, `AvailableProfit` FROM `otheravip` WHERE 	ItemID='".$itemidf."'");


if(mysqli_num_rows($price3)>0)
{
    
 $rows=mysqli_fetch_array($price3);
  

 $out['ItemName']=$rows['ItemName'];
 $out['ProductName']=$rows['ProductName'];
 $out['companyName']=$rows['companyName'];
 $out['ItemType']=$rows['ItemType'];
 $out['SellPrice']=$rows['SellPrice'];

     
 
    
  
}






echo json_encode($out);












 ?>