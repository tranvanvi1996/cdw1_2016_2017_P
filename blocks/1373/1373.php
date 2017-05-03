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
        $less->compileFile('less/1373.less', 'css/1373.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/1373.css"rel="stylesheet"type="text/css"/>

    </head>
    <body>
        <div class="type_1373">
            <div class="portfolio">
                <div class="container">
                    <div class="section-title">
                        <span>our portfolio</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <span class="text">choose category</span>
                            <ul>
                                <li><a href="" class="active">all</a></li>
                                <li><a href="" >photography</a></li>
                                <li><a href="" >webdesign</a></li>
                                <li><a href="" >logo</a></li>
                                <li><a href="" >graphics</a></li>
                                <li><a href="" >advertising</a></li>
                                <li><a href="" >fashion</a></li>
                            </ul>
                            </nav>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="images/1.jpg" alt=""/>
                                    <img src="images/4.jpg" alt=""/>
                                    <img src="images/7.jpg" alt=""/>
                                </div>
                                <div class="col-md-4">
                                    <img src="images/2.jpg" alt=""/>
                                    <img src="images/6.jpg" alt=""/>
                                    <img src="images/8.jpg" alt=""/>
                                </div>
                                <div class="col-md-4">
                                    <img src="images/3.jpg" alt=""/>
                                    <img src="images/5.jpg" alt=""/>
                                    <img src="images/9.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
