<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>

<div class="register">
<h3> Register here</h3>
<form action="registration_authentication.php" method="post">
<table>
<tr>

<td><label for="email">Email</label></td>
<td><input type="email" name="email"></td><td><span style="color: red;">* feild cannot be empty</span></td>
</tr>
<tr>
<td><label for="password" name="password">Password</label></td>
<td><input type="password" name="password"></td><td><span style="color: red;">* feild cannot be empty</span></td>
</tr>
</table>
<button type="submit" name="submit" value="submit">Register</button>
</form>
</div>
</body>
</html>
