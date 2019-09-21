<?php

include 'conn.php';



if(isset($_POST['done'])){

	$username=$_POST['username'];
	$password=$_POST['password'];
	$old_password = $_GET['id'];
	$q= "update crudtable set username='$username',password=$password where password=$old_password"; 

	$query=mysqli_query($con,$q);

	header('location:display.php');
}


?>




<!DOCTYPE html>

<html>

<head>

	<title>updated operation</title>
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