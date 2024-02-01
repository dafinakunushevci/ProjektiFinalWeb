<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../ProjektiFinalWeb/CSS/Login_Registration.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <form action="connection.php" method="post" name="Formfill" onsubmit="return validation()">
                <h2>Login In</h2>
                <p id="result"></p>
                <div class="input-box">
                    <i class='bx bxs-envelope'></i>
                    <input type="email" name="Email" placeholder="Email">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="Password" placeholder="Password">
                </div>
                <div class="button">
                    <input type="submit" class="btn" value="Login">
                </div>
            </form>
        </div>
    </div>

    <script src="../ProjektiFinalWeb/JavaScript/login.js"></script>
</body>
</html>
