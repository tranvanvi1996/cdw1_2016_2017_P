<!DOCTYPE html>
<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/KM.less', 'css/KM.css');
        ?>

        <link href="css/KM.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-KM">
            <div class="top">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <b>Messages</b>
                <i class="fa fa-plus" aria-hidden="true"></i>
            </div>
            <div class="banner">
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/1.jpg" alt="" />
                    </div>
                    <div class="col-md-10">
                        <div class="text">
                        <b>James White</b>
                        <p>Hey dudu! We are waiting for you at the main station, we will meer you near to...
                        </p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="banner">
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/1.jpg" alt="" />
                    </div>
                    <div class="col-md-10">
                        <div class="text">
                        <b>James White</b>
                        <p>Hey dudu! We are waiting for you at the main station, we will meer you near to...
                        </p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="banner">
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/1.jpg" alt="" />
                    </div>
                    <div class="col-md-10">
                        <div class="text">
                        <b>James White</b>
                        <p>Hey dudu! We are waiting for you at the main station, we will meer you near to...
                        </p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="banner">
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/1.jpg" alt="" />
                    </div>
                    <div class="col-md-10">
                        <div class="text">
                        <b>James White</b>
                        <p>Hey dudu! We are waiting for you at the main station, we will meer you near to...
                        </p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="banner">
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/1.jpg" alt="" />
                    </div>
                    <div class="col-md-10">
                        <div class="text">
                        <b>James White</b>
                        <p>Hey dudu! We are waiting for you at the main station, we will meer you near to...
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>