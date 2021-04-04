<?php

 require('../db_connect.php');
 require_once('importantFunctions.php');

$tNum=$_POST["tableNum"];
$query = "UPDATE foodOrders T1,tableInformation T2 SET T1.checkout=1, T2.status=0 where T1.tableNum='$tNum' and T2.tableNum='$tNum'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));



if($result==1){

	// SAME DATA

	getOrdersWithTable($connection);

    // SAME DATA ENDS HERE
}else{
	echo(json_encode($result));
}
?>