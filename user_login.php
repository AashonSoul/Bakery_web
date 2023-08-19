<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylings/user_login.css">
</head>
<body>
    <?php include "templates/nav.php" ?>
    <h1>This is login page</h1>
    <div id="large_cont">
        <div id="container">
            <div class="img">
                <img src="images/user_login_img.jpg" alt="">
            </div>
            <hr id="line">
            <div id="login">
                <div id="login_box">
                    <div class="input">
                        <label for="email">Email id:</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="input">
                        <label for="password">Password:</label>
                        <input type="text" name="password" id="password">
                    </div>
                    <div class="input">
                        <button id="btn">Login</button>
                    </div>
                    <div class="input">
                        Don't have an accout <a href="user_signup.php">create a new account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "templates/footer.php" ?>
</body>
</html>