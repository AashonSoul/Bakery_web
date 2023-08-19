<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stylings/contactt.css">
</head>
<body>
    <?php include "templates/nav.php" ?>

    <div id="container">
        <div id="contact">
            <h1>CONTACT US</h1>
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="email" name="email" id="email" placeholder="Enter a valid email address">
            <textarea name="mess" id="mess" cols="30" rows="10" placeholder="Enter your message"></textarea>
            <submit class="btn">SUBMIT</submit>
            <p><span>Yumm Lill Cakes</span></p>
        </div>

        <div id="other_info">
            <div class="infos">
                <i class="fa-solid fa-phone"></i>
                <span>CALL US</span>
                <p class="text">+91 3423245332, +91 5768348934</p>
            </div>
            <div class="infos">
                <i class="fa-solid fa-location-dot"></i>
                <span>LOCATION</span>
                <p class="text">Salem - Kochi - Kanyakumari Hwy, Gowari Nagar, Sreekariyam</p>
            </div>
            <div class="infos">
                <i class="fa-solid fa-business-time"></i>
                <span>BUSINESS HOURS</span>
                <p class="text">Mon - Fri ...... 10 am - 8 pm, Sat,Sun ...... Closed</p>
            </div>
        </div>

    </div>


    <?php include "templates/footer.php"; ?>
</body>
</html>