<!DOCTYPE html>
<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1304.less', 'css/1304.css');
        ?>
        <link href="css/1304.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class=" col-sm-4">
                    <div class="type-1304">
                        <!-- Banner top  -->
                        <div class="bt-banner-wrap banner-home-top">
                            <!-- Banner top   -->
                            <div class="bt-banner-item">
                                <a href="#" class="banner-image"><img src="images/banner_home_top1.jpg" alt="banner">
                                    <span><img src="images/banner_home_top1_text.png" alt="banner"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-4">
                    <div class="type-1304">
                        <!-- Banner top  -->
                        <div class="bt-banner-wrap banner-home-top">
                            <!-- Banner top   -->
                            <div class="bt-banner-item">
                                <a href="#" class="banner-image"><img src="images/banner_home_top2.jpg" alt="banner">
                                    <span><img src="images/banner_home_top2_text.png" alt="banner"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-4">
                    <div class="type-1304">
                        <!-- Banner top  -->
                        <div class="bt-banner-wrap banner-home-top">
                            <!-- Banner top   -->
                            <div class="bt-banner-item">
                                <a href="#" class="banner-image"><img src="images/banner_home_top3.jpg" alt="banner">
                                    <span><img src="images/banner_home_top3_text.png" alt="banner"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>