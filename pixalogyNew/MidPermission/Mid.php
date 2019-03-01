<?php 

session_start();

if(isset($_SESSION['acc']))
{
    echo " welcome:".$_SESSION['acc'];
    session_destroy();
}

else
{
    header("location:../index.html");
}






 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Mid</title>
</head>
<body>
	 
   <input type="text" name="dsad" value="<?php echo $_SESSION['acc']; ?>"  >
   
</body>
</html>