<!DOCTYPE html>
<html>
<head>
	<title>Please Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>


<div class="login">
<h3>Login</h3>

<form action="authentication.php" method="post">
<table>
<tr>
<td><label for="email">Email id</label></td>
<td><input type="email" name="email"></td><td><span style="color: red;">* field cannot be empty</span></td>
</tr>

<tr>
<td><label for="password">Password</label></td>
<td><input type="password" name="password"></td><td><span style="color: red;">* field cannot be empty</span></td>
</tr>
</table>
<button type="submit" name="Login" value="submit">Login</button>

</form>

<a class="seller" href="login_seller.php">Seller Login</a>
<p>If new user then <a class="register" href="register.php">Click here</a> to register</p>
</div>
</body>
</html>