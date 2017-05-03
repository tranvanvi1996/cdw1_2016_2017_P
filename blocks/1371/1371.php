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
        $less->compileFile('less/1371.less', 'css/1371.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/1371.css"rel="stylesheet"type="text/css"/>

    </head>
    <body>
        <div class="type_1371">
            <div class="header">
                <h5>WE DO</h5>
                <h1>CREATIVE STUFF</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="agency">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="images/agency.jpg" alt=""/>
                        </div>
                        <div class="col-md-7">
                            <div class="section-title">
                                <span>history of agency</span>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor nisi ut aliquip ex ea commodo
                                consequat. in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. 
                            </p>
                            <a href="#" class="btn"><span>read more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
