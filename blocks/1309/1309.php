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
        $less->compileFile('less/1309.less', 'css/1309.css');
        ?>
        <link href="css/1309.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-1309">
            <nav>
                <!-- header button -->
                <div class="b_header_bottom">
                    <div class="container">
                        <div class="row">
                            <div id="logo">
                                <a href="#">
                                    <img src="images/logo header middle.png" title="Opencart  Super Deal Store" alt="Opencart  Super Deal Store">
                                </a>
                            </div>
                            <div class="b-cart cart">
                                <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn-dropdown-cart dropdown-toggle">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="b-cart-total"><b>0 item(s) - $0</b></span>
                                </button>
                            </div>
                            <div class="top-links">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="wishlist-total" title="Wish List (0)">
                                            <i class="fa fa-star"></i><span>Wish List (0)</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" title="My Account" class="dropdown-toggle my_account" data-toggle="dropdown">
                                            <i class="fa fa-user"></i><span>My Account</span><i class="fa fa-angle-down"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="boss-search" class="  columns  ">
                                <div class="input_cat">
                                    <select name="filter_category_id" id="" sb="60401639" style="display: none;">
                                        <option value="0" selected="selected">All Categories</option>
                                    </select>
                                    <div id="" class="sbHolder">
                                        <a id="" href="#" class="sbToggle"></a>
                                        <a id="" href="#" class="sbSelector">All Categories</a>
                                        <ul id="" class=" " style="display: none;">
                                            <li><a href="#0" rel="0" class="  ">All Categories</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="search-form">
                                    <div id="search" class="input-group">
                                        <input type="text" name="search" value="" placeholder="Search here..." class="form-control    input-lg" autocomplete="off">
                                        <ul class="dropdown-menu"></ul>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- hết header button-->
            </nav>
            <!--menubar-->
            <div class="menubar">
                <div class="container" style="background:transparent;">
                    <div class="row">
                        <a class="open-panel"><b>MENU</b><span><i class="fa fa-bars"></i></span></a>
                        <nav class="mega-menu">
                            <a class="close-panel"><i class="fa fa-times-circle"></i></a>
                            <ul class="nav nav-pills">
                                <li>
                                    <a href="#"><span class=" ">Home</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class=" ">SuperDeals</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class=" ">Featured Brands</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class=" ">Bestselling</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class=" ">Trending Styles</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class=" ">Blog</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>