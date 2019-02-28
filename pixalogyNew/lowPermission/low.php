<?php 

session_start();


echo " welcome:".$_SESSION['acc'];


echo '';



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>ddsd</title>
</head>
<body>
	 
   <input type="text" name="dsad" value="<?php echo $_SESSION['acc']; ?>"  >
   
</body>
</html>