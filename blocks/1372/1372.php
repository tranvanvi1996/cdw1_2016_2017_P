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
        $less->compileFile('less/1372.less', 'css/1372.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/1372.css"rel="stylesheet"type="text/css"/>

    </head>
    <body>
        <div class="type_1372">
            <div class="services">
                <div class="container">
                    <div class="row">
                        <div class="section-title">
                            <span>why choose us</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="col-md-7">
                            <div class="row" style="margin-bottom:50px">
                                <div class="col-md-6">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="text">unlimited options</span>
                                    <ul>
                                        <li>branding</li>
                                        <li>design &amp; copywriting</li>
                                        <li>concept development</li>
                                        <li>user experience</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-random" aria-hidden="true"></i>
                                    <span class="text">design & development</span>
                                    <ul>
                                        <li>branding</li>
                                        <li>design &amp; copywriting</li>
                                        <li>concept development</li>
                                        <li>user experience</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="text">e-commerce</span>
                                    <ul>
                                        <li>branding</li>
                                        <li>design &amp; copywriting</li>
                                        <li>concept development</li>
                                        <li>user experience</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-sliders" aria-hidden="true"></i>
                                    <span class="text">customizable design</span>
                                    <ul>
                                        <li>branding</li>
                                        <li>design &amp; copywriting</li>
                                        <li>concept development</li>
                                        <li>user experience</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="images/serv.jpg" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
