<?php 
  // script for upcoming action
  session_start();
  include 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upcoaming Auction</title>
</head>
<body>



<form action=="bidnow.php" method ="post">
<?php 
  $query = "select product_id,product_name,description,price,dat,finaldate,product_image from Product where dat>now() order by dat desc;";
  $result = mysqli_query($conn, $query);
  
  $row = mysqli_num_rows($result);
  $arr = mysqli_fetch_assoc($result);

	  for($i=0;$i<$row;$i++) 
	      {
	      	echo $arr['product_name'];
	      	echo "<br>";
	      	echo $arr['description'];
	      	echo "<br>";
	      	echo $arr['dat'];
	      	echo "<br>";
	      	echo $arr['finaldate'];
	      	echo "<br>";
	      	echo $arr['price'];
           }
 ?>
</form>
</body>
</html>
