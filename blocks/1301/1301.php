<!DOCTYPE html>
<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1301.less', 'css/1301.css');
        ?>
        <link href="css/1301.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="boss-new-position col-sm-12">
                    <div class="type-1301">
                        <div id="bt_slideshow">
                            <div class="header_slider">
                            
                                 
                                     
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <!-- Khởi tạo -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                                </ol>
                                                <!-- Hình Ảnh -->
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <img src="images/slide1.jpg" alt="Chania" width="460" height="345">
                                                        <div class="carousel-caption">
                                                            <p>July 25th, 2015</p>
                                                            <h3>SALE OFF 15%</h3>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <img src="images/slide2.jpg" alt="Chania" width="460" height="345">
                                                        <div class="carousel-caption">
                                                            <p>COLLECTION 2016</p>
                                                            <h3>HI-TECH</h3>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <img src="images/slide3.jpg" alt="Flower" width="460" height="345">
                                                        <div class="carousel-caption">
                                                            <p>July 25th, 2015</p>
                                                            <h3>SHOPPING</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                     
                                 
                             
                            </div>

                            <div class="bt-box box-special">
                                <div class="box-heading">
                                    <h1>TRENDING DEALS</h1></div>
                                <div class="box-content">
                                    <div class="row">
                                        <div class="item  col-sm-12 col-xs-12">
                                            <div class="product-thumb">
                                                <div class="image ">
                                                    <a href="#"><img src="images/trendding deals.jpg" alt="demo" title="demo" class="img-responsive"></a>

                                                </div>
                                                <div class="caption">
                                                    <div class="name"><a title="Samsung" href="#">Samsung Sync accus antium doloremque</a>
                                                    </div>
                                                    <div class="percent">
                                                        <span>25%</span>
                                                    </div>
                                                    <p class="price">
                                                        <span class="price-old">$242</span> <span>$182</span>
                                                    </p>
                                                    <div class="button-group">
                                                        <button type="button" onclick="btadd.cart('49');" class="btn-cart">
                                                            <i class="fa fa-shopping-cart"></i>Buy Now
                                                        </button>
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