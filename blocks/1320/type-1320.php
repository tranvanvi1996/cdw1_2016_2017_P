<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-1320.less', 'css/type-1320.css');
        ?>
        <link href="css/type-1320.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-1320">
            <div id="first-slider">
                <div id="carousel-example-generic" class="carousel slide carousel-fade">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>

                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Item 1 -->
                        <div class="item active slide1">
                            <div class="row">
                                <div class="container">

                                    <div class="col-md-9 text-left">
                                        <h1 data-animation="animated bounceInDown">Tennis</h1>
                                        <h3 data-animation="animated bounceInDown">sport for  </h3>
                                        <h3 data-animation="animated bounceInDown"> healthy lifetime </h3>
                                        <h4 data-animation="animated bounceInUp">like tennis at any lever ,tennis at an adult is fun,social,competitive,healthy</h4>
                                        <h4 data-animation="animated bounceInUp">it can truly be anything you wan it to be</h4>

                                        <h5 data-animation="animated bounceInUp">Learn more</h5>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="item slide2">
                            <div class="row">
                                <div class="container">

                                    <div class="col-md-5 text-right">
                                        <h1 data-animation="animated bounceInDown">Welcome</h1>
                                        <h3 data-animation="animated bounceInDown">play with our  </h3>
                                        <h3 data-animation="animated bounceInDown"> intructors </h3>
                                        <h4 data-animation="animated bounceInUp">Browse our website to find a certified tennis teacher,sign up</h4>
                                        <h4 data-animation="animated bounceInUp">for our local tournaments and games and raise your level</h4>

                                        <h6 data-animation="animated bounceInUp">Learn more</h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="item slide3">
                            <div class="row">
                                <div class="container">
                                    <div class="col-md-9 text-left">
                                        <h1 data-animation="animated bounceInDown">playing</h1>
                                        <h3 data-animation="animated bounceInDown"> playing with </h3>
                                        <h3 data-animation="animated bounceInDown"> family & friends </h3>
                                        <h4 data-animation="animated bounceInUp">and making new friends along the way,is always fun,and is something</h4>
                                        <h4 data-animation="animated bounceInUp">that tennis is great at providing.</h4>

                                        <h5 data-animation="animated bounceInUp">Learn more</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 4 -->

                        <!-- End Item 4 -->

                    </div>
                    <!-- End Wrapper for slides-->

                </div>
            </div>
            <script>
                (function ($) {

                    //Function to animate slider captions 
                    function doAnimations(elems) {
                        //Cache the animationend event in a variable
                        var animEndEv = 'webkitAnimationEnd animationend';

                        elems.each(function () {
                            var $this = $(this),
                                    $animationType = $this.data('animation');
                            $this.addClass($animationType).one(animEndEv, function () {
                                $this.removeClass($animationType);
                            });
                        });
                    }

                    //Variables on page load 
                    var $myCarousel = $('#carousel-example-generic'),
                            $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

                    //Initialize carousel 
                    $myCarousel.carousel();

                    //Animate captions in first slide on page load 
                    doAnimations($firstAnimatingElems);

                    //Pause carousel  
                    $myCarousel.carousel('pause');

                    //Other slides to be animated on carousel slide event 
                    $myCarousel.on('slide.bs.carousel', function (e) {
                        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                        doAnimations($animatingElems);
                    });
                    $('#carousel-example-generic').carousel({
                        interval: 3000,
                        pause: "false"
                    });

                })(jQuery);
            </script>



        </div> 
    </body>

</html>