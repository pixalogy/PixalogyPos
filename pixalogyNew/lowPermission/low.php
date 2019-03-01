<?php 

session_start();


if(isset($_SESSION['acc']))
{
    $acc = $_SESSION['acc'];
    
}

else
{
    
    header("location:../index.html");
}


session_destroy();

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
    <br><br>
<div class="container" ng-controller="lowacc" ng-init="show('<?php echo $acc?>')" style="background-color:#F8F9F9  " >

  <h3>Account Details</h3><br><hr><br>
  <form action="process.php" method="post" name="lowper">
  <p>Account:</P>
  <input type="text" name="accounnum" class="form-control" value="<?php echo $acc; ?>"  readonly >
  
  <div>
  
  </div>
      
  <p>Name:</P>
  <input type="text" name="empname"  class="form-control"   ng-model="name"  readonly >
  <p>Designation:</P>
  <input type="text" name="des"  class="form-control"   ng-model="designation"  readonly>
  <p>Branch:</P>
  <input type="text" name="branchname" class="form-control"  ng-model="branch"  readonly>
  <p>BranchID:</P>
  <input type="text" name="branchid"  class="form-control"  ng-model="branchID"  readonly>
  <p>Department:</P>
  <input type="text" name="department"  class="form-control"     ng-model="Department"  readonly><br><br>

  <div class="row">
  <div class="col-sm-4">

  <button type="submit" class="btn btn-primary" name="sellmanage" >Sells Management</button>
</div>




  </div>

</form>
  
  












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
    $scope.branchID=$scope.details.BranchID;


});




     }






})






    </script>
   
   
</body>
</html>