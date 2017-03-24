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
        $less->compileFile('less/1307.less', 'css/1307.css');
        ?>
        <link href="css/1307.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-1307">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="footer_column">
                            <div class="footer_column_content col-sm-8 col-xs-12">
                                <!-- Footer  1-->
                                <div class="bt-information column col-sm-4 col-xs-12">
                                    <h3><span>Information</span></h3>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Site Map</a></li>
                                    </ul>
                                </div>
                                <!-- Footer 2 -->
                                <div class="bt-extras column col-sm-4 col-xs-12">
                                    <h3><span>Extras </span></h3>
                                    <ul>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Gift Vouchers</a></li>
                                        <li><a href="#">Specials</a></li>

                                    </ul>
                                </div>
                                <!-- Footer 3 -->
                                <div class="bt-account column col-sm-4 col-xs-12">
                                    <h3><span>My Account</span></h3>
                                    <ul>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="#">Affiliates</a></li>
                                        <li><a href="#">Wish List</a></li>

                                    </ul>
                                </div>
                                <!-- payment link -->
                                <div class="ads_payment">
                                    <div class="b_footer_ads">
                                        <a href="#" title="Google Play"><img alt="google_play" src="images/google_play.png"></a>
                                        <a href="#" title="App Store"><img alt="app_store" src="images/app_store.png"></a>
                                    </div>

                                    <div class="payment">
                                        <ul>
                                            <li>
                                                <a title="Visa" href="#"><img alt="Visa" src="images/ads_visa.png"></a>
                                            </li>
                                            <li>
                                                <a title="MasterCard" href="#"><img alt="MasterCard" src="images/ads_meastro.png"></a>
                                            </li>
                                            <li>
                                                <a title="Cirrus" href="#"><img alt="Cirrus" src="images/ads_cirrus.png"></a>
                                            </li>
                                            <li>
                                                <a title="Discover" href="#"><img alt="Discover" src="images/ads_discover.png"></a>
                                            </li>
                                            <li>
                                                <a title="Bank" href="#"><img alt="Bank" src="images/ads_bank.png"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end footer column -->

                            <!--logo footer -->
                            <div class="bt-information column col-sm-4 col-xs-12">
                                <a href="#" title="logo"><img alt="logo" src="images/logo_footer.png"></a>
                                <div class="b_static_footer">
                                    <h3><span>Customer Center</span></h3>
                                    <p class="street"><i class="fa fa-map-marker"></i> 123 Street name, City, ABC</p>
                                    <p class="support"><i class="fa fa-envelope"></i> support@bossthemes.com</p>
                                    <p class="service"><i class="fa fa-life-ring"></i> Customer Service (8:00-17h:00)</p>
                                    <p class="phone">(123) 456-7890
                                        <br> (123) 456-7890</p>
                                </div>
                            </div>
                            <!--end logo footer -->
                        </div>

                    </div>
                </div>
                <div class="powered-payment">
                    <div class="container">
                        <div class="row">
                            <div class="powered col-sm-12 col-xs-12 pull-left">
                                <div id="powered">
                                    <p>Copyright © 2015 - SuperDeal. All rights Reserved. <span>Opencart Themes by <a href="http://www.bossthemes.com">Bossthemes.com.</a></span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </footer>

        </div>

    </body>

</html>