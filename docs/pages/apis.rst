####
APIS
####


1. Cashier
==========

.. csv-table:: 
    :header: "Function", "Request type"
    :widths: 80,20

    "List of ordered items (3)", "GET"
    "Checkout", "PUSH"
    "Table Information", "GET"

|
|
|


2. Customer
===========

.. csv-table:: 
    :header: "Function", "Request type"
    :widths: 80,20

    "Menu Item Display (3) ", "GET" 
    "Place Order (2)", "POST"
    "Feedbacks", "POST"
    "Feedbacks (2)", "GET"
    "Change in order's status (3)", "PUSH"
    "Login","GET"


|
|
|


3. Waiter
=========

.. csv-table:: 
    :header: "Function", "Request type"
    :widths: 80,20

    "Menu Item Display (3)", "GET"
    "Place Order (2)", "POST"
    "Feedbacks (2)", "GET"
    "List of ordered items (3)", "GET"
    "Change in order's status (3)", "PUSH"
    "Login","GET"


|
|
|
    

4. Chef 
=======

.. csv-table:: 
    :header: "Function", "Request type"
    :widths: 80,20

    "Delete Item", "POST"
    "Edit Item", "POST"
    "Add Item", "POST"
    "Menu Item Display (2) ", "GET"
    "List of ordered items (3) ", "GET"
    "Change in order's status (3) ", "PUSH"
    "Login","GET"

|
|
|

Project apis
============

Location of all apis is `backendApis <https://github.com/omgitspradeep/TheSpiceLoungeWeb/tree/master/apis>`_

Ex:
 "http://localhost/PROJECTS/TheSpiceLounge/apis/allFoodOrders.php"
