<?php 

session_start();


if(isset($_SESSION['acc']))
{
    $acc = $_SESSION['acc'];
    //session_destroy();
}

else
{
    
    header("location:../index.html");
}




 ?>

<!DOCTYPE html>
<html  ng-app="lowper">
<head>
	<title>Task</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<body>
<div class="container" ng-controller="lowacc" ng-init="show('<?php echo $acc?>')" >

  <h3>Account Details</h3><br><hr><br>
  <p>Account:</P>
  <input type="text" name="dsad" class="form-control" value="<?php echo $acc; ?>" disabled >

  <div>
  
  </div>
      
  <p>Name:</P>
  <input type="text"  class="form-control"  disabled ng-model="name" >
  <p>Designation:</P>
  <input type="text"  class="form-control"  disabled ng-model="designation">
  <p>Branch:</P>
  <input type="text"  class="form-control" disabled ng-model="branch" >
  <p>Department:</P>
  <input type="text"  class="form-control"   disabled  ng-model="Department"><br><br>




  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Your Permissions</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="MainDBSystemacc/MainDBSystemacc.html">SELLS MANAGEMENT</a></li>
     

    </ul>
  </div>
</nav>
  












</div> 


<script>

var app = angular.module("lowper", []);

app.controller("lowacc", function($scope,$http) {


     $scope.show=function(a){

       
        
        $http.post("showaccount.php", {
            'a':a,
  
    


})        

  .then(function (response) {
   
   
    $scope.details =response. data; 
    console.log($scope.details);

    $scope.name=$scope.details.name;
    $scope.designation=$scope.details.Designation;
    $scope.branch=$scope.details.Branch;
    $scope.Department=$scope.details.Department;
    


});




     }






})






    </script>
   
   
</body>
</html>