<!DOCTYPE html>
<html>
<head>
	<title>Seller Login</title>
</head>
<body>
<h2>Please Login </h2>
<form action = "seller_authentication.php" method="post">
	<label>Username</label>
	<input type="text" name="username"><span style="color:red;">* feild cannot be empty</span><br><br>
	<label>Password</label>
	<input type="password" name="password"><span style="color:red;">* feild cannot be empty</span><br><br>
	<input type="submit" name="Login">
</form>

</body>
</html>