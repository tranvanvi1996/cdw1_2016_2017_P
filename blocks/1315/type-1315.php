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
        $less->compileFile('less/type-1315.less', 'css/type-1315.css');
        ?>
        <link href="css/type-1315.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-1315">	    
            <div class="feature">
                <div class="container">
                    <div class="title">
                        <h1>Featured Products</h1>
                        <span>NEW COLLECTION</span>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="product">
                                <div class="image">
                                    <img src="image/product-10-300x300.jpg" alt=""/>
                                    <div class="icon">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>Men’s Climacool Leap Running Tennis Shoe</p>

                                    <div class="money">
                                        <span>£ 87.00</span>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="product">
                                <div class="image">
                                    <img src="image/product-6-300x300.jpg" alt=""/>
                                    <div class="sale">
                                        <h5>SALE!</h5>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>Men’s Climacool Leap Running Tennis Shoe</p>

                                    <div class="money">
                                        <span>£ 87.00</span>
                                        <del>£ 87.00</del>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="product">
                                <div class="image">
                                    <img src="image/product-1-300x300.jpg" alt=""/>
                                    <div class="icon">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>Men’s Climacool Leap Running Tennis Shoe</p>

                                    <div class="money">
                                        <span>£ 87.00</span>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="product">
                                <div class="image">
                                    <img src="image/product-6-300x300.jpg" alt=""/>
                                    <div class="sale">
                                        <h5>SALE!</h5>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                               <div class="info">
                                    <p>Men’s Climacool Leap Running Tennis Shoe</p>

                                    <div class="money">
                                        <span>£ 87.00</span>
                                        <del>£ 87.00</del>    
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