

<?php
	
	require("db_connect.php");
	$id=$_GET['id'];
	$username=$_GET['username'];
	$password=$_GET['password'];
	$firstname=$_GET['firstname'];
	$lastname=$_GET['lastname'];
	$email=$_GET['email'];
	$phone=$_GET['phone'];
	$address=$_GET['address'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Modify Account | Admin</title>	
<link rel ="stylesheet" href ="./css/signinstyle.css">
<link rel ="stylesheet" href ="./css/toast.css">

</head>
<body>
    <h2>The Spice Lounge</h2>
    <h3>Modify Account Information</h3>
<div class ="arrangement">
	<form action="" method="GET">
		<label> Staff ID</label>
            <input type="text" name="id" value="<?php echo "$id" ?>"readonly><br><br>
    	<label>Username</label>
            <input type="text" name="username" value="<?php echo "$username" ?>" name="username" required><br><br>
        <label>Password</label>
            <input type="password" value="<?php echo "$password" ?>"name="password" required><br><br>
        <label>First Name</label>
            <input type="text" value="<?php echo "$firstname" ?>"name="firstname" required><br><br>
        <label>Last Name</label>
            <input type="text" value="<?php echo "$lastname" ?>" name="lastname" required><br><br>
        <label>E-mail</label>
            <input type="text" value="<?php echo "$email" ?>"name="email" required><br><br>
        <label>Phone Number</label>
            <input type="text" value="<?php echo "$phone" ?>"name="phone" required><br><br>
        <label>Address</label>
            <input type="text" value="<?php echo "$address" ?> "name="address" required><br><br> 
        <button input type="submit" id="button" name="submit">Modify</button>
    </form>
</div>
</body>
</html>

<?php
	if(isset($_GET['submit']))
		{
			$id = $_GET['id'];
			$username = $_GET['username'];
			$password = $_GET['password'];
			$firstname = $_GET['firstname'];
			$lastname = $_GET['lastname'];
			$email = $_GET['email'];
			$phone = $_GET['phone'];
			$address = $_GET['address'];
	
			$query = "UPDATE `employeeDetails` SET username='$username',password='$password',firstname='$firstname',lastname='$lastname',email='$email',phone='$phone',address='$address' WHERE employeeID='$id'";

			$sqldata = mysqli_query($connection,$query);
			if($sqldata)
			{
				header("Location: activityAdmin.php");

			}
			else
			{
				echo "<script>alert('Record update unsucessful')</script>";
			}
		}
?>