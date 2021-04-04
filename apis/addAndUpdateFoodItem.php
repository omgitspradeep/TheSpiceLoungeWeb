<?php

 require('../db_connect.php');
 require_once('importantFunctions.php');

/* $data is a array.
 When json is passed in post then it is stored in local file before it is put in $POST and $REQUEST. 
 So we need to get it and decode it.*/

$data = json_decode(file_get_contents('php://input'), true);   
// print_r($data); print_r prints array

$fID=(int)$data["foodID"];   // when null is cast in int data type it gives 0.
$fCategory=$data["foodCategory"];
$fName=$data["foodName"];
$sType=$data["serveType"];
$fDesc=$data["Description"];
$itemPrice=(int)$data["price"];
$rStar=(int)$data["ratingStar"];
$pTime=(int)$data["prepareTime"];


if($fID==0){
	// It is for adding new item in menu
	$query="INSERT INTO `foodMenu`(`foodID`, `foodCategory`, `foodName`, `serveType`, `Description`, `image`, `price`, `ratingStar`, `prepareTime`) VALUES (null,'$fCategory','$fName','$sType','$fDesc',null,'$itemPrice','$rStar','$pTime')";
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

	if($result==1){
		getFoodMenu($connection);

	}else{ echo(json_encode($result)); }

}else{
	// It is for updating food item
//UPDATE `foodMenu` SET `foodCategory`=,`foodName`=,`serveType`=,`Description`=,`image`=,`price`=,`ratingStar`=,`prepareTime`= WHERE foodId=26

	$query2="UPDATE `foodMenu` SET `foodCategory`='$fCategory',`foodName`='$fName',`serveType`='$sType',`Description`='$fDesc',`image`=null,`price`='$itemPrice',`ratingStar`='$rStar',`prepareTime`='$pTime' WHERE foodId='$fID'";
	$result2 = mysqli_query($connection, $query2) or die(mysqli_error($connection));

		if($result2==1){
			getFoodMenu($connection);

		}else{ echo(json_encode($result)); }
}







?>