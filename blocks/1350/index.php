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


        <div class="project">
            <div class="row">
                <div class="col-md-3">
                    <div class="item">
                        <h1>Recent Posts</h1>
                        <hr>
                        <div class="content">
                            <a href="#">Blog post with Top Widgets</a>
                            <a href="#">Blog post with Left & Right sidebars</a>
                            <a href="#">Blog post with Left sidebar</a>
                            <a href="#">Blog post with Right sidebar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item">
                        <h1><i class="fa fa-list"></i>  Archives</h1>
                        <hr>
                        <div class="content">
                            <a href="#">August 2016</a>
                            <a href="#">September 2014</a>
                            <a href="#">March 2014</a>
                            <a href="#">September 2013</a>
                            <a href="#">August 2013</a>
                            <a href="#">May 2013</a>
                            <a href="#">March 2013</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item">
                        <h1><i class="fa fa-file-o"></i>  Categories</h1>
                        <hr>
                        <div class="content">
                            <a href="#">Cooking(5)</a>
                            <a href="#">Features(4)</a>
                            <a href="#">Healthy Food(7)</a>
                            <a href="#">Recipes(6)</a>
                            <a href="#">Tips & Tricks(11)</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <h1><i class="fa fa-comments-o"></i> Comments</h1>
                        <hr>
                        <div class="content">
                            <a href="#"><i>Jon Madison on</i> How to make sushi</a>
                            <a href="#"><i>Antonio Hurtado de Mendoza on</i> Reviews</a>
                            <a href="#"><i>Thomas Lovell Beddoes on</i> Reviews</a>
                            <a href="#"><i>Maxwell Anderson on</i> Reviews</a>
                            <a href="#"><i>Michael Leunig on</i> Reviews</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item">
                        <h1>Categories</h1>
                        <hr>
                        <div class="content">
                            <a href="#">Cooking</a>
                            <a href="#">Features</a>
                            <a href="#">Healthy Food</a>
                            <a href="#">Recipes</a>
                            <a href="#">Tips & Tricks</a>
                        </div>
                    </div>
                    <div class="item" style="padding: 20px 0;">
                        <h1>Archives</h1>
                        <hr>
                        <div class="content">
                            <a href="#">August 2016</a>
                            <a href="#">September 2014</a>
                            <a href="#">March 2014</a>
                            <a href="#">September 2013</a>
                            <a href="#">August 2013</a>
                            <a href="#">May 2013</a>
                            <a href="#">March 2013</a>                            
                        </div>
                    </div>
                    <div class="item">
                        <h1>Tags</h1>
                        <hr>
                        <div class="content">
                            <div class="items">
                                <h5>basil</h5>
                                <h4>bio</h4>
                                <h5>blueberry</h5>
                            </div>
                            <div class="items">
                                <h5>cocktail</h5>
                                <h5>coffee</h5>
                            </div>
                            <div class="items">
                                <span>cooking</span>
                                <h5>crimp</h5>
                            </div>
                            <div class="items">
                                <h5>dinner</h5>
                                <h5>experiments</h5>
                                <span>food</span>
                            </div>
                            <div class="items">
                                <h5>grania</h5>
                                <h4>hand made</h4>
                            </div>
                            <div class="items">
                                <span>healthy</span>
                                <h5>lamp</h5>
                            </div>
                            <div class="items">
                                <h5>left-right-sidebar</h5>
                                <h5>left-sidebar</h5>
                            </div>
                            <div class="items">
                                <h5>pie</h5>
                                <h5>plum</h5>
                                <span>recipe</span>
                            </div>
                            <div class="items">
                                <h5>right-sidebar</h5>
                                <h5>strawperry</h5>
                            </div>
                            <div class="items">
                                <h5>sushi</h5>
                                <span>tips</span>
                                <h5>top-widgets</h5>
                            </div>
                            <div class="items">
 
                            <span>tricks</span>
                            <h5>video</h5>
                            </div>              
                        </div>
                        <div class="input">
                            <input type="text" placeholder="Search">
                            <i class="fa fa-search"></i>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </body>
</html>
