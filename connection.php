<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photography_database";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

var_dump($_POST);

$Email = isset($_POST['Email']) ? $_POST['Email'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

$conn = new mysqli('localhost', 'root', '', 'photography_database');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO hyrjet (Email, Password) VALUES (?, ?)");
    $stmt->bind_param("ss", $Email, $Password);
    $stmt->execute();

    $affected_rows = $stmt->affected_rows;

    if ($affected_rows > 0) {
        echo "Registration Successfully. Affected rows: $affected_rows";
    } else {
        echo "Registration Failed. No rows affected.";
    }

    $stmt->close();
    $conn->close();
}
?>
