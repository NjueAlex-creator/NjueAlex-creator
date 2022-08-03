<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>
	<!-- connection to the db -->
	<?php
$dbHost = "localhost";
$dbUsername ="root";
$dbPassword ="";
$dbname = "registration";

	$conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);
	if($conn->connect_error){
		die("connection failed : ".$conn->connect_error);
	}
	// for posting retrives data from the inputs
if(isset($_POST['submit'])){
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
// inserting into db
	$sql="insert into registration(firstName,lastName,email,password,number) values('$firstName','$lastName', '$email', '$password','$number')";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo 'success';
	}

	else{
		die(mysql_error($conn));

	}
	}
?>
	<center>
	<form  method="post">
		   <h1>Registration</h1>
		   <table>
					<p>Fill up the form with correct values.</p>
					<tr>
						<td><label for="firstname"><b>Fisrt name:</b></label></td>
					</tr>
					<tr>
						<td><input type="text" name="firstName" id="firstName" required></td>
					</tr>
					<tr>
						<td><label for="Lastname"><b>Last name:</b></label></td>
					</tr>
					<tr>
						<td><input type="text" name="lastName" id="lastName" required></td>
					</tr>
					<tr>
						<td><label for="email"><b>Email Adress:</b></label></td>		
					</tr>
					<tr>
						<td><input type="email" name="email" id="email"  required></td>
					</tr>
					<tr>
						<td><label for="Password"><b>Password:</b></label></td>
					</tr>
					<tr>
						<td><input type="Password" name="password" id="password" required></td>
					</tr>
					<tr>
						<td><label for="number"><b>number:</b></label></td>
					</tr>
					<tr>
						<td><input type="number" name="number" id="number" required></td>
					</tr>

				</table>
				<input type="submit" name="submit" value="signup" />
			</form>

</center>
</body>
</html>