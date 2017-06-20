<?php 
     // script for processing add_product.php //

     session_start();
     include('database.php');
     


     if (isset($_POST['submit'])) 
     {
     	$product_name = $_POST['product_name'];
     	$description = $_POST['description'];
     	$finaldate = date('Y-m-d',strtotime($_POST['finaldate']));
     	$price = $_POST['price'];
          $initialdate = date('Y-m-d',strtotime($_POST['initialdate']));
          $user_id = $_SESSION['user_id'];

          // for product image processing//

          echo $temp_name = $_FILES['product']['tmp_name'];
          echo $product_pic = basename($_FILES['product']['name']);
          echo $location = '/var/www/html/OnlineAuction/templates/products/' .basename($_FILES['product']['name']);
          move_uploaded_file($temp_name,$location);

          $query = "insert into Product values(null,'$product_name','$initialdate',$price,'$product_pic','$user_id','$description','$finaldate');";
          $result=mysqli_query($conn, $query);
     }

?>