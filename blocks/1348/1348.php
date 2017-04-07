<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- head -->
        <meta charset="utf-8">
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="css/header-logo.css" rel="stylesheet" type="text/css"/>
        <!--..-->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/header-logo.css" rel="stylesheet" type="text/css"/>
        <!--..-->
        <!--......................-->
        <!--...-->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>    
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!--..-->
        <!--.....-->
       
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style.less', 'css/style.css');
        ?>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
       
       
    </head>
    <body>

        <div class="cdw2">
           

            <div class="all">
                <div class="image">
                    <img src="image/Untitled.png" alt=""/>


                </div>

                <div class="times">

                    <div class="reon">
                        <div class="reser">
                            <h1>RESERVATION</h1>
                        </div>
                        <div class="on">
                            <h1>Opening Times</h1>

                        </div>
                        <div class="item">
                            <h3>
                                Week days
                                <span>9:00 - 18:00</span>

                            </h3>
                        </div>

                        <div class="item">
                            <h3>
                                Week days
                                <span>9:00 - 18:00</span>

                            </h3>
                        </div>

                        <div class="item">
                            <h3>
                                Week days
                                <span>Clode</span>

                            </h3>
                        </div>

                        <div class="book">
                            <h3>Book your table for lunch or dinner.</h3>
                            <h2>+39 059 223912</h2>

                            <div class="now"> 
                                <a href="#" id="a">Book Now</a>
                                <!--    <a href="#" id="a1">Book Now</a> -->
                            </div>

                        </div>
                    </div>



                </div>
            </div>

        </div>

    </div>

</body>
</html>