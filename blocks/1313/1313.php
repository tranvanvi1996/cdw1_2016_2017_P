<!DOCTYPE html>

<html >

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opencart Super Deal Store</title>
        <meta name="description" content="My Store" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="image/x-icon" href="image/favicon.ico" />
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <link href="framework/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
        <script src="framework/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="framework/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="framework/fontello/css/fontello.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type.less', 'css/type.css');
        ?>
        <link href="css/type.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-31">
            <div class="container">
                <div class="latest">
                    <h1>The Latest Photo</h1>
                    <span>AMAZING PHOTOREPORTAGE</span>
                </div>

                <div class="content">
                    <p>OUR CLUB IS PROUD OF ITS SUCCESSFUL MEMBERS<br> 
                        AND WANTS TO SHARE THE BEST MOMENTS OF THE TOURNAMENT</p>

                    <div class="row">

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="photo ">
                                <div class="image">
                                    <img src="image/image-10-370x370.jpg" alt=""/>
                                </div>
                                <div class="info">

                                    <div class="nd">
                                        <p>Improve your Strokes Using the Wall</p>
                                        <span>Feruary 16, 2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="photo ">
                                <div class="image">
                                    <img src="image/lesson-2-370x370.jpg" alt=""/>

                                </div>
                                <div class="info">

                                    <div class="nd">
                                        <p>Improve your Strokes Using the Wall</p>
                                        <span>Feruary 16, 2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="photo ">
                                <div class="image">
                                    <img src="image/lesson-3-370x370.jpg" alt=""/>
                                </div>
                                <div class="info">

                                    <div class="nd">
                                        <p>Improve your Strokes Using the Wall</p>
                                        <span>Feruary 16, 2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 ">
                            <div class="photo ">
                                <div class="image">
                                    <img src="image/player-5-370x370.jpg" alt=""/>

                                </div>
                                <div class="info">

                                    <div class="nd">
                                        <p>Improve your Strokes Using the Wall</p>
                                        <span>Feruary 16, 2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class=" margin_top_small aligncenter">
                        <div>
                            <div class="cube flip-to-top">
                                <a href="#">
                                    <div class="default-state">
                                        <span>view all</span>
                                    </div>
                                    <div class="active-state">
                                        <span>view all</span>
                                    </div>
                                </a>  	
                            </div>
                        </div>
                    </div>


                </div>

            </div>	                
    </body>

</html>