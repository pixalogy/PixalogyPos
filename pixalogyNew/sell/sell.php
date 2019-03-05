<?php

session_start();

 $_SESSION['acc'];
 $_SESSION['empname'];
 $_SESSION['des'];
 $_SESSION['branchname'];
 $_SESSION['branchid'];
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

<div class="container" ng-controller="sellfind" style="background-color:#EAEDED;">
<div class="row">

<div class="col-md-5">

<h2>Sell Management</h2>

</div>
<div class="col-md-5">



</div>
<div class="col-md-2">


<img src="../backimg/s.png" class="img-fluid" alt="Responsive image">
</div>

</div><hr>


<div class="row">
<div class="well well-sm"><h5>User online: <?php echo $_SESSION['empname']?></h5> Date:<?php echo  date("Y/m/d") ?></div>
</div>
<div class="row" ng-init="showitemid()">
<select class="form-control" ng-model="itemidf" ng-change="change()">
  <option ng-repeat="x in itemid">{{x.ItemID}}</option>
 
</select>
  
</div><br>


<div class="row">

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
  <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="	Item Type.."  ng-model="	ItemType" disabled required>
  </div>
  <div class="col-md-4">
    Price:
  <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="	Sell Price.."  ng-model="	SellPrice" disabled required>
  </div>
  <div class="col-md-4">
    Qty:
  <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="	Qty.." ng-model="Qty"  required>
  </div>
</div><br>


<button type="button" class="btn btn-primary">Add</button><br><br><br>


<div class="alert alert-info">
  <h3>Total Amount:</h3>
  <h3>Item Status:</h3>
  

</div>








<table class="table table-striped table-dark">
  <thead>
    <tr>
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

</div>


</div><br>



  
</div><br>





</div>


<script>

var app = angular.module("sell", []);

app.controller("sellfind", function($scope,$http) {

$scope.showitemid=function(){

  $http.get("showitemid.php")
   .then(function (response) {$scope.itemid = response.data;});





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








})






  </script>





    

</body>
</html>