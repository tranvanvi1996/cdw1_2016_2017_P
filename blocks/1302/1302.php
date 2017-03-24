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
        $less->compileFile('less/1302.less', 'css/1302.css');
        ?>
        <link href="css/1302.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-1302">
            <div class="container">
                <div class="row">
                    <div class="bt-banner-wrap banner-home-big">
                        <a href="#" class="banner-image">
                            <img src="images/banner_home.jpg" style="width: 100%;">
                            <span><img src="images/banner_home_text.png"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>