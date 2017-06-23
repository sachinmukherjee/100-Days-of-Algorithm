<!DOCTYPE html>
<html>
<head>
	<title>Product Bids</title>
</head>
<body>
<h2> Your Product Bids</h2>
<?php
     session_start();
     include 'database.php';
     $seller_id=$_SESSION['seller_id'];
     $query = "select * from Bids where user_id = $seller_id;";
     $result=mysqli_query($conn, $query);
     $arr = mysqli_fetch_assoc($result);

     for($i=0;$i<mysqli_num_rows($result); $i++)
     {
     	echo arr['product_name'];
     	echo "<br>";
     	echo arr['final_price'];

     } 



?>
</body>
</html>