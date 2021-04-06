==========
Logic Flow
==========

Project structure with Activity, fragment and classes
=====================================================


.. figure:: images/start.png
   :alt: Project control flow

   Flow of control in diffrent components


Here, what we can see is: 
As app opens we transit automatically from StartActivity to MainActivity.
MainActivity has 4 fragments.
Each fragments leads to diffrent screens.
*Entertainment* fragment redirects us to webview that offers us recipes of different food items.
*AboutUs* fragment describes the Restuarant.
*Login* (i.e. login) fragment can take us to CashierActivity, AdminActivity, WaiterAcivity and ChefActivity.
*HomeFragment*(i.e home) displays all the food items with the help of *foodmenu* adapter. Upon click on food item we are transit to *FoodOrderActivity*. This activity uses model class *CustomerFeedback* with ability to submit feedbacks as hidden.
Similarly, *HomeFragment* has a fab element, upon click on that fab - we are taken to another fragment called *CustomerOrderedListFragement*. It displays the ordered list with the help of adapter *OrderedListAdapterCust*. It also allows us to cancel the food order until food status is "WAITING". Upon click we are transit to model class *CustomerFeedbackActivity* with abitlity to submit feedbacks.

We'll further discuss on logic of different staffs.


1. CashierActivity
==================

.. figure:: images/cashier.png
   :alt: Cashier control flow

   Flow of control for cashier component in Project

Here, what we can see is:


   


2. AdminActivity
================

Admin is redirect to WebView which views the web version of admin panel.
It is the Manager component of Restuarant.


3. WaiterActivity
=================

.. figure:: images/waiter.png
   :alt: Waiter control flow

   Flow of control for waiter component in Project

Here, what we can see is:


4. ChefActivity
===============

.. figure:: images/chef.png
   :alt: Chef control flow

   Flow of control for Chef component in Project

Here, what we can see is:
