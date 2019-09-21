<?php

include 'conn.php';

if(isset($_POST['done'])){

	$username=$_POST['username'];
	$password=$_POST['password'];

	$q= "select * from crudtable "; 

	$query=mysqli_query($con,$q);
}

?>

<!DOCTYPE html>

<html>

<head>

	<title>crud operation</title>
</head>
<body>
	<h1>Table records</h1>

	<table>

		<tr>

			<th>Username</th>
			<th>Password</th>
			<th>Delete</th>
			<th>Update</th>

		</tr>

		<?php

		include 'conn.php';


		$q= "select * from crudtable "; 

		$query=mysqli_query($con,$q);

		while ($res= mysqli_fetch_array($query)) {

			?>



			<tr>

				<td><?php echo $res['username']; ?></td>
				<td><?php echo $res['password']; ?></td>
				<td><button><a href="delete.php?id=<?php echo $res['password']; ?>" >Delete</a></button></td>
					<td><button><a href="update.php?id=<?php echo $res['password']; ?>" >Update</a></button></td>


					</tr>
					<?php
				}
				?>
		</table>
	</body>
	</html>
