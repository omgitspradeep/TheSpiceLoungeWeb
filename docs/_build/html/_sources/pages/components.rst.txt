============================
Components of Restuarant App
============================

1. Manager
==========
    * He can view all the food orders 
    * He can view all the table status (i.e. free or occupied)
    * He can add, remove amd modify employees.

2. Cashier
==========
    * Can view all the table status (i.e. free or occupied).
    * Can view all food orders of occupied table.
    * Check out the customer and free the table.

3. Chef
=======
    * Can view list of all food orders.
    * Can change the order status of food i.e. waiting to cooking and cooking to cooked.
    * Can Add new food item in food menu.
    * Can Delete food item from food menu.
    * Can Modify food item of food menu.

4. Waiter
=========
    * Can change the order status of food i.e. cooked to served.
    * Can cancel food orders order is still in waiting status.
    * Can place order onbehalf of customer
    * Can view feedbacks of food items.
    * Can free the table.

* Similarly, Apart from Restuarant's employees Anonymous customer can considered as a component*
  
5. Customer
===========
    * No login required.
    * Can view Orders of different table. (It is not advised to put this function here.)
    * Can order food directly to chef without the aid of waiter.
    * Can view food review befor order of any food.
    * View order status of the ordered foods. (Like waiting, cooking, cooked or served)
    * Can cancel the order only if order is still in waiting status.
    * Can give feedback and rate stars only to served items.