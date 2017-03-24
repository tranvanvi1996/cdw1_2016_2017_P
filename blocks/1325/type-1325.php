<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-1325.less', 'css/type-1325.css');
    ?> 
    <link href="css/type-1325.css" rel="stylesheet" type="text/css"/>

    <body>
        <div class="type-1325">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="save">
                                <h1>save 30%</h1>
                                <p>WE OFFER EXCLUSIVE DEALS FOR VARIOUS SPORT PRODUCTS OF PREMIUM QUALITY THAT HAS BEEN TESTED AND PROVED BY YEARS AND EXPERIENCED PLAYERS</p>

                            </div>
                            <div class=" margin_top_small">
                                <div>
                                    <div class="cube ">
                                        <a href="#">
                                            <div class="default-state">
                                                <span>Learn more</span>
                                            </div>
                                            <div class="active-state">
                                                <span>Learn more</span>
                                            </div>
                                        </a>  	
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>