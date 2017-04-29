

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


        <div class="type-1355">
            <section id="demos">
                <div class="container pd">
                    <div class="row">

                        <div class="owl-carousel owl-theme">

                            <div class="item">
                                <h1>"Good painting is like good cooking - it can be tastes, but not explained."</h1>
                                <div class="star">
                                    <div class="icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-full"></i>
                                    </div>
                                    -<span>  MAILCOLM GLADWELL</span>
                                </div>

                                <p>
                                    After nearly 20 years in the City of Angels, sushi chef Satoshi Kiyokawa has become a staple in the LA sushi scene from behind the counter at his Beverly Hills restaurant, Go By Kiyokawa. Kiyokawa draws inspiration from the simple things in life, but his food is anything but ordinary.
                                    After nearly 20 years in the City of Angels, sushi chef Satoshi Kiyokawa has become a staple in the LA sushi scene from behind the counter at his Beverly Hills restaurant, Go By Kiyokawa. Kiyokawa draws inspiration from the simple things in life, but his food is anything but ordinary.
                                    After nearly 20 years in the City of Angels, sushi chef Satoshi Kiyokawa has become a staple in the LA sushi scene from behind the counter at his Beverly Hills restaurant, Go By Kiyokawa. Kiyokawa draws inspiration from the simple things in life, but his food is anything but ordinary.
                                </p>

                            </div>
                            <div class="item">
                                <h1>"Life tastes better widt Deliious"</h1>
                                <div class="star">
                                    <div class="icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-heft-empty"></i>
                                    </div>
                                    <span>MAILCOLM GLADWELL</span>
                                </div>

                                <p>After nearly 20 years in the City of Angels, sushi chef Satoshi Kiyokawa has become a staple in the LA sushi scene from behind the counter at his Beverly Hills restaurant, Go By Kiyokawa. Kiyokawa draws inspiration from the simple things in life, but his food is anything but ordinary.</p>

                            </div>
                            <div class="item">
                                <h1>"Create width the heart; ook with loe"</h1>
                                <div class="star">
                                    <div class="icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-heft-empty"></i>
                                    </div>
                                    <span>MAILCOLM GLADWELL</span>
                                </div>

                                <p>After nearly 20 years in the City of Angels, sushi chef Satoshi Kiyokawa has become a staple in the LA sushi scene from behind the counter at his Beverly Hills restaurant, Go By Kiyokawa. Kiyokawa draws inspiration from the simple things in life, but his food is anything but ordinary.</p>

                            </div>

                        </div>


                        <script>
            $(document).ready(function () {
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    margin: 10,
                    nav: true,
                    loop: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                })
            })
                        </script>
                    </div>
                </div>
        </div>
    </section>
</div>


</body>
</html>
