<?php
 require('../db_connect.php');
 require_once('importantFunctions.php');

$fId=(int)$_POST["foodID"];
$query="DELETE FROM `foodMenu` WHERE foodID='$fId'";
$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
if($result){
	getFoodMenu($connection);
}else{
	echo(json_encode($result));
}

?>