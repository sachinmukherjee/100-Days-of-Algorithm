<!DOCTYPE html>
<html>
<head>
	<title>Base</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>


<div class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a href="#" style="position: relative;top:0.08cm;font-size:0.8cm; color: white;">Online Auction</a>
</div>
<ul class="nav navbar-nav navbar-right">
<li><a href="home.php" style="color:white">Home</a>
<li><a href="view_profile.php" style="color:white">Profile</a></li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white">Auctions<span class="caret"></span></a>
	    <ul class="dropdown-menu">
    	      <li><a href="ongoing_auction.php">Ongoing</a></li>
    	      <li><a href ="upcoming_auction.php">Upcoming</a></li>
     </ul>
     </li>
<li><a href="purchased.php" style="color:white">Purchased</a></li>
<li><a class="btn btn-success" href="logout.php" style="color:white">Logout</a></li>
<li><a class="btn btn-success" style="color:white" href="login.php">Login/Sign Up</a></li>
</li>
</ul>
</div>
</div>

</body>
</html>