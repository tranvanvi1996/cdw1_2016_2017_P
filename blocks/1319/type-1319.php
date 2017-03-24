<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

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
        <link href="framework/owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
        <script src="slider/owl-carousel/owl.carousel.js"></script>
        <script type="text/javascript" src="framework/owl.carousel.2.0.0-beta.2.4/owl.carousel.js"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-1319.less', 'css/type-1319.css');
        ?>
        <link href="css/type-1319.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-1319">

            <div class="module-8">
                <div class="back-2">
                    <div class="container">
                        <div class="wrapper">
                            <div class="row">
                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class=" wpb_row  ">
                                    <div class="vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper-2">
                                                <div class="norma" data-animation="animated fadeInUp">
                                                    <h2 class="sc_testimonials_title sc_item_title">Testimonials</h2>
                                                    <script>
                                                        $(document).ready(function () {

                                                            $("#owl-demo").owlCarousel({
                                                                navigation: true,
                                                                autoPlay: 3000, //Set AutoPlay to 3 seconds
                                                                pagination: false,
                                                                items: 1,
                                                                itemsDesktop: [1299, 3],
                                                                itemsDesktopSmall: [701, 3]
                                                            });

                                                        });
                                                    </script>
                                                    <div id="owl-demo" >
                                                        <div class="item" align="center">
                                                            <div class="wpb_wrapper">
                                                                <p>Excellent project that helps discovering young talents and keep us healthy. Professional coaches and staff are doing great job!</p>

                                                            </div>
                                                            <div class="sc_testimonial_author">
                                                                <span class="sc_testimonial_author_name">Martin Moore, Manager</span>
                                                            </div>
                                                        </div>
                                                        <div class="item" align="center">
                                                            <div class="wpb_wrapper">
                                                                <p>Excellent project that helps discovering young talents and keep us healthy. Professional coaches and staff are doing great job!</p>

                                                            </div>
                                                            <div class="sc_testimonial_author">
                                                                <span class="sc_testimonial_author_name">Martin Moore, Manager</span>
                                                            </div>
                                                        </div>
                                                        <div class="item" align="center">
                                                            <div class="wpb_wrapper">
                                                                <p>Excellent project that helps discovering young talents and keep us healthy. Professional coaches and staff are doing great job!</p>

                                                            </div>
                                                            <div class="sc_testimonial_author">
                                                                <span class="sc_testimonial_author_name">Martin Moore, Manager</span>
                                                            </div>
                                                        </div>
                                                        <div class="item" align="center">
                                                            <div class="wpb_wrapper">
                                                                <p>Excellent project that helps discovering young talents and keep us healthy. Professional coaches and staff are doing great job!</p>

                                                            </div>
                                                            <div class="sc_testimonial_author">
                                                                <span class="sc_testimonial_author_name">Martin Moore, Manager</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	                
    </body>

</html>