<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1365.less', 'css/1365.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/1365.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type_1365">
            <div class="header">
                <h1>Almond Cookies Breakfast</h1>
            </div>
            <div class="container">

                <div class="banner">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image">
                                <img src="images/breakfast-7-605x471.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="summary">
                                <p>£5.00</p>
                                <div class="description">
                                    <p>Almond cookes with almond in the crumbly cookies. Make almond cookies with this easy recipe for the best tasting homemade almond cookies ever.</p>
                                    <form class="cart" method="post" enctype="multipart/form-data">
                                        <div class="quantity">
                                            <input type="number" class=" qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
                                        </div>
                                        <button type="submit" name="add-to-cart" value="12035" class=" button alt">Add to cart</button>
                                    </form>
                                    <div class="product_meta">
                                        <span class="posted_in">Category: 
                                            <a href="#" rel="tag">Breakfast</a>
                                        </span>
                                        <span class="tagged_as">Tags: 
                                            <a href="#" rel="tag">bio</a> 
                                            <a href="#" rel="tag">breakfast</a> 
                                            <a href="#" rel="tag">Gourmet</a> 
                                            <a href="#" rel="tag">sweet</a>
                                        </span>
                                    </div>
                                    <div class="sd-social">
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li class="tumblr"><a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                            <li class="google"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
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