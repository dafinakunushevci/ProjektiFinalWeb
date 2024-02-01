<?php
session_start();

// Fshij te gjitha variablat e sesionit
$_SESSION = array();

// Shkaterro sesionin
session_destroy();

// Ridrejto perdoruesin ne faqen e hyrjes
header("Location: login.php");
exit();
?>
