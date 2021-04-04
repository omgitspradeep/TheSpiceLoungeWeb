 <?php

 require('../db_connect.php');
 require_once('importantFunctions.php');

$orID=(int)$_POST["orderID"];
$tN=(int)$_POST["tableNum"];


$query1="DELETE FROM `foodOrders` WHERE orderID='$orID'";
$result1 = mysqli_query($connection, $query1) or die(mysqli_error($connection));

if($result1==1){
	$query2="SELECT * FROM `foodOrders` WHERE tableNum='$tN'";
	$result2 = mysqli_query($connection, $query2) or die(mysqli_error($connection));
	$count = (int)mysqli_num_rows($result2);
	if($count>0){
		// If table has other food orders then its status must stay busy
		getOrdersWithTable($connection);
		echo("Table still has orders");

	}else{

		// If table has other no other orders then its status must be free

		$query3="UPDATE `tableInformation` SET `status`= 0 WHERE `tableNum`='$tN'";
		$result3 = mysqli_query($connection, $query3) or die(mysqli_error($connection));
		if($result3==1){
			getOrdersWithTable($connection);
			echo("Table status changed");
		}else{

		}
	}
}else{
	echo(json_encode($result1));
}


 ?>