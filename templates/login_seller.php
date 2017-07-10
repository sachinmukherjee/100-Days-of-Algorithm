<!DOCTYPE html>
<html>
<head>
	<title>Seller Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<h2 style="position: relative; top:1cm; left:1.5cm; font-weight: bolder;">Please Login </h2>

<form action = "seller_authentication.php" method="post" class="form" role="form" style="position: relative; top:2cm;>
<div class="form-group">
	<label>Username</label>
	<input type="text" name="username" class="form-control" style="width: 8cm;"><span style="color:red;">* feild cannot be empty</span>
<div class="form-group">

<div class="form-group">
	<label>Password</label>
	<input type="password" name="password" class="form-control" style="width: 8cm;"><span style="color:red;">* feild cannot be empty</span>
</div>
	<button type="submit" name="Login" class="btn btn-success">Login</button>
</form>
</div>

</body>
</html>