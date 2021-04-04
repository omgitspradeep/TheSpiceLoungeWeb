
 <?php

 require('../db_connect.php');
 require_once('importantFunctions.php');

 getOrdersWithTable($connection);

 ?>



<!-- 1. We bring "tableNum","tableCapacity","status" form table "tableInformaation"
2. Then, we check if table is free or busy
3. If table is busy then we bring all column data for that particular table i.e. if table1 status is "1" then bring all orders for table1
4. Convert the received orders in array.
5. Finally,add those received orders in each row of associate array (i.e. $main_array) with "orders" key

SAMPLE:
[
 {
    "tableNum": "2",
    "tableCapacity": "5",
    "status": "1",
    "orders": [
      {
        "orderID": "2",
        "foodID": "7",
        "tableNum": "2",
        "orderStatus": "1",
        "quantity": "3",
        "extraRequest": "with coke"
      }
    ]
  },
  {
    "tableNum": "3",
    "tableCapacity": "4",
    "status": "0"
  }
]  -->

