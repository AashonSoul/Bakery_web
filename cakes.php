<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YLC</title>
    <link rel="stylesheet" href="stylings/cakess.css">
</head>
<body>

    <?php include "templates/nav.php" ?>

    <div id="big_div">
        <div id="small_div">
            <div id="head_cont">
                <h2 id="cakes_heading" class="underline">Cakes</h2>
                <h2 id="flavour_heading">Flavour</h2>
            </div>

            <div id="cakes_cont">
                <h2>This is cakes div this content is for testing purpose</h2>
                <!-- SLIDER -->
                <div id="slider_cont">
                    <div id="slider1" class="slider">
                        <h3>Here are different flavours</h3>
                        <div class="left_side_cakes">
                            <div class="cakes">
                                <img src="images/cakes slider/images.jpg" alt="1">
                                <span>This is cake 1</span>
                            </div>
                            <div class="cakes">
                                <img src="images/cakes slider/images.jpg" alt="1">
                                <span>This is cake 1</span>
                            </div>
                            <div class="cakes">
                                <img src="images/cakes slider/images.jpg" alt="1">
                                <span>This is cake 1</span>
                            </div>
                        </div>
                        <div class="right_side_cakes"></div>
                    </div>
                    <div id="slider2" class="slider d-none">2</div>
                    <div id="slider3" class="slider d-none">3</div>

                    <input type="radio" name="slide" id="radio1" checked>
                    <input type="radio" name="slide" id="radio2">
                    <input type="radio" name="slide" id="radio3">
                </div>
            </div>

            <div id="flavour_cont" class="d-none">
                This is flavours div and this content is also for testing purpose
            </div>
        </div>
    </div>

    <?php include "templates/footer.php" ?>



    <script src="scripts/cakess.js"></script>
</body>
</html>