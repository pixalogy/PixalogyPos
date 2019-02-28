 <?php  
 
$data = json_decode(file_get_contents("php://input"));
 $conn = mysqli_connect("localhost", "root", "", "pixalogypos");  
 $output = array();  
 $query = "SELECT * FROM order";  
 $result = mysqli_query($conn, $query);  
 if(mysqli_num_rows($result) > 0) {  
      while($row = mysqli_fetch_array($result)) {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }  
 ?> 