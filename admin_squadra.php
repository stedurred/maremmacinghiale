<?php
session_start();

if(isset($_GET['inserisci']))
{
 header("Location: inserisci_squadra.php");
}
if(isset($_GET['modifica']))
{
 //Modifica Squadra User
 header("Location: user_squadra.php");
}
?>