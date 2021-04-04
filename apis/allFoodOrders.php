
 <?php

 require('../db_connect.php');
 require_once('importantFunctions.php');

 // CHECK FOR THE RECORD FROM TABLE
 // checkout --> 0: bill not paid, 1: bill paid
 getAllFoodOrders($connection);

 ?>