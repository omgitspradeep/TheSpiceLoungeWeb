 <?php

 require('../db_connect.php');




$cN=$_POST["custName"];
$fMsg=$_POST["feedbackMessage"];
$rS=(int)$_POST["ratingStarCust"];
$fID=(int)$_POST["foodID"];

 // CHECK FOR THE RECORD FROM TABLE
$queryToAddFB ="INSERT INTO `custFeedbacks`(custName, feedbackMessage, ratingStarCust,foodID) VALUES ('$cN','$fMsg','$rS','$fID')";

$resultAfterFbADD = mysqli_query($connection, $queryToAddFB) or die(mysqli_error($connection));
if($resultAfterFbADD==1){
	echo(json_encode($resultAfterFbADD));

}else{
	echo(json_encode($resultAfterFbADD));
}

 ?>