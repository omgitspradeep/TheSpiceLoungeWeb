<?php

 require('../db_connect.php');



$usr=$_POST["usrname"];
$pass=$_POST["pass"];

 // CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * from employeeDetails WHERE username ='$usr' AND password='$pass'";
//print_r($query)

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
//*$json_array=array();

echo json_encode(($result->fetch_assoc()));
 ?>