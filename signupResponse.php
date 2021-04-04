<?php
   require("db_connect.php");
   $username = $GET['username'];

 
   /*if(isset($GET['submit'])){
      $password = $GET["password"];
      $firstname = $GET["firstname"];
      $lastname = $GET["lastname"];  
      $email = $GET["email"];
      $address = $GET["address"];
      $phone = $GET["phone"];
      $post =$GET["post"];
   }  */ 

   echo "<script>alert('Here       $username ')</script>";


 //$sql = "INSERT INTO `employeeDetails` (username,password,firstname,lastname,email,address,phone,post,employeeID) VALUES (`$username`, `$password`, `$firstname`, `$lastname`, `$email`, `$address`, $phone, '$post', NULL)";



  // INSERT INTO `employeeDetails` (`username`, `password`, `firstname`, `lastname`, `email`, `address`, `phone`, `post`,`employeeID`) VALUES (`username`, `password`, `firstname`, `lastname`, `email`, `address`, 12345,1, NULL) 
/*
   $sqldata = mysqli_query($connection,$sql);
      if($sqldata)
      {
         header("Location: activityAdmin.php");
      }
      else
      {
         echo "<script>alert('Something went wrong. New member is not added successfully')</script>";
      }*/
      
?>