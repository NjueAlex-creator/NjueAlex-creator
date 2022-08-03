<?php
$dbHost = "localhost";
$dbUsername ="root";
$dbPassword ="";
$dbname = "registration";

	$conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);
	if($conn->connect_error){
		die("connection failed : ".$conn->connect_error);
	}
	echo "Connected successfully";
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<center>
<h2>Login here</h2>
<form method="post">
	<table>
		<tr>
			<td>
				<label>Email</label>
				<input type="text" name="email" id="email" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Password</label>
				<input type="text" name="password" id="password" required>
			</td>
		</tr>

	</table>
	<input type="submit" name="submit" value="login" />
</form>
</center>
</body>
</html>