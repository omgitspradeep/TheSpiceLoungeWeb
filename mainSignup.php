<!DOCTYPE html>
<html>
<head>
<title>Want To Be Member</title>	
<link rel ="stylesheet" href ="./css/signinstyle.css">
</head>
<body>
    <h2><span>The Spice </span>Lounge</h2>
    <h3>Welcome to be the part of the family.</h3>
<div class ="arrangement">
    <h2 style="color:blue;"> Please Fill The Employee Details.</h2>
 




    <form action="" method="POST">
        <label>Username</label>
            <input type="text" name="username" required><br><br>
        <label>Password</label>
            <input type="password" name="password" required><br><br>
        <label>First Name</label>
            <input type="text" name="firstname" required><br><br>
        <label>Last Name</label>
            <input type="text" name="lastname" required><br><br>
        <label>E-mail</label>
            <input type="text" name="email" required><br><br>
        <label>Phone Number</label>
            <input type="text" name="phone" required><br><br>
        <label>Address</label>
            <input type="text" name="address" required><br><br>
        <label>Post Apply</label><br><br>

            <input type="radio" id="cashier" name="post" value="cashier" required>
            <label for="cashier">Cashier</label><br>
            <input type="radio" id="chef" name="post" value="chef" required>
            <label for="chef">Chef</label><br>
            <input type="radio" id="waiter" name="post" value="waiter" required>
            <label for="waiter">Waiter</label><br><br>

        <button type="submit" value="submit" name="submit">Add Member</button>

    </form>
</div>
<a href ="activityAdmin.php">Admin Panel</a><br><br>
</body>
</html>

<?php
    require('db_connect.php');
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $pos=$_POST['post'];


        //  echo "<script>alert('$username;;$password;;$firstname;;$lastname;;$email;;$address;;$phone;;$pos')</script>";

       // $sql = "INSERT INTO `employeeDetails`(username,password,firstname,lastname,email,address,phone,post,employeeID) VALUES (`$username`, `$password`, `$firstname`, `$lastname`, `$email`, `$address`, $phone, '$pos', NULL)";


        $sql="INSERT INTO `employeeDetails` (`username`, `password`, `firstname`, `lastname`, `email`, `phone`, `address`, `post`, `employeeID`) VALUES ('$username', '$password', '$firstname', '$lastname', '$email', '$phone', '$address', '$pos', NULL)";

        $sqldata = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        if($sqldata){
            header("Location: activityAdmin.php");
        }
        else
        {
            echo "<script>alert('Something went wrong. New member is not added successfully')</script>";
        }
    }
?>