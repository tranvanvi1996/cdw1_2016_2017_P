<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-1324.less', 'css/type-1324.css');
    ?>
    <link href="css/type-1324.css" rel="stylesheet" type="text/css"/>

    <body>
        <div class="type-1324">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shop">
                            <h1>Pro Shop</h1>
                            <hr>
                            <img class="img-responsive" src="images/shop_bg1.jpg" alt=""/>
                            <div class="col-md-6 " style="position: absolute; top: 35%; left: 8%;">
                                <div class="content">
                                    <h1>New Tennis Footwear</h1>
                                    <p>PREMIUM QUALITY SHOES TO FIT THE LEVEL FROM BEGINNERS TO PROFRSSIONALS</p>

                                </div>
                                <div class=" margin_top_small aligncenter">
                                    <div>
                                        <div class="cube flip-to-top">
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
        </div>
    </body>
</html>