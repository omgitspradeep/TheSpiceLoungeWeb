<?php
 function getOrdersWithTable($connection) {

 	$queryTable = "SELECT * FROM `tableInformation`";
	$tableResult = mysqli_query($connection, $queryTable) or die(mysqli_error($connection));
	$tableOutput=mysqli_fetch_all($tableResult,MYSQLI_ASSOC);

	/*echo"<pre>";
	print_r($output);*/
	$main_array=array();

	$index=0;
	while ( $index < sizeof($tableOutput)) {

		/* Here we add "orders" key in each row so that all the orders for each table can be stored as arrays 
		"$tableOutput" is a array which contains array in each index (i.e. each row from "tableInformation" table is a array).

		*/

		$row_array=$tableOutput[$index];
		if($row_array["status"]==1){

			/*If the table status is "1" (where, 1: busy table, 2: free table)) bring all the list of ordered items*/

			$tableNumber= (int)$row_array["tableNum"];
			$queryOrders = "SELECT * FROM `foodOrders` where tableNum=$tableNumber and checkout=0 ";
			$ordersResult = mysqli_query($connection, $queryOrders) or die(mysqli_error($connection));
			$ordersOutput = mysqli_fetch_all($ordersResult,MYSQLI_ASSOC);

			$row_array["orders"]=$ordersOutput;

		}

		$main_array[$index]=$row_array;
		$index=$index+1;

	}

	$json_data=json_encode($main_array);

	echo($json_data);

 }

 function getFoodMenu($connection){
	 $query = "SELECT * FROM `foodMenu`";
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);
	$json_array=array();

	while($row=mysqli_fetch_assoc($result)){
		array_push($json_array,$row);
	}
	echo(json_encode($json_array));
 }


function getAllFoodOrders($connection){
	$query = "SELECT * FROM `foodOrders` where checkout=0";
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);
	$json_array=array();

	while($row=mysqli_fetch_assoc($result)){
		array_push($json_array,$row);
	}
	echo(json_encode($json_array));

 }


  ?>

