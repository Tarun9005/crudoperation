<?php

include 'conn.php';

if(isset($_POST['done'])){

	$username=$_POST['username'];
	$password=$_POST['password'];

	$q= "INSERT INTO `crudtable`(`username`, `password`) VALUES ('$username', '$password')"; 

	$query=mysqli_query($con,$q);
}

?>



<!DOCTYPE html>

<html>

<head>

	<title>crud operation</title>
</head>
<body>
	<form method="post">
         
         <label>Username</label>
		<input type="text" name="username">
		<br>
		<br>
		<label>password</label>
		<input type="text" name="password">
		<br>
		<br>
		<button type="submit" name="done">Submit</button>
	</form>
</body>