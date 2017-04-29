

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
        <script>
            $(document).ready(function () {
                $("#sp1").click(function () {
                    $(this).css("color", "#CB7152");
                    $(this).css("border-bottom", "2px solid #CB7152");
                    $("#sp2").css("border-bottom", "none");
                    $("#sp2").css("color", "black");
                    $("#sp3").css("color", "black");
                    $("#sp3").css("border-bottom", "none");
                    $(".one").show();
                    $(".two").hide();
                    $(".three").hide();
                });
                $("#sp2").click(function () {
                    $(this).css("color", "#CB7152");
                    $("#sp1").css("color", "black");
                    $("#sp3").css("color", "black");
                    $(this).css("border-bottom", "2px solid #CB7152");
                    $("#sp1").css("border-bottom", "none");
                    $("#sp3").css("border-bottom", "none");
                    $(".one").hide();
                    $(".two").show();
                    $(".three").hide();
                });
                $("#sp3").click(function () {
                    $(this).css("color", "#CB7152");
                    $("#sp2").css("color", "black");
                    $("#sp1").css("color", "black");
                    $(this).css("border-bottom", "2px solid #CB7152");
                    $("#sp1").css("border-bottom", "none");
                    $("#sp2").css("border-bottom", "none");
                    $(".one").hide();
                    $(".two").hide();
                    $(".three").show();
                });
            });
        </script>
    </head>
    <body>

        <div class="type-1354">
            <div class="title">
                <span id="sp1">The Story</span>
                <span id="sp2">The Team</span>
                <span id="sp3">Awards</span>
            </div>
            <div class="content">
                <div class="one">
                    <div class="row pd">
                        <div class="col-md-3">
                            <div clas="image">
                                <img src="image/onggia.svg" >
                            </div>
                        </div>
                        <div class="col-md-9">

                            <div class="right-title">
                                <p>
                                    The Sushi Chef: Kiyokawa
                                </p>
                            </div>
                            <div class="ct">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="content">
                                            <p>
                                                After nearly 20 years in the City of Angels, sushi chef Satoshi Kiyokawa has become a staple in the LA sushi scene from behind the counter at his Beverly Hills restaurant, Go By Kiyokawa. Kiyokawa draws inspiration from the simple things in life, but his food is anything but ordinary.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="content">
                                            <p>
                                                After nearly 20 years in the City of Angels, sushi chef Satoshi Kiyokawa has become a staple in the LA sushi scene from behind the counter at his Beverly Hills restaurant, Go By Kiyokawa. Kiyokawa draws inspiration from the simple things in life, but his food is anything but ordinary.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="content">
                                            <p>
                                                After nearly 20 years in the City of Angels, sushi chef Satoshi Kiyokawa has become a staple in the LA sushi scene from behind the counter at his Beverly Hills restaurant, Go By Kiyokawa. Kiyokawa draws inspiration from the simple things in life, but his food is anything but ordinary.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="three">
                    <div class="row pd">
                        <div class="icon-title">
                            <img src="image/1.jpg">

                        </div>
                        <div class="content1">
                            <div class="col-md-6">
                                <div class="item">
                                    <p>
                                        <i class="fa fa-circle"></i>Accademia Cucina, Cucina Ecc for Tratto del Campazzo (1991)
                                    </p>
                                    <p>
                                        <i class="fa fa-circle"></i> Michelin Guide, One Michelin Star (2002)
                                    </p>
                                    <p>
                                        <i class="fa fa-circle"></i>Gambero Rosso, Up and Coming Chef Award (2002)
                                    </p>
                                    <p>
                                        <i class="fa fa-circle"></i>ESPRESSO Guide Performance of the Year (2004)
                                    </p>
                                    <p>
                                        <i class="fa fa-circle"></i>Lo Mejor de La Gastronomía, International Award (2005)
                                    </p>
                                    <p>
                                        <i class="fa fa-circle"></i>Golosaria, Creative Restaurant of the Year (2006)
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <p>
                                        <i class="fa fa-circle"></i>Accademia Cucina, Cucina Ecc for Tratto del Campazzo (1991)
                                    </p>
                                    <p>
                                        <i class="fa fa-circle"></i> Michelin Guide, One Michelin Star (2002)
                                    </p>
                                    <p>
                                        <i class="fa fa-circle"></i>Gambero Rosso, Up and Coming Chef Award (2002)
                                    </p>
                                    <p>
                                        <i class="fa fa-circle"></i>ESPRESSO Guide Performance of the Year (2004)
                                    </p>
                                    <p>
                                        <i class="fa fa-circle"></i>Lo Mejor de La Gastronomía, International Award (2005)
                                    </p>
                                    <p>
                                        <i class="fa fa-circle"></i>Golosaria, Creative Restaurant of the Year (2006)
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="two">
                    <div class="row pd">
                        <div class="col-md-3">
                            <div class="item">
                                <div class="image">
                                    <img src="image/img1.jpg">
                                    <div class="ic">
                                        <div class="icon"> <i class="fa fa-facebook"></i></div>
                                        <div class="icon"><i class="fa fa-instagram"></i></div>
                                        <div class="icon"> <i class="fa fa-twitter"></i></div>
                                        <div class="icon"> <i class="fa fa-youtube"></i> </div>

                                    </div>
                                </div>
                                <div class="content2">
                                    <h1>Seki Shi</h1>
                                    <span>OWNER | CHEF</span>
                                    <hr>
                                    <div class="contact">
                                        <h4>Tel: +448 786 562 223</h4>
                                        <h4>chef@vamtam.com</h4>

                                    </div>
                                    <p>
                                        Sushi Seki is the creation of Chef Seki Shi. Chef Seki began his culinary journey at a young age, working with his Mom to perfect the art of crispy rice. After graduating from high school, Chef Seki.
                                    </p>
                                </div>

                            </div>
                        </div>
                         <div class="col-md-3">
                            <div class="item">
                                <div class="image">
                                    <img src="image/img2.jpg">
                                    <div class="ic">
                                        <div class="icon"> <i class="fa fa-facebook"></i></div>
                                        <div class="icon"><i class="fa fa-instagram"></i></div>
                                        <div class="icon"> <i class="fa fa-twitter"></i></div>
                                        <div class="icon"> <i class="fa fa-youtube"></i> </div>

                                    </div>
                                </div>
                                <div class="content2">
                                    <h1>Seki Shi</h1>
                                    <span>OWNER | CHEF</span>
                                    <hr>
                                    <div class="contact">
                                        <h4>Tel: +448 786 562 223</h4>
                                        <h4>chef@vamtam.com</h4>

                                    </div>
                                    <p>
                                        Sushi Seki is the creation of Chef Seki Shi. Chef Seki began his culinary journey at a young age, working with his Mom to perfect the art of crispy rice. After graduating from high school, Chef Seki.
                                    </p>
                                </div>

                            </div>
                        </div>
                         <div class="col-md-3">
                            <div class="item">
                                <div class="image">
                                    <img src="image/img3.jpg">
                                    <div class="ic">
                                        <div class="icon"> <i class="fa fa-facebook"></i></div>
                                        <div class="icon"><i class="fa fa-instagram"></i></div>
                                        <div class="icon"> <i class="fa fa-twitter"></i></div>
                                        <div class="icon"> <i class="fa fa-youtube"></i> </div>

                                    </div>
                                </div>
                                <div class="content2">
                                    <h1>Seki Shi</h1>
                                    <span>OWNER | CHEF</span>
                                    <hr>
                                    <div class="contact">
                                        <h4>Tel: +448 786 562 223</h4>
                                        <h4>chef@vamtam.com</h4>

                                    </div>
                                    <p>
                                        Sushi Seki is the creation of Chef Seki Shi. Chef Seki began his culinary journey at a young age, working with his Mom to perfect the art of crispy rice. After graduating from high school, Chef Seki.
                                    </p>
                                </div>

                            </div>
                        </div>
                         <div class="col-md-3">
                            <div class="item">
                                <div class="image">
                                    <img src="image/img4.jpg">
                                    <div class="ic">
                                        <div class="icon"> <i class="fa fa-facebook"></i></div>
                                        <div class="icon"><i class="fa fa-instagram"></i></div>
                                        <div class="icon"> <i class="fa fa-twitter"></i></div>
                                        <div class="icon"> <i class="fa fa-youtube"></i> </div>

                                    </div>
                                </div>
                                <div class="content2">
                                    <h1>Seki Shi</h1>
                                    <span>OWNER | CHEF</span>
                                    <hr>
                                    <div class="contact">
                                        <h4>Tel: +448 786 562 223</h4>
                                        <h4>chef@vamtam.com</h4>

                                    </div>
                                    <p>
                                        Sushi Seki is the creation of Chef Seki Shi. Chef Seki began his culinary journey at a young age, working with his Mom to perfect the art of crispy rice. After graduating from high school, Chef Seki.
                                    </p>
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
