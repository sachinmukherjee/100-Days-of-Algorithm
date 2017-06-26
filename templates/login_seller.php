<!DOCTYPE html>
<html>
<head>
	<title>Seller Login</title>
	<link rel="stylesheet" type="text/css" href="css/sellerlogin.css">
</head>
<body>
<div class="sellerlogin">
<h2>Please Login </h2>
<table>
<form action = "seller_authentication.php" method="post">
<tr>
	<td><label>Username</label></td>
	<td><input type="text" name="username"></td><td><span style="color:red;">* feild cannot be empty</span></td>
</tr>
<tr>
	<td><label>Password</label></td>
	<td><input type="password" name="password"></td><td><span style="color:red;">* feild cannot be empty</span></td>
</tr>
</form>
</table>
	<button type="submit" name="Login">Login</button>
</div>

</body>
</html>