<?php

$data = json_decode(file_get_contents("php://input"));
$connection=mysqli_connect("localhost","root","","pixalogypos");

 $query = "SELECT empName FROM employees WHERE designation=Cashier";
 $res = mysqli_query($connection, $query);   
?>

<html lang="en">
<head>
  <title >Invoice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
</head>
<style>

  input.ng-invalid.ng-dirty
  {

    border: 1px solid red;
  }

select:required:invalid {
  color: gray;
}
option[value=""][disabled] {
  display: none;
}
option {
  color: black;
}



</style>
<body  ng-app="MainDashBranch">

<header class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><font Size="5">PIXALOGY Solutions</font></a>
    </div>
    <ul class="nav navbar-nav">
      
    </ul>
  </div>
</header>
<section>
  <nav>
     
  </nav>
  
<div class="container" ng-controller="branchadd" ">



  <article>
  <div>

    <div class="row">
      
      <div class="col-sm-12" ng-hide="inserttask">
         
      <div class="alert alert-success">
  <strong>1 Row Affected.</strong>   
</div>

   


      </div>
    </div>

    <div class="row">
      
      <div class="col-sm-12" ng-hide="deletetask">
         
      <div class="alert alert-success">
  <strong>1 Row Affected.</strong> 
</div>

   


      </div>
    </div>



    <div class="row">
      
      <div class="col-sm-12" ng-hide="updatetask">
         
      <div class="alert alert-success">
  <strong>1 Row Affected.</strong> 
</div>

   


      </div>
    </div>



    <form name="branchform" >
    <div class="row">
  <div class="col-sm-4"><select name="cashier" type="text" class="form-control"  ng-model="nameSelect"  >
    <option value="" disabled selected >Cashier Name...</option>
<?php 
$sql = mysqli_query($connection, "SELECT empName FROM employees WHERE designation='Cashier'");
while ($row = $sql->fetch_assoc()){
echo "<option value=\"owner1\"  >" . $row['empName'] . "</option>";
}
?>
  </select></div>
  <div class="col-sm-2"><input type="text" class="form-control" placeholder="Company" ng-model="company" disabled></div>
  <div class="col-sm-2"><p class="form-control"  id="demo" align="center"></p></div>
  <div class="col-sm-2"><p class="form-control"  id="time" align="center"></p></div>
  
</div><br>
<div class="row">

  <div class="col-sm-2"><input  type="text" class="form-control" placeholder="Order Number" ng-model="orderNo" ></div>
  <input type="submit" name = "btnInsert" class="btn btn-info" ng-click="insertData()" value="ADD"/>
    
</div>
<br><br><br>
 




</form>



<div class="row">
  
  <div class="col-sm-6"><input type="text" class="form-control" placeholder="Search: " ng-model="search" style="background: #b2beb5  ; color: #696969; font-Size:18px"></div>

</div><br>





<div class="row" ng-app="MainDashBranch"  ng-controller="branchadd" ng-init="displayData()">
  <div class="col-sm-6">
    





    <table class="table table-bordered  " width="100" >
    <thead >
      <col width="20">
      <col width="20">
      <col width="20">
      <col width="20">
      <col width="20">

      <tr class="active">
        <th>Qty</th>
        <th>Meal</th>
        <th>Size</th>
        <th>Price</th>
        <th>Value</th>
      </tr>
    </thead>
    <tbody>

      <tr ng-repeat="x in na">
        <td >{{ x.qty }}</td>
        <td>{{ x.meal }}</td>
        <td>{{ x.Size }}</td>
        <td>{{ x.price }}</td>
        <td>{{ x.Value }}</td>
      </tr>
    </tbody>
   
  </table>
  </div>
  
</div>
<div class="row">
  <div class="col-sm-4" id="printable">


  
    <button type="button" class="btn btn-primary"  >Print</button> &nbsp &nbsp &nbsp
    <button type="button" class="btn btn-primary" >Save</button>



  </div>



  
</div><br>




</div>






</div>


</article></section>

<script>


 

  n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("demo").innerHTML = m + "/" + d + "/" + y;

 n =  new Date();
y = n.getHours();
m = n.getMinutes() ;
document.getElementById("time").innerHTML = y + ":" + m ;
  
 var app = angular.module("MainDashBranch", []);

app.controller("branchadd", function($scope,$http) {

  
      $scope.displayData = function(){  
           $http.get("select.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }  


  $scope.inserttask=true;
  $scope.deletetask=true;
  $scope.updatebtn=true;
  $scope.updatetask=true;

  $scope.insertBranch=function(){


    $scope.deletetask=true;
    $scope.updatetask=true;



                  $http.post("insertbranch.php", {
    'qty':$scope.qty,
    'meal':$scope.meal,
    
    'Size':$scope.Size,
    


})        

  .then(function (response) {
   
    $scope.inserttask=false;


    $scope.showbranch();


});



  }

  $scope.showbranch=function(){

       $http.get("showbranch.php")
   .then(function (response) {$scope.names = response.data.records;});




  }



  $scope.deletebranch=function(no){

    $scope.inserttask=true;
    $scope.updatetask=true;

   if(confirm("Are you sure?")){


        
          $http.post("deletebranch.php", {
    'no':no,
  
    


})        

  .then(function (response) {
   
   
    $scope.showbranch();
    $scope.deletetask=false;

    


});


   }
   else{

    return false;
   }



  }





 $scope.clear=function(){


$scope.updatebtn=true;

$scope.addbtn=false;





 }




 $scope.branchup2=function(){

   
     $http.post("updatebranch.php", {
      
    


})        

  .then(function (response) {
   
    


    $scope.showbranch();

    $scope.updatebtn=true;
    $scope.addbtn=false;


    $scope.updatetask=false;




   


});






 }



 $scope.showBranch2=function(){

    $http.post("showone.php", {
    'orderNo':$scope.orderNo,
    
    


})        

  .then(function (response) {
   
    $scope.na=response.data.records;



});



 }



})





</script>

</body>
</html>