<html lang="en">
<head>
  <title>Branch Management</title>
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


  




</style>
<body  ng-app="MainDashBranch">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../MainDashboard.html"><font size="5">PIXALOGY Solutions</font></a>
    </div>
    <ul class="nav navbar-nav">
      
    </ul>
  </div>
</nav>
  
<div class="container" ng-controller="branchadd" ng-init="showbranch()">





  <h3><b>Branch Management</b></h3><br>
  <div>

    <div class="row">
      
      <div class="col-sm-12" ng-hide="inserttask">
         
      <div class="alert alert-success">
  <strong>Success!</strong> Branch details has been inserted.
</div>

   


      </div>
    </div>

    <div class="row">
      
      <div class="col-sm-12" ng-hide="deletetask">
         
      <div class="alert alert-success">
  <strong>Success!</strong> Branch details has been deleted.
</div>

   


      </div>
    </div>



    <div class="row">
      
      <div class="col-sm-12" ng-hide="updatetask">
         
      <div class="alert alert-success">
  <strong>Success!</strong> Branch details has been Updated.
</div>

   


      </div>
    </div>



    <form name="branchform">
    <div class="row">
  <div class="col-sm-4"><input type="text" class="form-control" placeholder="Branch ID" ng-model="branchID" disabled ></div>
  
</div><br>

  <div class="row">
  <div class="col-sm-3"><input type="text" class="form-control" placeholder="Branch Name" ng-model="branchname" required ></div>
  <div class="col-sm-3"><input type="text" class="form-control" placeholder="Location" ng-model="location" required></div>
  <div class="col-sm-3"><input type="text" class="form-control" placeholder="Phone Number" ng-model="phonenumber" required></div>
  <div class="col-sm-3"><input type="text" class="form-control" placeholder="Address" ng-model="address" required></div>
</div><br>

<div class="row">
  <div class="col-sm-3"><input type="email" class="form-control" placeholder="Email" ng-model="Email" required></div>
  <div class="col-sm-3"><input type="text" class="form-control" placeholder="Number of Employees" ng-model="noemployee" required></div>
  <div class="col-sm-3"><input type="text" class="form-control" placeholder="Manager" ng-model="manager" required></div>
</div><br>

<div class="row">
  <div class="col-sm-4">


    <button type="button" class="btn btn-primary" ng-disabled="branchform.$invalid" ng-click="insertBranch()" ng-hide="addbtn">Add</button>
    <button type="button" class="btn btn-primary"  ng-click="branchup2()" ng-hide="updatebtn">Update</button>
    <button type="button" class="btn btn-primary"  ng-click="clear()" ng-hide="updatebtn" >Cancel</button>



  </div>



  
</div><br>



</form>



<div class="row">
  
  <div class="col-sm-6"><input type="text" class="form-control" placeholder="Search Branch Details" ng-model="search" style="background: #b2beb5  ; color: #696969; font-size:<b>18px"></div>

</div><br>





<div class="row">
  <div class="col-sm-12">
    





    <table class="table table-bordered table-hover">
    <thead >
      <tr class="active">
        <th>Branch ID</th>
        <th>Branch Name</th>
        <th>Location</th>
        <th>Phone Number/th>
        <th>Address</th>
        <th>Email</th>
        <th>Number of Employees</th>
        <th>Manager</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat="x in names | filter:search">
        <td>{{ x.branchID }}</td>
        <td>{{ x.branchName }}</td>
        <td>{{ x.locations }}</td>
        <td>{{ x.phone }}</td>
        <td>{{ x.address }}</td>
        <td>{{ x.email }}</td>
        <td>{{ x.noemployee }}</td>
        <td>{{ x.manager }}</td>
        <td><button type="button" class="btn btn-danger" ng-click="deletebranch(x.branchID)">Delete</button></td>
        <td><button type="button" class="btn btn-success" ng-click="updatebranch(x.branchID,x.branchName,x.locations,x.phone,x.address,x.email,x.noemployee,x.manager )">Edit</button></td>
      </tr>
    </tbody>
  </table>
  </div>
  
</div>





</div>






</div>




<script>
 var app = angular.module("MainDashBranch", []);

app.controller("branchadd", function($scope,$http) {


  $scope.inserttask=true;
  $scope.deletetask=true;
  $scope.updatebtn=true;
  $scope.updatetask=true;

  $scope.insertBranch=function(){


    $scope.deletetask=true;
    $scope.updatetask=true;



                  $http.post("insertbranch.php", {
    'branchname':$scope.branchname,
    'location':$scope.location,
    'phonenumber':$scope.phonenumber,
    'address':$scope.address,
    'Email':$scope.Email,
    'noemployee':$scope.noemployee,
    'manager':$scope.manager,
    


})        

  .then(function (response) {
   
    $scope.inserttask=false;


    $scope.showbranch();

    $scope.branchname="";
    $scope.location="";
    $scope.phonenumber="";
    $scope.address="";
    $scope.Email="";
    $scope.noemployee="";
    $scope.manager="";


});



  }

  $scope.showbranch=function(){

       $http.get("showbranch.php")
   .then(function (response) {$scope.names = response.data.records;});




  }



  $scope.deletebranch=function(branchID){

    $scope.inserttask=true;
    $scope.updatetask=true;

   if(confirm("Are you sure?")){


        
          $http.post("deletebranch.php", {
    'branchID':branchID,
  
    


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




 $scope.updatebranch=function(branchID,branchName,locations,phone,address,email,noemployee,manager){
  
            $scope.branchID=branchID;
            $scope.branchname=branchName;
    $scope.location=locations;
    $scope.phonenumber=phone;
    $scope.address=address;
    $scope.Email=email;
    $scope.noemployee=noemployee;
    $scope.manager=manager;
    $scope.updatebtn=false;
    $scope.addbtn=true;
    







 }


 $scope.clear=function(){


$scope.updatebtn=true;

$scope.addbtn=false;

$scope.branchID="";
$scope.branchname="";
    $scope.location="";
    $scope.phonenumber="";
    $scope.address="";
    $scope.Email="";

    $scope.noemployee="";
    $scope.manager="";





 }





 $scope.branchup2=function(){

   
     $http.post("updatebranch.php", {
      'branchID':$scope.branchID,
    'branchname':$scope.branchname,
    'location':$scope.location,
    'phonenumber':$scope.phonenumber,
    'address':$scope.address,
    'Email':$scope.Email,
    'noemployee':$scope.noemployee,
    'manager':$scope.manager,

    


})        

  .then(function (response) {
   
    


    $scope.showbranch();

    $scope.updatebtn=true;
    $scope.addbtn=false;


    $scope.branchID="";
$scope.branchname="";
    $scope.location="";
    $scope.phonenumber="";
    $scope.address="";
    $scope.Email="";
    $scope.noemployee="";
    $scope.manager="";

    $scope.updatetask=false;




   


});






 }



})





</script>

</body>
</html>