<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="../ProjektiFinalWeb/CSS/contactus.css">
</head>
<body>

    <div id="overlay">
        <form id="contactForm">
            <h1>Contact Us</h1>
            <label for="name">Name:</label>
            <input type="text" id="name" placeholder="Your name">
            <small class="error"></small>

            <label for="email">Email:</label>
            <input type="text" id="email" placeholder="Your email">
            <small class="error"></small>

            <label for="message">Message:</label>
            <textarea id="message" placeholder="Your message" rows="6"></textarea>
            <small class="error"></small>

            <div class="center">
                <a href="index.html"><button type="submit" class="submit-button">Send Message</button></a>
                <p id="success"></p>
            </div>
        </form>
    </div>

    <script src="../ProjektiFinalWeb/JavaScript/contactus.js"></script>

</body>
</html>
