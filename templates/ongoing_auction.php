<?php 
   // script for ongoing auction // 
  session_start();
  include 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ongoing Auction</title>
</head>
<body>



<form action=="bidnow.php" method ="post">
<?php 
  $query = "select product_id,product_name,description,price,dat,finaldate,product_image from Product where dat<=now() and finaldate<=now() order by dat desc;";
  $result = mysqli_query($conn, $query);
  
  $row = mysqli_num_rows($result);
  $arr = mysqli_fetch_assoc($result);

	  for($i=0;$i<$row;$i++) 
	      { 
	      	// for product image//
	      	echo "Product Name  :" .$arr['product_name'];
	      	echo "<br>";
	      	echo "Description    :" .$arr['description'];
	      	echo "<br>";
	      	echo "Starting Date  :".$arr['dat'];
	      	echo "<br>";
	      	echo "Last Date  :".$arr['finaldate'];
	      	echo "<br>";
	      	echo "Price  :".$arr['price'];
	      	echo "<br>";
           }
 ?>
 <button name="bidnow" value="<?php echo $arr['product_id'];?>" type="submit">Bid Now</button>

</form>
</body>
</html>
