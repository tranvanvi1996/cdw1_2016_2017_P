<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1341.less', 'css/1341.css');
        ?>
        <link href="css/font.css" rel="stylesheet" type="text/css" />
        <link href="css/1341.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="type-1341">
        <div class="news">
            <div class="row">
                <div class="col-md-4">
                    <div class="grape">
                        <h>Tools</h>
                        <p>“Professional chefs rely on a battery of tools and equipment. Chefs must be conscious of their kitchen tools when planning a menu and understand their use and production capacity.”</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="coffe">
                        <img src="images/coffee-img-1.png" alt="" />
                        <br>
                        <h>Welcome</h>

                        <p>“First and foremost I am a chef, whether behind the stove at one of my Northern California restaurants or for the past 15 years in front of the camera on my Food Network cooking shows. Creating new dishes and flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blan">
                        <h>Food</h>
                        <p>“Creating new dishes and flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>