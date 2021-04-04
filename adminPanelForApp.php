<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initail-scale=1.0">
    <meta name="description" content="web design for restaurant members">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="The Spice Lounge">
    <title>The Spice Lounge | Staffs Details</title>
    <link rel="stylesheet" href="./css/style.css">
    <style type="text/css">
           table{
           	border: 2px solid red;
           	background-color: #FFC;
           }
           th{
           	border-bottom: 5px solid #000;
           }
           td{
           	border-bottom: 2px solid #666;
           }
    </style>
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">The Spice</span> Lounge</h1>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container" style="overflow-x:auto;">
        <article id="main-col">
         	<h1 class="page-title">Staffs Information &nbsp;&nbsp;&nbsp; <a href="mainSignup.php" title="Add New Member"><img border="0" alt="Add New Member" src="img/add.png" width="50" height="50"> </a>
</h1>
          <table>
            <tr>
              <th>Employee ID</th>
              <th>Username</th>
              <th>Password</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>email</th>
              <th>Phone</th>
              <th>Address</th>  
              <th>Post</th>
              <th colspan="2" align="center">Actions</th>
            </tr>
            
         	<?php
          		include('db_connect.php');
          		$sqlget = "SELECT * FROM `employeeDetails`";
          		$sqldata = mysqli_query($connection, $sqlget) or die(mysqli_error($connection));

          		$row_count= mysqli_num_rows($sqldata);

          		while($row = mysqli_fetch_array($sqldata)){ 

          	  		echo"
                   <tr>
                  <td>".$row["employeeID"]."</td>
                   <td>".$row["username"]."</td>
                   <td>".$row["password"]."</td>
                   <td>".$row["firstname"]."</td>
                   <td>".$row["lastname"]."</td>
                   <td>".$row["email"]."</td>
                   <td>".$row["phone"]."</td>
                   <td>".$row["address"]."</td>
                   <td>".$row["post"]."</td>
                   <td><a href ='modifyAccount.php?id=$row[employeeID]&username=$row[username]&password=$row[password]&firstname=$row[firstname]&lastname=$row[lastname]&email=$row[email]&phone=$row[phone]&address=$row[address]'><input type='submit' value='Modify' id='button'></td>

                   <td><a href ='delete.php?employeeID=$row[employeeID]&username=$row[username]&password=$row[password]&fistname=$row[firstname]&lastname=$row[lastname]&email=$row[email]&phone=$row[phone]&address=$row[address]'><input type='submit' value='Delete' id='button'></td>
                   </tr>";
              } 
              echo"</table>";	
          	?>


          </table>
          <h1 class="page-title">Online Orders</h1>
          <div style="overflow-x:auto;">
            <table >
              <tr>
                <th>S/n</th>
                <th>Item Name</th>
                <th>Food Status</th>
                <th>Table No.</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Time</th>
                <th>Customer Request</th>
                
              </tr>

            <?php
                include('db_connect.php');
               // $sqlget = "SELECT * FROM `foodOrders`";

                $sqlget=" SELECT T1.foodName, T1.foodCategory, T1.serveType, T1.prepareTime, T1.price, T2.quantity, T2.tableNum, T2.orderStatus,T2.extraRequest FROM foodMenu T1, foodOrders T2 WHERE T1.foodID = T2.foodID ORDER BY T1.foodID asc";


                $sqldata = mysqli_query($connection, $sqlget) or die(mysqli_error($connection));
                $row_count= mysqli_num_rows($sqldata);

                $count=1;
                while($row = mysqli_fetch_array($sqldata)){       

  // Changing the status of food item based on its code 0,1,2,3 equals with waiting,cooking,Ready to serve and served.
                  $status=getItemStatus($row["orderStatus"]);
                  $itemFullName=getFullItemName($row["foodCategory"],$row["foodName"],$row["serveType"]);


                   echo"<tr>
                   <td>".$count."</td>
                   <td>".$itemFullName."</td>
                   <td>".$status."</td>
                   <td>".$row["tableNum"]."</td>
                   <td>".$row["quantity"]."</td>
                   <td>".$row["price"]."</td>
                   <td>".$row["prepareTime"]."</td>
                   <td>".$row["extraRequest"]."</td>
                   </tr>";
                   $count=$count+1;


                }  
             
                function getFullItemName($fCategory,$fName,$fServeType) {
                  $foodName= $fName." ".$fCategory." (".$fServeType.")";
                  return "$foodName";
                }

                function getItemStatus($status){
                  $str="";
                 if($status==0){
                    $str="Waiting";
                  }elseif($status==1){
                    $str="Cooking";
                  }elseif($status==2){
                    $str="Ready to Serve";
                  }else{
                    $str="Served";
                  }
                  return "$str";
                }

              ?>
            </table>
           </div>
        </article>
      </div>
    </section>

    <footer>
      <p>The Spice Lounge, Copyright &copy; 2020</p>
      <p>Minbhawan, Baneswor, Kathmandu</p>
    </footer>
  </body>
</html>

