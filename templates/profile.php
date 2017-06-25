<?php 
     session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile </title>
	<link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>

<div class="profile">

<form action="profile_process.php" method="post" enctype="multipart/form-data">

<h3> Enter the details</h3>

<table>

<tr>
	<td><label for="profile_pic"> Profile Pic</label></td>

	<td><input type="file" name="profile_pic"></td><td><span style="color: red;">*</span></td>
</tr>
<tr>
	<td><label for="fullname">Fullname</label></td>
	<td><input type="text" name="fullname"></td><td><span style="color: red;">*</span></td>
</tr>
<tr>
	<td><label for="email">Email</label></td>
	<td><input type="email" name="email"></td><td><span style="color: red;">*</span></td>
</tr>
<tr>
	<td><label>City</label></td>
	<td><input type="text" name="city"></td><td><span style="color: red;">*</span></td>
</tr>
<tr>
    <td><label>State</label></td>
	<td><input type="text" name="state"></td><td><span style="color: red;">*</span></td>
</tr>
<tr>
	<td><label>Phone Number</label></td>
	<td><input type="text" name="phone_number"></td><td><span style="color: red;">*</span></td>
</tr>
<tr>
	<td><label>Gender</label></td>

	<td><input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female</td>
	<td><span style="color: red;">*</span></td>
</tr>
</table>

	<p style="color: red;">* field cannot be empty</p>

	<input type="submit" name="Save">
	
</form>
</div>>
</body>
</html>