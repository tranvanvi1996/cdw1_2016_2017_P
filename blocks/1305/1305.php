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
        $less->compileFile('less/1305.less', 'css/1305.css');
        ?>
        <link href="css/1305.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="type-1305">
                    <!--list 1 -->
                    <div class="bt-list-grid-deal ">
                        <div class="box-heading">
                            <h1>Best Of Tech</h1></div>


                        <!--cột 1 san phẩm -->
                        <div class=" col-sm-4 col-xs-12">

                            <div class="column-content">
                                <div class="product-thumb product-grid ">
                                    <div class="image ">
                                        <a href="#"><img src="images/bestoftest1.jpg" alt="Nulla accus antium dolorqueme mquemque" title="Nulla accus antium dolorqueme mquemque" class="img-responsive"></a>
                                        <div class="sale-info sale-grid">
                                            <!-- dong ho -->
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                            </div>
                                            <!-- end -->
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <div class="name"><a title="Nulla accus antium dolorqueme mquemque" href="#">Nulla accus antium dolorqueme mquemque</a></div>
                                        <div class="percent">
                                            <span>6%</span>
                                        </div>
                                        <p class="price">
                                            <span class="price-old">$98</span>
                                            <span class="price-new">$92</span>
                                        </p>
                                        <div class="button-group bt-button-group">
                                            <button type="button" onclick="btadd.cart('31');" class="btn-cart">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--cột 2 san phẩm -->
                        <div class=" col-sm-4 col-xs-12">
                            <div class="column-content">
                                <div class="product-thumb product-list ">
                                    <div class="image ">
                                        <a href="#"><img src="images/bestoftest2.jpg" alt="Impedit Quo accus antium doloremque" title="Impedit Quo accus antium doloremque" class="img-responsive"></a>
                                    </div>
                                    <div class="caption">
                                        <div class="name"><a title="Impedit Quo accus antium doloremque" href="#">Impedit Quo accus antium doloremque</a></div>
                                        <div class="percent">
                                            <span>15%</span>
                                        </div>
                                        <p class="price">
                                            <span class="price-old">$122</span>
                                            <span class="price-new">$104</span>
                                        </p>
                                        <div class="button-group bt-button-group">
                                            <button type="button" onclick="btadd.cart('31');" class="btn-cart">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb product-list ">
                                    <div class="image ">
                                        <a href="#"><img src="images/bestoftest3.jpg" alt="Provide, healthcare growth nonviolent" title="Provide, healthcare growth nonviolent" class="img-responsive"></a>
                                    </div>
                                    <div class="caption">
                                        <div class="name"><a title="Provide, healthcare growth nonviolent" href="#">Provide, healthcare growth nonviolent</a></div>
                                        <div class="percent">
                                            <span>10%</span>
                                        </div>
                                        <p class="price">
                                            <span class="price-old">$122</span>
                                            <span class="price-new">$110</span>
                                        </p>
                                        <div class="button-group bt-button-group">
                                            <button type="button" onclick="btadd.cart('31');" class="btn-cart">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--cột 3 san phẩm -->
                        <div class=" col-sm-4 col-xs-12">
                            <div class="column-content">
                                <div class="product-thumb product-list ">
                                    <div class="image ">
                                        <a href="#"><img src="images/bestoftest4.jpg" alt="Impedit Quo accus antium doloremque" title="Impedit Quo accus antium doloremque" class="img-responsive"></a>
                                    </div>
                                    <div class="caption">
                                        <div class="name"><a title="Impedit Quo accus antium doloremque" href="#">Impedit Quo accus antium doloremque</a></div>
                                        <div class="percent">
                                            <span>15%</span>
                                        </div>
                                        <p class="price">
                                            <span class="price-old">$122</span>
                                            <span class="price-new">$104</span>
                                        </p>
                                        <div class="button-group bt-button-group">
                                            <button type="button" onclick="btadd.cart('31');" class="btn-cart">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- list san pham  -->
                                <div class="product-thumb product-list ">
                                    <!-- hinh  -->
                                    <div class="image ">
                                        <a href="#"><img src="images/bestoftest3.jpg" alt="Provide, healthcare growth nonviolent" title="Provide, healthcare growth nonviolent" class="img-responsive"></a>
                                    </div>
                                    <!-- class chung  -->
                                    <div class="caption">
                                        <!-- name-->
                                        <div class="name">
                                            <a title="Provide, healthcare growth nonviolent" href="#">Provide, healthcare growth nonviolent</a>
                                        </div>
                                        <!-- sale  -->
                                        <div class="percent">
                                            <span>10%</span>
                                        </div>
                                        <!-- gia  -->
                                        <p class="price">
                                            <span class="price-old">$122</span>
                                            <span class="price-new">$110</span>
                                        </p>
                                        <!-- button buy now  -->
                                        <div class="button-group bt-button-group">
                                            <button type="button" onclick="btadd.cart('31');" class="btn-cart">Buy Now</button>
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