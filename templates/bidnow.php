<?php 
// script for bidding particular item linked to ongoing_auction.php//
session_start();
include 'database.php';

  if (isset($_POST['bidnow'])) 
  {
  	$product_id = $_POST['bidnow'];
  	$query = "select product_name,price from Product where product_id = $product_id;";
  	$result = mysqli_query($conn, $query);
  	$arr = mysqli_fetch_assoc($result);
  	$product_name = $arr['product_name'];
  	$price = $arr['price'];
    
    // querring for last bid for product//

    $query2 = "select final_price from Bids where product_id=$product_id;";
    $result2 = mysqli_query($conn,$query2);

    $arr2 = mysqli_fetch_assoc($result2);
    $rows = mysqli_num_rows($result2);                 // if there is not rows affected means no bidding done till yet
    if($rows)
       $final_price = $arr2['final_price'];  
    else 
       $final_price = 0;            
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bidnow</title>
</head>
<body>
<p><strong><?php echo $product_name;?></strong></p>
<br><br>
<p><strong><?php echo $price;?></strong></p>
<br><br>
<p><strong>Last Bid </strong></p>&nbsp;
<?php if($final_price==0)
      echo "<strong>0</strong>";
      else 
      	echo "<strong>$final_price</strong>";
?>

<form action = " bidnow.php" method="get">
	<input type="text" name="mybid">
	<?php 
	     if(isset($_GET['mybid']))
	     {
	     	if($final_price==0)
	     	{
	     		$mybid = $_GET['mybid'];
	     		$user_id = $_SESSION['user_id'];
	     		$query = "insert into Bids values($product_id,,$price,$mybid,$user_id);";
	     	}
	     	else 
	     	{
	     		$mybid = $_GET['mybid'];
	     		$user_id = $_SESSION['user_id'];
	     		$query3 = "update Bids set final_price=$mybid, user_id=$user_id where product_id=$product_id;";
	     		
	     		if(mysqli_query($conn,$query3))
	     		{
	     			echo "Sucess";
	     		}
	     	}
	     }
?>
</form>
<br><br>
<a href = "ongoing_auction.php">Click here to bid more</a>

</body>
</html>
