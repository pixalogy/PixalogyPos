<?php 

session_start();

if(isset($_POST['sellmanage']))
{
    $account = $_POST['accounnum'];

   $_SESSION['acc']=$_POST['accounnum'];
   $_SESSION['empname']=$_POST['empname'];
   $_SESSION['des']=$_POST['des'];
   $_SESSION['branchname']=$_POST['branchname'];
   $_SESSION['branchid']=$_POST['branchid'];
   $_SESSION['department']=$_POST['department'];

   header("location:../sell/sell.php");

}
else
{
    echo "wrong..";
}












?>