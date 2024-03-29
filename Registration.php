<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="../ProjektiFinalWeb/CSS/Login_Registration.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>

    <div class="container">
        <div class="form-box">
            <form action="login.php" name="Formfill" id="registrationForm">
                <h2>Register</h2>
                <p id="result"></p>
                <div class="input-box">
                    <i class='bx bxs-user'></i>
                    <input type="text" name="Username" placeholder="Username">
                </div>
                <div class="input-box">
                    <i class='bx bxs-envelope'></i>
                    <input type="email" name="Email" placeholder="Email">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="Password" placeholder="Password">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="CPassword" placeholder="Confirm Password">
                </div>
                <div class="button">
                    <input type="submit" class="btn" value="Register">
                </div>
                <div class="group">
                    <span><a href="#">Forget-Password</a></span>
                    <span><a href="login.html">Login</a></span>
                </div>
            </form>
        </div>

        <div class="popup" id="popup">
            <ion-icon name="checkmark-circle-outline"></ion-icon>
            <h2>Thank you!</h2>
            <p>You have Registered Successfully!</p>
            <a href="login.html"><button onclick="CloseSlide()">OK</button></a>
        </div>
    </div>

    <script src="../ProjektiFinalWeb/JavaScript/Login_Registration.js"></script>

</body>
</html>