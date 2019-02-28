<<?php 

$data = json_decode(file_get_contents("php://input"));
$con=mysqli_connect("localhost","root","","pixalogypos");


$id=mysqli_real_escape_string($con,$data->id);



$supID=mysqli_real_escape_string($con,$data->supID);
$supname=mysqli_real_escape_string($con,$data->supname);
$supDA=mysqli_real_escape_string($con,$data->supDA);
$supPnum=mysqli_real_escape_string($con,$data->supPnum);
$supBranch=mysqli_real_escape_string($con,$data->supBranch);





$comID=mysqli_real_escape_string($con,$data->comID);
$companyName=mysqli_real_escape_string($con,$data->companyName);
$DistributeAddress=mysqli_real_escape_string($con,$data->DistributeAddress);
$Tel=mysqli_real_escape_string($con,$data->Tel);




$proAID=mysqli_real_escape_string($con,$data->proAID);
$productName=mysqli_real_escape_string($con,$data->productName);
$itemName=mysqli_real_escape_string($con,$data->itemName);
$sizeAvailable=mysqli_real_escape_string($con,$data->sizeAvailable);
$smallav=mysqli_real_escape_string($con,$data->smallav);
$priceavs=mysqli_real_escape_string($con,$data->priceavs);
$mediumav=mysqli_real_escape_string($con,$data->mediumav);
$priceavm=mysqli_real_escape_string($con,$data->priceavm);
$largeav=mysqli_real_escape_string($con,$data->largeav);
$priceavl=mysqli_real_escape_string($con,$data->priceavl);

$unitAvailable=mysqli_real_escape_string($con,$data->unitAvailable);
$smallusa=mysqli_real_escape_string($con,$data->smallusa);
$smallus=mysqli_real_escape_string($con,$data->smallus);
$smallup=mysqli_real_escape_string($con,$data->smallup);

$mediumuma=mysqli_real_escape_string($con,$data->mediumuma);
$medianus=mysqli_real_escape_string($con,$data->medianus);
$medianup=mysqli_real_escape_string($con,$data->medianup);


$largeusa=mysqli_real_escape_string($con,$data->largeusa);
$largeus=mysqli_real_escape_string($con,$data->largeus);
$largeup=mysqli_real_escape_string($con,$data->largeup);

$otherprice=mysqli_real_escape_string($con,$data->otherprice);






$queryin= "INSERT INTO `supdir`(`id`, `supID`, `supname`, `supDA`, `supPnum`, `supBranch`, `comID`, `companyName`, `DistributeAddress`, `Tel`, `proAID`, `productName`, `itemName`, `sizeAvailable`, `smallav`, `priceavs`, `mediumav`, `priceavm`, `largeav`, `priceavl`, `unitAvailable`, `smallusa`, `smallus`, `smallup`, `mediumuma`, `medianus`, `medianup`, `largeusa`, `largeus`, `largeup`, `otherprice`) VALUES ('".$id."','".$supID."','".$supname."','".$supDA."','".$supPnum."','".$supBranch."','".$comID."','".$companyName."','".$DistributeAddress."','".$Tel."','".$proAID."','".$productName."','".$itemName."','".$sizeAvailable."','".$smallav."','".$priceavs."','".$mediumav."','".$priceavm."','".$largeav."','".$priceavl."','".$unitAvailable."','".$smallusa."','".$smallus."','".$smallup."','".$mediumuma."','".$medianus."','".$medianup."','".$largeusa."','".$largeus."','".$largeup."','".$otherprice."')";

mysqli_query($con,$queryin);


$qu="DELETE FROM `suptem` WHERE 	id='".$id."'";

mysqli_query($con,$qu);














?>