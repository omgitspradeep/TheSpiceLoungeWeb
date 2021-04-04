<?php

 require('../db_connect.php');



$foodID=(int)$_POST["foodID"];


 // CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * from custFeedbacks WHERE `foodID`=$foodID;";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
$json_array=array();

while($row=mysqli_fetch_assoc($result)){
	array_push($json_array,$row);
}
echo(json_encode($json_array));

 ?>