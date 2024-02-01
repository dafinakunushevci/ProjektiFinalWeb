<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c0392b;
        }

        .fa {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <h2><i class="fas fa-chart-bar"></i> Welcome to the Dashboard</h2>
    <p>You are logged in as <?php echo $_SESSION['Email']; ?>.</p>

    <button onclick="window.location.href='logout.php'"><i class="fas fa-sign-out-alt"></i> Sign Out</button>
</body>
</html>
