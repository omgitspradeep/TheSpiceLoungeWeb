 <?php

 require('../db_connect.php');
 require_once('importantFunctions.php');


$orID=$_POST["orderID"];
$oS=(int)$_POST["orderStatus"];


 // CHECK FOR THE RECORD FROM TABLE
$query ="UPDATE `foodOrders` SET `orderStatus`= '$oS' WHERE `orderID`='$orID'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
if($result==1){
	 getAllFoodOrders($connection);

}else{
	echo(json_encode($result));
}

 ?>