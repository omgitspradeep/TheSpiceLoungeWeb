


<?php
require('db_connect.php');
$id=$_GET['employeeID'];

$query = "DELETE FROM `employeeDetails` WHERE employeeID='$id'"; 
$result = mysqli_query($connection,$query) or die ( mysqli_error());


$sqldata = mysqli_query($connection,$query);
	if($sqldata)
	{
		header("Location: activityAdmin.php");
	}
	else
	{
		echo "<script>alert('Record delete unsucessful')</script>";
	}

