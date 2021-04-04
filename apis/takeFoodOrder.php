<?php

 require('../db_connect.php');
 require_once('importantFunctions.php');



$foodID=(int)$_POST["foodID"];
$tNum=(int)$_POST["tableNum"];
$oQuantity=(int)$_POST["quantity"];
$eRequest=$_POST["extraRequest"];


 // CHECK FOR THE RECORD FROM TABLE
$query = "INSERT INTO `foodOrders`(`orderID`, `foodID`, `tableNum`, `orderStatus`, `quantity`, `extraRequest`,`checkout`) VALUES (NULL,'$foodID','$tNum',0,'$oQuantity','$eRequest',0)";
$result1 = mysqli_query($connection, $query) or die(mysqli_error($connection));

if($result1==1){

	// When food order is successfully placed.  Update the table status as 1 

	$queryForTableStatusUpdate = "UPDATE `tableInformation` SET `status`=1 WHERE `tableNum`='$tNum'";
	$result2 = mysqli_query($connection, $queryForTableStatusUpdate) or die(mysqli_error($connection));

	if($result2==1){

		// when table status is updated as 1
		getOrdersWithTable($connection);
	}else{
			echo(json_encode($result));
		}
	
}else{
	echo(json_encode($result));
}

 ?>