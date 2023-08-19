<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="stylings/user_signupp.css">
</head>
<body>
    <?php include "templates/nav.php" ?>

    <h1>This is Sign up page</h1>
    <div id="container">
        <div id="singnup">
            <div class="input">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="input">
                <label for="email">Password</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="input">
                <label for="email">Confirm Password</label>
                <input type="email" name="email" id="email">
            </div>
        </div>
    </div>

    <?php include "templates/footer.php" ?>
</body>
</html>