<?php

$servername = "localhost";
$username1 = "root";
$password1 = "";
$database1 = "photography1";

$conn = new mysqli($servername, $username1, $password1, $database1);

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful!";
}

?>
