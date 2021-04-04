<?php
	// creating connection with the database
	$connection = mysqli_connect('localhost', 'root', '');

	//make sure if the connection is proper
	if (!$connection){
    	die("Database Connection Failed" . mysqli_error($connection));
	}
	//selecting the respective database
	$select_db = mysqli_select_db($connection, 'id14236590_sujan');

	//Checking if the database selction failed
	if (!$select_db){
    	die("Database Selection Failed" . mysqli_error($connection));
	}
?>