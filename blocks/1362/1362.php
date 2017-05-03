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
        $less->compileFile('less/1362.less', 'css/1362.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/1362.css"rel="stylesheet"type="text/css"/>

    </head>
    <body>
        <div class="type_1362">
            <div class="vamtam-grid">
                <img src="images/gourmet-photo-5.jpg" alt=""/>
            </div>

            <div class="cdsROW">
                <div class="cdsROWcontainer">
                    <div class="logo">
                        <a href="#"><img src="images/tripadvisor_logo_transp_340x80-18034-2.png" alt=""/></a>
                    </div>
                    <div class="name">
                        <a href="#">Osteria Francescana</a>
                    </div>
                    <div class="rating">
                        <img src="images/4.5.png" alt=""/>
                        <span>1,735 Reviews</span>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-left">
                            © 2016
                            <a href="#">Delicious Restaurant &amp; Café Theme</a>
                            by
                            <a href="#">VamTam Themes</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-right">
                            Proudly powered by 
                            <a href="#">WordPress</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </body>
</html>
