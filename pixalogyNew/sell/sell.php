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
<html>
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
<br><br>

<div class="container">
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
<div class="row">
<select class="form-control">
  <option>Volvo</option>
 
</select>
  
</div><br>


<div class="row">

<div class="col-md-6">
<div class="row">
  <div class="col-md-4">
  <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="	Item Name.."  ng-model="	ItemName" required>
  </div>
  <div class="col-md-4">
  <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="	Product Name.."  ng-model="	ProductName" required>
  </div>
  <div class="col-md-4">
  <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="	companyName.." ng-model="companyName" required>
  </div>
</div><br>

<div class="row">
  <div class="col-md-4">
  <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="	Item Type.."  ng-model="	ItemType" required>
  </div>
  <div class="col-md-4">
  <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="	Sell Price.."  ng-model="	SellPrice" required>
  </div>
  <div class="col-md-4">
  <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="	Qty.." ng-model="Qty" required>
  </div>
</div>
</div>
<div class="class="col-md-6>
  
</div>
  
</div><br>




</div>
    

</body>
</html>