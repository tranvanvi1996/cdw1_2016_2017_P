<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <link href="fontello/css/fontello.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-1329.less', 'css/type-1329.css');
        ?>
        <link href="css/type-1329.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-1329">

            <div class="page_content_wrap ">

                <!-- Content -->
                <div class="container">
                    <article class="row">
                        <div class="col-md-6">
                            <div class="product ">
                                <span class="onsale">Sale!</span>

                                <a class="hover_icon hover_icon_view" href="#">
                                    <img src="images/1.jpg" alt="product-8" title="product-8">
                                </a>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Summary -->

                            <h1 class="product_title entry-title">HEAD Instinct Junior 25 Prestrung Tennis Racquet</h1>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            <i style=" color: #d3ced2;" class="fa fa-circle" aria-hidden="true"></i>
                            <i style=" color: #d3ced2;" class="fa fa-circle" aria-hidden="true"></i>
                            <div>
                                <p class="hell1">

                                    <span class="amount">£148.00</span>

                                    <del>
                                        <span class="amount1">£190.00</span>
                                    </del>
                                </p>
                            </div>
                            <div class="description">
                                <p>Nullam tincidunt tempus ligula, a dapibus massa ullamcorper et. Aliquam facilisis, massa in malesuada vehicula, odio mauris gravida sem, molestie imperdiet metus urna sit amet ex.</p>
                            </div>
                            <form class="cart" method="post">
                                <div class="">
                                    <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="  text" size="4">

                                    <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                            </form>
                            <div class="posttt">
                                <span class="posted_in">Categories:
                                    <a href="#">Racquet Grips</a>,
                                    <a href="#">Racquets</a>,
                                    <a href="#">Sales &amp; Deals</a>
                                </span>
                                <br>
                                <span class="tagged_as">Tags:
                                    <a href="#">equipment</a>,
                                    <a href="#">tennis</a>
                                </span>
                                <br>
                                <span class="product_id">Product ID:1078
                                </span>
                            </div>                       
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </body>

</html>