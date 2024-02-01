<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Website</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <header class="header">
        <a href="#" class="logo">D&D</a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>
        <nav class="navbar">
            <a href="blog.html" style="--i:0">Blog</a>
            <a href="aboutus.html" style="--i:1">About us</a>
            <a href="gallery.html" style="--i:2">Gallery</a>
            <a href="Registration.html" style="--i:3">Log In</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Welcome to our Photography</h1>
        <p>We are passionate about capturing life's beautiful moments. With our unique style and state-of-the-art equipment, we strive to deliver stunning photographs that tell a story.</p>
        <a href="gallery.html" class="cta-button">Explore Gallery</a>
    </section>


    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 5</div>
            <img src="Photos/sea.jpg" alt="" style="width: 100%;" >
            <div class="text">Sea</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2 / 5</div>
            <img src="Photos/wedding.jpg" alt="" style="width: 100%;" >
            <div class="text">Wedding</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 5</div>
            <img src="Photos/mountain.jpeg" alt="" style="width: 100%;" >
            <div class="text">Mountain</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="Photos/horse.jpg" alt="" style="width: 100%;" >
            <div class="text">Animals</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">5 / 5</div>
            <img src="Photos/Mercedes AMG GT 63s.jpg" alt="" style="width: 100%;" >
            <div class="text">Cars</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align: center;">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Affiliate Program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Order status</a></li>
                        <li><a href="#">Payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact Information</h4>
                    <ul>
                        <li><a href="#">Email: info@ddphotography.com</a></li>
                        <li><a href="#">Phone: +383 49 123 456</a></li>
                        <li><a href="#">Address: 123 Main Street, Prishtine</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow us</h4>
                    <div class="social-links">
                        <a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
      <p>&copy; 2023 D&D Photography. All rights reserved.</p>
    </div>
    </footer>

    <script src="JavaScript/slidescript.js"></script>
</body>
</html>