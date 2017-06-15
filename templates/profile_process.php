<?php 
     // script for profile.php processing//
     session_start();
     include 'database.php';
     if(isset($_POST['Save']))
     {
     	 $fullname = $_POST['fullname'];
     	 $city = $_POST['city'];
     	 $state = $_POST['state'];
     	 $gender =$_POST['gender'];
     	 $phone_number =$_POST['phone_number'];
     	 $login_id =$_SESSION['login_id'];
     	 $temp_name = $_FILES['profile_pic']['tmp_name'];
     	 $location = 'profile_pics/';




     	//$query = "insert into Users values(null,
     }
?>