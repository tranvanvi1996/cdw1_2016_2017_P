

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <!--fix menu-->
        <script src="js/newjavascript.js" type="text/javascript"></script>
        <!--end fixmenu-->

        <!--slideshow-->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>
        <!--end slideshow-->

        <!--croll-->
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <script src="js/wow.min.js" type="text/javascript"></script>

        <script>
            new WOW().init();
        </script>
        <!-- ..end croll -->

        <!-- Owl slide -->
        <link rel="stylesheet" href="jsOWL/owl.carousel.min.css">
        <link rel="stylesheet" href="jsOWL/owl.theme.default.min.css">
        <script src="jsOWL/jquery.min.js"></script>
        <script src="jsOWL/owl.carousel.js"></script>
        <!-- end owl -->
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


        <div class="type-1353">
          
                <div class="img-title">
                    <img src="image/head-sushi.svg">
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="item">
                            <div class="image">
                                <a href="#"><img src="image/sushi6.jpg"></a> 
                            </div>
                            <h1>Avocado Maki</h1>
                            <span>Avocado, Nori, Sushi Rice, Sashimi-grade Salmon</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="item">
                            <div class="image">
                                <a href="#"><img src="image/sushi1.jpg"></a> 
                            </div>
                            <h1>Cucumber Maki</h1>
                            <span>Nori, Sushi Rice, Sashimi-grade tuna, Sriracha sauce, Green scallion, Sesame seeds, Spicy mayo</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="item">
                            <div class="image">
                                <a href="#"><img src="image/sushi2.jpg"></a> 
                            </div>
                            <h1>Spicy Tuna Roll</h1>
                            <span>Nori, Sushi Rice, Sashimi-grade tuna, Sriracha sauce, Green scallion, Sesame seeds, Spicy mayo</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="item">
                            <div class="image">
                                <a href="#"><img src="image/sushi3.jpg"></a> 
                            </div>
                            <h1>Salmon Dragon Roll</h1>
                            <span>Cream cheese, Chives, Smoked salmon, Nori, Blanched leeks, Wasabi Tobbiko Caviar, Rice</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="item">
                            <div class="image">
                                <a href="#"><img src="image/sushi4.jpg"></a> 
                            </div>
                            <h1>Smoked Salmon and Caviar Sushi</h1>
                            <span>Tomato, Bell pepper, Cucumber, Lettuce leaves, Nori, Sushi Rice</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="item">
                            <div class="image">
                                <a href="#"><img src="image/sushi5.jpg"></a> 
                            </div>
                            <h1>Vegetarian Futomaki</h1>
                            <span>Nori, Sushi Rice, Cucumber strips, Sesame Seeds</span>
                        </div>
                    </div>
                </div>

                <div class="btnn">
                    <a href="#">View the full menu</a>
                </div>
            
        </div>


    </body>
</html>
