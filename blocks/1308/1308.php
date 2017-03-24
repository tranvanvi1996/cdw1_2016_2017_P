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
        $less->compileFile('less/1308.less', 'css/1308.css');
        ?>
        <link href="css/1308.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>

        <div class="type-1308">
            <nav>
                <div class="b_header_top">
                    <div class="b_static_top">
                        <img src="images/banner-top.jpg" alt="banner" title="banner">
                        <div class="caption">
                            <div class="b_static_buy"><a href="#" title="Buy Now">Buy Now</a></div>
                        </div>
                        <div class="b_static_x">X</div>
                    </div>
                </div>
                <div class="b_header_middle">
                    <div class="container">
                        <div class="row">
                            <div class="top_left col-sm-6 col-xs-12 pull-left">
                                <div class="language_currency">
                                    <!-- từ từ -->
                                    <form action="#" method="post" enctype="multipart/form-data" class="currency">
                                        <div class="btn-group">
                                            <button class="btn-link dropdown-toggle" data-toggle="dropdown">
                                                <span>Currency</span>
                                                <strong>
                                                    <i class="fa fa-usd">
                                                    </i><span>$</span>
                                                    <b>USD</b>
                                                </strong>
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <button class="currency-select" type="button" name="EUR">€<b> EUR</b></button>
                                                </li>
                                                <li>
                                                    <button class="currency-select" type="button" name="GBP">£<b> GBP</b></button>
                                                </li>
                                                <li>
                                                    <button class="currency-select" type="button" name="USD">$<b> USD</b></button>
                                                </li>
                                            </ul>
                                        </div>
                                        <input type="hidden" name="code" value="">
                                        <input type="hidden" name="redirect" value="">
                                    </form>
                                    <!-- language-->
                                    <form action="#" method="post" enctype="multipart/form-data" class="language">
                                        <div class="btn-group">
                                            <button class="btn-link dropdown-toggle" data-toggle="dropdown">
                                                <span>Language</span>
                                                <strong><img src="images/anh.png" alt="English" title="English">
                                                    <b>English</b></strong>
                                                <i class="fa fa-angle-down"></i></button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="en"><img src="images/anh.png" alt="English" title="English"><span>English</span></a>
                                                </li>
                                                <li>
                                                    <a href="de"><img src="images/duc.png" alt="Deutsch" title="Deutsch"><span>Deutsch</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <input type="hidden" name="code" value="">
                                        <input type="hidden" name="redirect" value="#">
                                    </form>
                                </div>
                                <div class="contact">
                                    <a href="#">
                                        <i class="fa fa-phone"></i>
                                    </a>
                                    <span>123 908 467</span>
                                </div>
                            </div>
                            <div class="top_right col-sm-6 col-xs-12 pull-right">
                                <div class="footer-social">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#" data-original-title="Facebook" data-placement="top" data-toggle="tooltip"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#" data-original-title="Twitter" data-placement="top" data-toggle="tooltip"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="">
                                            <a href="#" data-original-title="Googleplus" data-placement="top" data-toggle="tooltip"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#" data-original-title="Pinterest" data-placement="top" data-toggle="tooltip"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                        <li class="rss">
                                            <a href="#" data-original-title="RSS" data-placement="top" data-toggle="tooltip"><i class="fa fa-rss"></i></a>
                                        </li>
                                        <li class="youtube">
                                            <a href="#" data-original-title="Youtube" data-placement="top" data-toggle="tooltip"><i class="fa fa-youtube-play"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#" data-original-title="Instagram" data-placement="top" data-toggle="tooltip"><i class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </body>

</html>