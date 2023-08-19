<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YLC</title>
    <link rel="stylesheet" href="stylings/index_style.css">
</head>
<body>
    <?php include "templates/nav.php" ?>
    
    <section id="intro_section">
        <span>Welcome to YUMM LILL CAKES</span>
    </section>
    
    <section id="icons">
        <div id="icons_head">
            <h3>The icons here</h3>
        </div>

        <div id="icons_container">
            <div class="icons" id="icon_1">
                <a href="cakes.php">
                    <img src="images/cakes.png" alt="1">
                    <div>Cakes</div>
                </a>
            </div>
            <div class="icons">
                <a href="about.php">
                    <img src="images/our_kitchen.png" alt="2">
                    <div>Our Kitchen</div>
                </a>
            </div>
            <div class="icons">
                <a href="">
                    <img src="images/our_chef.png" alt="3">
                    <div>Our Chef</div>
                </a>
            </div>
            <div class="icons">
                <a href="">
                    <img src="images/contact_us.png" alt="4">
                    <div>Contact Us</div>
                </a>
            </div>
            <div class="icons">
                <a href="">
                    <img src="images/user.png" alt="5">
                    <div>User</div>
                </a>
            </div>
            <div class="icons">
                <a href="">
                    <img src="images/signup_login.png" alt="6">
                    <div>Signup/login</div>
                </a>
            </div>
            <div class="icons">
                <a href="">
                    <img src="images/branches.png" alt="7">
                    <div>Branches</div>
                </a>
            </div>
        </div>

        <div id="icons_desc" class="d-none">
            <div>
                <ul>
                    <li>list</li>
                    <li>pqr</li>
                    <li>xyz</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="quote">
        <div>Eat Healthy Live Healthy | Eat Longer Live Longer</div>
        <div>#YUMM LILL CAKES</div>
    </section>

    <?php include "templates/footer.php" ?>
    
    
    
    
    <script src="scripts/script.js"></script>
    <script src="https://kit.fontawesome.com/934161ea5e.js" crossorigin="anonymous"></script>
</body>
</html>