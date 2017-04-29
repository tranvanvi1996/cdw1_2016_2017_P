<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- head -->
        <meta charset="utf-8">
        <link href="css/header-logo.css" rel="stylesheet" type="text/css"/>
        <!--..-->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/header-logo.css" rel="stylesheet" type="text/css"/>
        <!--..-->
        <!--......................-->
        <!--...-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>    
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!--..-->
        <!--.....-->
        <script>
            (function ($) {
                $.fn.menumaker = function (options) {
                    var cssmenu = $(this), settings = $.extend({
                        format: "dropdown",
                        sticky: false
                    }, options);
                    return this.each(function () {
                        $(this).find(".button").on('click', function () {
                            $(this).toggleClass('menu-opened');
                            var mainmenu = $(this).next('ul');
                            if (mainmenu.hasClass('open')) {
                                mainmenu.slideToggle().removeClass('open');
                            } else {
                                mainmenu.slideToggle().addClass('open');
                                if (settings.format === "dropdown") {
                                    mainmenu.find('ul').show();
                                }
                            }
                        });
                        cssmenu.find('li ul').parent().addClass('has-sub');
                        multiTg = function () {
                            cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                            cssmenu.find('.submenu-button').on('click', function () {
                                $(this).toggleClass('submenu-opened');
                                if ($(this).siblings('ul').hasClass('open')) {
                                    $(this).siblings('ul').removeClass('open').slideToggle();
                                } else {
                                    $(this).siblings('ul').addClass('open').slideToggle();
                                }
                            });
                        };
                        if (settings.format === 'multitoggle')
                            multiTg();
                        else
                            cssmenu.addClass('dropdown');
                        if (settings.sticky === true)
                            cssmenu.css('position', 'fixed');
                        resizeFix = function () {
                            var mediasize = 1000;
                            if ($(window).width() > mediasize) {
                                cssmenu.find('ul').show();
                            }
                            if ($(window).width() <= mediasize) {
                                cssmenu.find('ul').hide().removeClass('open');
                            }
                        };
                        resizeFix();
                        return $(window).on('resize', resizeFix);
                    });
                };
            })(jQuery);

            (function ($) {
                $(document).ready(function () {
                    $("#cssmenu").menumaker({
                        format: "multitoggle"
                    });
                });
            })(jQuery);
            $(document).ready(function () {
                $(".qc .left .giohang").click(function () {
                    $(".qc .left .khung").slideToggle();
                });


            });

        </script>
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

        <div class="type-1345">
            <section style="position: relative;">
                <header style="position: relative;">
                    <div class="container">

                        <nav id='cssmenu' >
                            <div class="row">
                                <di class="col-md-2">
                                    <div class="logo">
                                        <a href="#">Délicious</a>

                                    </div>
                                </di>
                                <div class="col-md-10">
                                    <div class="right">
                                        <span class="fa fa-search" style="font-size: 24px;float:right;left:-15%;position: relative;top:11px;"></span>
                                        <span class="fa fa-shopping-bag" style="font-size: 24px;float:right;left:-17%;position: relative;top:11px;"></span>
                                    </div>
                                    <div id="head-mobile"></div>
                                    <div class="button"></div>
                                    <ul>
                                        <li id="li"><a href='#' class="a active">Homes</a>
                                            <ul style="">
                                                <li><a href='#'>Gourmet</a></li>
                                                <li><a href='#'>Coffe</a></li>
                                                <li><a href='#'>Sushi</a></li>                                     
                                            </ul>
                                        </li>
                                        <li id="li"><a href='#'>About</a>
                                            <ul style="">
                                                <li><a href='#'>Gourmet</a></li>
                                                <li><a href='#'>Coffe</a></li>
                                                <li><a href='#'>Sushi</a></li>                                     
                                            </ul>
                                        </li>
                                        <li id="li"><a href='#'>Menu</a>
                                            <ul style="">
                                                <li><a href='#'>Gourmet</a></li>
                                                <li><a href='#'>Coffe</a></li>
                                                <li><a href='#'>Sushi</a></li>                                     
                                            </ul>
                                        </li>
                                        <li id="li"><a href='#'>Reservation</a>
                                            <ul style="">
                                                <li><a href='#'>Gourmet</a></li>
                                                <li><a href='#'>Coffe</a></li>
                                                <li><a href='#'>Sushi</a></li>                                     
                                            </ul>
                                        </li>
                                        <li id="li"><a href='#'>Gallery</a>
                                            <ul style="">
                                                <li><a href='#'>Gourmet</a></li>
                                                <li><a href='#'>Coffe</a></li>
                                                <li><a href='#'>Sushi</a></li>                                     
                                            </ul>
                                        </li>
                                        <li id="li"><a href='#'>Blog</a>
                                            <ul style="">
                                                <li><a href='#'>Gourmet</a></li>
                                                <li><a href='#'>Coffe</a></li>
                                                <li><a href='#'>Sushi</a></li>                                     
                                            </ul>
                                        </li>
                                        <li id="li"><a href='#'>Features</a>
                                            <ul style="">
                                                <li><a href='#'>Gourmet</a></li>
                                                <li><a href='#'>Coffe</a></li>
                                                <li><a href='#'>Sushi</a></li>                                     
                                            </ul>
                                        </li>
                                        <li id="li"><a href='#'>Shop</a>
                                            <ul style="">
                                                <li><a href='#'>Gourmet</a></li>
                                                <li><a href='#'>Coffe</a></li>
                                                <li><a href='#'>Sushi</a></li>                                     
                                            </ul>
                                        </li>
                                        <li id="li"><a href='#'>Contact</a>
                                            <ul style="">
                                                <li><a href='#'>Gourmet</a></li>
                                                <li><a href='#'>Coffe</a></li>
                                                <li><a href='#'>Sushi</a></li>                                     
                                            </ul>
                                        </li>

                                    </ul>

                                </div>

                            </div>


                        </nav>

                    </div>
                </header>



            </section>
            <div style="clear: both;"></div>

          

        </div>

    </div>

</body>
</html>