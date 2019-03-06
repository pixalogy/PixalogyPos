<?php

session_start();
$date=date("Y/m/d");
 $_SESSION['acc'];
 $emp=$_SESSION['empname'];
 $_SESSION['des'];
 $bna=$_SESSION['branchname'];
 $brn=$_SESSION['branchid'];
  $_SESSION['department'];
//<h3>Welcome <?php echo $_SESSION['acc']
?>

<!DOCTYPE html>
<html ng-app="sell">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
  

</head>
<body>
<br>

<div class="container-fluid" ng-controller="sellfind" style="background-color:#F8F9F9; max-width:1500px">
<div class="row">

<div class="col-md-12" style="background-color:#2471A3    ; color:white;">

<h2>Sell Management</h2>

</div>
<div class="col-md-5">



</div>
<div class="col-md-2">



</div>

</div><hr>


<div class="row">
<div class="well well-sm"><h5>User online: <?php echo $_SESSION['empname']?></h5> Date:<?php echo  $date ?></div>
</div>
<div class="row" ng-init="showitemid('<?php echo $brn?>')">
<select class="form-control" ng-model="itemidf" ng-change="change()">
<option ng-repeat="x in itemid track by $index">{{x.ItemID}}</option>
 
</select>
  
</div><br>


<div class="row">
<form name="selladd">
<div class="col-md-12"   >
<div class="row"   >
  <div class="col-md-4" >
    Item Name:
  <input type="text" class="form-control"   aria-describedby="emailHelp" placeholder="	Item Name.."  ng-model="	ItemName" required disabled>
  </div>
  <div class="col-md-4">
    Product Name:
  <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="	Product Name.."  ng-model="	ProductName" disabled required>
  </div>
  <div class="col-md-4">
    Company Name:
  <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="	companyName.." ng-model="companyName" disabled required>
  </div>
</div><br>

<div class="row" >
  <div class="col-md-4">
    Type:
  <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="	Item Type.."  ng-model="	ItemType" disabled required ng-change="QTY()">
  </div>
  <div class="col-md-4">
    Price:
  <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="	Sell Price.."  ng-model="	SellPrice"  required>
  </div>
  <div class="col-md-4">
    Qty:
  <input type="Number" class="form-control"  aria-describedby="emailHelp" placeholder="	Qty.." ng-model="Qty"  required ng-disabled="new">
  </div>
</div><br>


<button type="button" class="btn btn-primary" ng-click="addselltem('<?php echo $brn?>','<?php echo $bna?>','<?php echo $emp?>','<?php echo  $date ?>')" ng-disabled="selladd.$invalid">Add</button><br><br><br>


<div class="alert alert-info">
  <h3>Total Amount:</h3><h4>RS:{{displaysum}}</h4>
  
  

</div>








<table class="table table-bordered" ng-init="showselltem()">
  <thead>
    <tr style="background-color:#2471A3  ; color:white; font-size:16px;">
      <th scope="col">Add</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
      <th scope="col">ItemName</th>
      <th scope="col">ProductName</th>
      <th scope="col">qty</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
    <tr ng-repeat="x in namessell">
      <th><button type="button" class="btn btn-dark">Add</button></th>
      <th><button type="button" class="btn btn-danger">Delete</button></th>
      <th><button type="button" class="btn btn-success">Update</button></th>
      <th>{{x.ItemName}}</th>
      <th>{{x.ProductName}}</th>
      <th>{{x.qty}}</th>
      <th>{{x.TotalPrice}}</th>
      
    </tr>
   
  </tbody>
</table>

</div>


</div><br>



  
</div><br>



</form>

</div>


<script>

var app = angular.module("sell", []);

app.controller("sellfind", function($scope,$http) {

$scope.showitemid=function(brn){

 

  $http.post("showitemid.php", {
    'itemidf':$scope.itemidf,
    'brn':brn,
    


})        

  .then(function (response) {
     
  
    $scope.itemid = response.data;

    


})



}

$scope.change=function(){

  $http.post("itemdetails.php", {
    'itemidf':$scope.itemidf,
    


})        

  .then(function (response) {
     
    $scope.details =response. data; 

    console.log( $scope.details);

    $scope.ItemName=$scope.details.ItemName;
    $scope.ProductName=$scope.details.ProductName;
    $scope.companyName=$scope.details.companyName;
    $scope.ItemType=$scope.details.ItemType;
    $scope.SellPrice=$scope.details.SellPrice;


    
    
   
  
     



})



}


$scope.addselltem=function(brn,bna,emp,date){
 var total;
  if($scope.ItemType=="UnitNeed")
  {
    total=$scope.SellPrice;
    
  }
  else
  {
    total=$scope.SellPrice*$scope.Qty;
  }

    
  $http.post("itemselltem.php", {
    'brn':brn,
    'bna':bna,
    'emp':emp,
    'date':date,
    'ItemName': $scope.ItemName,
    'ProductName': $scope.ProductName,
    'Qty': $scope.Qty,
    'total': total,

})        

  .then(function (response) {
     
    
    $scope.sum =response. data; 
   
   $scope.displaysum=$scope.sum;

    
    $scope.showselltem();
   
  
     



})





}


$scope.showselltem=function(){


    
  $http.get("showselltem.php")
   .then(function (response) {$scope.namessell = response.data.records;});




}










})






  </script>





    

</body>
</html>