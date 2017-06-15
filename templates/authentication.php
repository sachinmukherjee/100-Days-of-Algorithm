<?php 
    session_start();
    include('database.php');
    
    if(isset($_POST['submit']) and isset($_POST['email']) and isset($_POST['password']))
    {
    	echo $email = $_POST['email'];
    	echo $password = $_POST['password'];
        
        $sql = "select email,pass from Login where email=$email and pass=$password;";
        $result=mysqli_query($conn, $sql);
        $arr = mysqli_fetch_assoc($result);
        
        //if(mysqli_num_rows($result))
        
          $arr = mysqli_fetch_assoc($result);
          if($email==$arr['email'] and $password==$arr['pass'])
          {
        	  echo "Logged In Sucessfully";
        	  //header("Location: home.php");
        	  //$_SESSION['loggedin']=true;
          }
          else
          {
        	echo "User Name or Password Wrong";
        	header("Location:login.php");
          }

         /*else
         {
         	echo "Email doesnot Exist";
         	header("Location: register.php");
         }
         */


    }

?>