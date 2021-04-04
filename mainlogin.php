<!DOCTYPE html>
<html>
<head>
<title>Want To Be Member</title>	
<link rel ="stylesheet" href ="./css/signinstyle.css">
</head>
<body>
    <h2><span>The Spice </span>Lounge</h2>
    <h3>Log in only if you are Member</h3>
<div class ="arrangement">
    <h2>Log in</h2>
	<form method="post" action="userverify.php" >
        <label >Post</label><br><br>
            <input type="radio" id="manager" name="post" value="manager" required>
            <label for="cashier">Manager</label><br>
            <input type="radio" id="cashier" name="post" value="cashier" required>
            <label for="cashier">Cashier</label><br>
            <input type="radio" id="chef" name="post" value="chef" required>
            <label for="chef">Chef</label><br>
            <input type="radio" id="waiter" name="post" value="waiter" required>
            <label for="waiter">Waiter</label><br><br>
        <label for="user_id">Username</label>
            <input type="text" name="user_id" id="user_id" required><br><br>
       
        <label for="user_pass">Password</label>
            <input type="password" name="user_pass" id="user_pass" required>

            <button type="submit" value="submitvalue" name="submitvalue">Log In </button>
    </form>
</div>
<a href = "mainSignup.php">Sign In</a><br><br>
<a href ="index.php">Go to Home</a>
</body>
</html>

<?php

   session_start();

   if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    header("Location: about.php");
   
}
 ?>
