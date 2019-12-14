<?php

session_start();

echo "HI, " . $_SESSION['adminname'];
echo "\n\n Welcome to Admin Panel";

if (!isset($_SESSION['adminid'])) 
{
    header("location:login.php");
}

echo "<br><a href='change-password.php'> Change Password </a> | ";
echo "<a href='logout.php'> Logout </a>";
?>
