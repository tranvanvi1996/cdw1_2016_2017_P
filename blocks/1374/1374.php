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
        $less->compileFile('less/1374.less', 'css/1374.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/1374.css"rel="stylesheet"type="text/css"/>

    </head>
    <body>
        <div class="type_1374">
            <div class="green-section"> 
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="text">
                                you think we're cool? let's work together
                            </span>
                            <a href="#" class="btn"><span>get in touch</span></a>
                        </div>
                        <div class="col-md-6">
                            <div class="white-section" style="padding:20px">
                                <span class="text">stay informed with our newsletter</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <form action="#" method="post">
                                    <div class="input_1">
                                        <input type="text" name="email">
                                        <span>your email</span>
                                    </div>
                                    <button type="submit" class="btn"><span>send</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul>
                                <li><a href="#" class="animsition-link link">Home</a></li>
                                <li><a href="#" class="animsition-link link">about us</a></li>
                                <li><a href="#" class="animsition-link link">services</a></li>
                                <li><a href="#" class="animsition-link link">portfolio</a></li>
                                <li><a href="#" class="animsition-link link">blog</a></li>
                                <li><a href="#" class="animsition-link link">contact us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="text">
                                created by akhouad ©2016. all rights reserved.
                            </div>
                            <ul class="icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
