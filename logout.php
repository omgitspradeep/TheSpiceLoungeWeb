<?php
session_start();
// Destroying All Sessions browsed
if(session_destroy())
{
// Redirecting To Login Page
header("Location: mainlogin.php");
}
?>