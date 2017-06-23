<?php 
  session_start();
  include 'database.php';
  $user_id=$_SESSION['user_id'];

  $query = "select * from Purchased where user_id = $user_id;";
  $result = mysqli_query($conn, $query);

?>