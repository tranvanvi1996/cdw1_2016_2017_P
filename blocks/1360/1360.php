<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css"rel="stylesheet"type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1360.less', 'css/1360.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/1360.css"rel="stylesheet"type="text/css"/>

    </head>
    <body>
        <div class="type_1360">
            <div class="sep-text centered">
                <div class="sep-text-before">
                    <div class="sep-text-line"></div></div>
                <div class="content">
                    <h2>
                        GALLERY
                    </h2>
                    <div class="text-divider-subtitle">What we make</div>			</div>
                <div class="sep-text-after"><div class="sep-text-line"></div></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="img1">
                            <img class="images1" src="images/photo-gourmet-1.jpg" alt="images1" />
                        </div>
                        <div class="img1">
                            <img class="images2" src="images/photo-gourmet-3-292x195.jpg" alt="images2" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img2">
                            <img class="images3" src="images/photo-gourmet-4-800x534.jpg" alt="images3" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="img3">
                            <img class="images4" src="images/photo-gourmet-6.jpg" alt="images4" />
                        </div>
                        <div class="img3">
                            <img class="images5" src="images/photo-gourmet-7-288x350.jpg" alt="images5"/>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>
