<?php
session_start();

if(isset($_SESSION['user'])!="")
{
 header("Location: index.php");
}
else if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}

if(isset($_GET['logout']))
{

 // remove all session variables
 session_unset();

// destroy the session
 session_destroy();
 unset($_SESSION['user_id']);
 header("Location: index.php");
}
?>