<?php

include 'conn.php';

$id=$_GET['id'];

$q=" DELETE FROM `crudtable` WHERE password=$id ";

mysqli_query($con,$q);


header('location:display.php');


?>