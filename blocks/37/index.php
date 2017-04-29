

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
                $(".navbar-header").click(function () {
                    $("ul").slideToggle();
                });
            });
        </script>
    </head>
    <body>
        <div class="type-37 ">
            <div class="header-logo">
                <div class="logo wow bounce">
                    <span id="s1">Trendy</span>
                    <span id="s2">Store</span>
                    <span id="s3">|</span>
                    <span id="s4">Shoes & Fasgion Online</span>
                </div>
                <div class="header-right">
                    <div class="r-first">
                        <a href="#">Login |</a>
                        <a href="#">Register |</a>
                        <a href="#">Wishlist |</a>
                        <a href="#">Compare |</a>
                        <a href="#">Contact </a>
                    </div>
                    <div class="r-sc">
                        <div class="ic-bar">
                            <i class="fa fa-bars"></i>
                        </div>
                        <select>
                            <option>English</option>
                            <option>Vietnamese</option>
                            <option>USA</option>
                        </select>
                        <div class="input">
                            <input type="text" placeholder="Search ...">
                            <i class="fa fa-search"></i>
                        </div>


                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
            <div class="menu">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class=""><a href="#">Home</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Online Store</a>  
                                <div class="new">
                                    <span>NEW</span>
                                    <div class="tam"></div>
                                </div>
                            </li>
                            <li><a href="#">Template</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">Extensions</a></li>
                            <li><a href="#">Languages</a></li>
                            <li><a href="#">Styles</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div style="clear: both;"></div>
            <div class="show">
                <div class="row">

                    <div class="col-md-4 a">
                        <div class="banner">
                            <div class="item-show">
                                <div class="image">
                                    <img src="image/custom_image (6).jpg" alt=""/>
                                    <div class="info">
                                        <div class="backg">

                                        </div>
                                        <div class="item-info">
                                            <del>$38.00</del>
                                            <span id="sp1">$29.99</span>
                                            <span id="sp2">(Ind 8% tax)</span>
                                            <p>DENIM SHIRT</p>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="footer-name">
                                <div class="name">
                                    <p>FREE DELIVERY OVER $100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 a">
                        <div class="banner ">
                            <div class="item-show">
                                <div class="image">
                                    <img src="image/custom_image (6).jpg" alt=""/>
                                    <div class="info">
                                        <div class="backg">

                                        </div>
                                        <div class="item-info">
                                            <del>$38.00</del>
                                            <span id="sp1">$29.99</span>
                                            <span id="sp2">(Ind 8% tax)</span>
                                            <p>DENIM SHIRT</p>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="footer-name aa">
                                <div class="name">
                                    <p>FREE DELIVERY OVER $100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 a">
                        <div class="banner">
                            <div class="item-show">
                                <div class="image">
                                    <img src="image/custom_image (6).jpg" alt=""/>
                                    <div class="info">
                                        <div class="backg">

                                        </div>
                                        <div class="item-info">
                                            <del>$38.00</del>
                                            <span id="sp1">$29.99</span>
                                            <span id="sp2">(Ind 8% tax)</span>
                                            <p>DENIM SHIRT</p>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="footer-name cc">
                                <div class="name">
                                    <p>FREE DELIVERY OVER $100</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div style="clear: both;"></div>
            <section id="demos">
                <div class="title">
                    <div class="gach">
                        <div class="gach1"></div>
                        <div class="gach2"></div>
                    </div>
                    <h1>LATEST PRODUCTS</h1> 
                    <div class="gach">
                        <div class="gach1"></div>
                        <div class="gach2"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="image">
                                    <img src="image/custom_image (4).jpg" alt=""/>
                                </div>
                                <div class="content">
                                    <p>BASIC T-SHIRT</p>
                                    <strong>$30.00 <span>(Ind 8% tax)</span></strong>
                                </div>
                                <div class="view">
                                    <div class="left">
                                        <i class="fa fa-eye"></i>
                                        <span>View details</span>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-bars"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                            </div>        
                            <div class="item">
                                <div class="image">
                                    <img src="image/custom_image (4).jpg" alt=""/>
                                </div>
                                <div class="content">
                                    <p>BASIC T-SHIRT</p>
                                    <strong>$30.00 <span>(Ind 8% tax)</span></strong>
                                </div>
                                <div class="view">
                                    <div class="left">
                                        <i class="fa fa-eye"></i>
                                        <span>View details</span>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-bars"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                            </div>        
                            <div class="item">
                                <div class="image">
                                    <img src="image/custom_image (4).jpg" alt=""/>
                                </div>
                                <div class="content">
                                    <p>BASIC T-SHIRT</p>
                                    <strong>$30.00 <span>(Ind 8% tax)</span></strong>
                                </div>
                                <div class="view">
                                    <div class="left">
                                        <i class="fa fa-eye"></i>
                                        <span>View details</span>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-bars"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                            </div>        
                            <div class="item">
                                <div class="image">
                                    <img src="image/custom_image (4).jpg" alt=""/>
                                </div>
                                <div class="content">
                                    <p>BASIC T-SHIRT</p>
                                    <strong>$30.00 <span>(Ind 8% tax)</span></strong>
                                </div>
                                <div class="view">
                                    <div class="left">
                                        <i class="fa fa-eye"></i>
                                        <span>View details</span>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-bars"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                            </div>        
                            <div class="item">
                                <div class="image">
                                    <img src="image/custom_image (4).jpg" alt=""/>
                                </div>
                                <div class="content">
                                    <p>BASIC T-SHIRT</p>
                                    <strong>$30.00 <span>(Ind 8% tax)</span></strong>
                                </div>
                                <div class="view">
                                    <div class="left">
                                        <i class="fa fa-eye"></i>
                                        <span>View details</span>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-bars"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
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
                                            items: 4
                                        },
                                        1000: {
                                            items: 4
                                        }
                                    }
                                })
                            })
                        </script>
                    </div>
                </div>
            </section>
            <div style="clear: both;"></div>
            <div class="abc" style="    padding: 0 24px;">
                <div class="check">
                    <div class="left-check">
                        <div class="vg">
                            <i class="fa fa-check-circle"></i>
                        </div>
                        <div class="tg">

                        </div>
                    </div>
                    <div class="left">
                        <p>SIGN UP TO THE NEWSLETTER AND RECEIVE $10 VOUCHER</p>
                        <span>Subtitle, enter your own title, subtitle and icon</span>
                    </div>
                    <div class="right">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-info"></i>
                        <i class="fa fa-skype"></i>
                        <i class="fa fa-google"></i>
                        <i class="fa fa-google"></i>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
            <section id="demos">
                <div class="title">
                    <div class="gach">
                        <div class="gach1"></div>
                        <div class="gach2"></div>
                    </div>
                    <h1>FEATURES PRODUCTS</h1> 
                    <div class="gach">
                        <div class="gach1"></div>
                        <div class="gach2"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="image">
                                    <img src="image/custom_image (4).jpg" alt=""/>
                                </div>
                                <div class="content">
                                    <p>BASIC T-SHIRT</p>
                                    <strong>$30.00 <span>(Ind 8% tax)</span></strong>
                                </div>
                                <div class="view">
                                    <div class="left">
                                        <i class="fa fa-eye"></i>
                                        <span>View details</span>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-bars"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                            </div>        
                            <div class="item">
                                <div class="image">
                                    <img src="image/custom_image (4).jpg" alt=""/>
                                </div>
                                <div class="content">
                                    <p>BASIC T-SHIRT</p>
                                    <strong>$30.00 <span>(Ind 8% tax)</span></strong>
                                </div>
                                <div class="view">
                                    <div class="left">
                                        <i class="fa fa-eye"></i>
                                        <span>View details</span>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-bars"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                            </div>        
                            <div class="item">
                                <div class="image">
                                    <img src="image/custom_image (4).jpg" alt=""/>
                                </div>
                                <div class="content">
                                    <p>BASIC T-SHIRT</p>
                                    <strong>$30.00 <span>(Ind 8% tax)</span></strong>
                                </div>
                                <div class="view">
                                    <div class="left">
                                        <i class="fa fa-eye"></i>
                                        <span>View details</span>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-bars"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                            </div>        
                            <div class="item">
                                <div class="image">
                                    <img src="image/custom_image (4).jpg" alt=""/>
                                </div>
                                <div class="content">
                                    <p>BASIC T-SHIRT</p>
                                    <strong>$30.00 <span>(Ind 8% tax)</span></strong>
                                </div>
                                <div class="view">
                                    <div class="left">
                                        <i class="fa fa-eye"></i>
                                        <span>View details</span>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-bars"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                            </div>        
                            <div class="item">
                                <div class="image">
                                    <img src="image/custom_image (4).jpg" alt=""/>
                                </div>
                                <div class="content">
                                    <p>BASIC T-SHIRT</p>
                                    <strong>$30.00 <span>(Ind 8% tax)</span></strong>
                                </div>
                                <div class="view">
                                    <div class="left">
                                        <i class="fa fa-eye"></i>
                                        <span>View details</span>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-bars"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
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
                                            items: 4
                                        },
                                        1000: {
                                            items: 4
                                        }
                                    }
                                })
                            })
                        </script>
                    </div>
                </div>
            </section>
            <div style="clear: both;"></div>
            <section id="demos">
                <div class="title">
                    <div class="gach">
                        <div class="gach1"></div>
                        <div class="gach2"></div>
                    </div>
                    <h1>POPULAR BRANDS</h1> 
                    <div class="gach">
                        <div class="gach1"></div>
                        <div class="gach2"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="image">
                            <img src="image/y.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="image">
                            <img src="image/y.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="image">
                            <img src="image/y.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="image">
                            <img src="image/y.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="image">
                            <img src="image/y.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="image">
                            <img src="image/y.jpg" alt=""/>
                        </div>
                    </div>
                </div>
            </section>
            <div style="clear: both;"></div>
            <div class="intro">
                <dic class="row">

                    <div class="col-md-3">
                        <div class="item">
                            <div class="left">
                                <span class="sp3" >0</span>
                                <span class="sp4" >$</span>
                                <p>FREE DELIVERY</p>
                            </div>
                            <div class="right">
                                <i class="fa fa-car"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item">
                            <div class="left">
                                <span class="sp3" >30</span>
                                <span class="sp4" >DAYS</span>
                                <p>REFUND GUARANTEE</p>
                            </div>
                            <div class="right">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item">
                            <div class="left">
                                <span class="sp3" >123</span>
                                <span class="sp4" >456 789</span>
                                <p>MON - SAT 7:00 - 18:00</p>
                            </div>
                            <div class="right">
                                <i class="fa fa-headphones"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item">
                            <div class="left">
                                <span class="sp3" >2</span>
                                <span class="sp4" >YEARS</span>
                                <p>GUARANTEE</p>
                            </div>
                            <div class="right">
                                <i class="fa fa-star-half-full"></i>
                            </div>
                        </div>
                    </div>

                </dic>
            </div>
            <div style="clear: both;"></div>
            <div class="footer">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <span id="sp5">Trendy</span>
                            <span id="sp6">Store</span>
                            <div class="p">
                                <p>TrendyStore</p>
                                <p>7 Green Lane, Pêtrborough</p>
                                <p>Cambridgeshire, UK</p>
                                <p>Call Us: (44) 7829 658 452</p>
                                <p>Email: store@store.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="it">
                                    <h2>
                                        Online Store
                                    </h2>
                                    <div class="it-sc">
                                        <i class="fa fa-circle"></i>
                                        <a href="#">How to  Buy?</a>
                                    </div>
                                    <hr>
                                    <div class="it-sc">
                                        <i class="fa fa-circle"></i>
                                        <a href="#">Guarantee</a>
                                    </div>
                                    <hr>
                                    <div class="it-sc">
                                        <i class="fa fa-circle"></i>
                                        <a href="#">Refund Policy</a>
                                    </div>
                                    <hr>
                                    <div class="it-sc">
                                        <i class="fa fa-circle"></i>
                                        <a href="#">FAQ</a>
                                    </div>
                                    <hr>
                                </div>


                            </div>
                            <div class="col-md-4">
                                <div class="it">
                                    <h2>
                                        Our services
                                    </h2>
                                    <div class="it-sc">
                                        <i class="fa fa-circle"></i>
                                        <a href="#">How to  Buy?</a>
                                    </div>
                                    <hr>
                                    <div class="it-sc">
                                        <i class="fa fa-circle"></i>
                                        <a href="#">Guarantee</a>
                                    </div>
                                    <hr>
                                    <div class="it-sc">
                                        <i class="fa fa-circle"></i>
                                        <a href="#">Refund Policy</a>
                                    </div>
                                    <hr>
                                    <div class="it-sc">
                                        <i class="fa fa-circle"></i>
                                        <a href="#">FAQ</a>
                                    </div>
                                    <hr>
                                </div>


                            </div>
                            <div class="col-md-4">
                                <div class="it">
                                    <h2>
                                        Online Store
                                    </h2>
                                    <div class="it-sc">
                                        <i class="fa fa-circle"></i>
                                        <a href="#">How to  Buy?</a>
                                    </div>
                                    <hr>
                                    <div class="it-sc">
                                        <i class="fa fa-circle"></i>
                                        <a href="#">Guarantee</a>
                                    </div>
                                    <hr>
                                    <div class="it-sc">
                                        <i class="fa fa-circle"></i>
                                        <a href="#">Refund Policy</a>
                                    </div>
                                    <hr>
                                    <div class="it-sc">
                                        <i class="fa fa-circle"></i>
                                        <a href="#">FAQ</a>
                                    </div>
                                    <hr>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
             <div style="clear: both;"></div>
            <div class="last">
                <div class="row">
                    <div class="col-md-4">
                        <div class="tiem">
                            <span>JM Trendy J2Store  All Rights Reserved</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-google"></i>
                            <i class="fa fa-skype"></i>
                            <i class="fa fa-twitter"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tiem p">
                            <span>Design by Trọng Nguyễn</span>
                        </div>
                    </div>
                </div>
            </div>  


        </div>


    </body>
</html>
