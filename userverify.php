<?php  

session_start();
require('db_connect.php');

    
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];
$post = $_POST['post'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `employeeDetails` WHERE username='$username' and password='$password' and post ='$post'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

//condition applying if there is repetetion of username and cashier.
if ($count == 1){


$_SESSION['username']=$username;

//Login Credentials verification
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
if (($post = "chef" or $post = "waiter" or $post = "cashier") and $username != "admin"){
	header("Location: homeStaff.php");
}
elseif($post = "manager" and $username = "admin"){
	header("Location: adminPage.php");
}
else{
	echo "Please try again";
}

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//Invalid Login Credentials verification
}
mysql_close($connection); // Closing Connection
?>