<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-1326.less', 'css/type-1326.css');
        ?>
        <link href="css/type-1326.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-1326">
            <div class=" padding_bottom_7_143em_imp">
                <div class="container">
                    <h3 class="sc_title">Club Membership</h3>
                    <h4 class="sc_title text_uppercase">Select the best plan</h4>
                    <div class="columns_wrap">
                        <!-- Price block -->
                        <div class="col-md-3">
                            <div class="sc_price_block">
                                <div class="sc_price_block_title">
                                    <span>Junior</span>
                                </div>
                                <div class="sc_price_block_money">
                                    <div class="sc_price">
                                        <span class="sc_price_currency">$</span>
                                        <span class="sc_price_money">250</span>
                                        <span class="sc_price_period">mth</span>
                                    </div>
                                </div>
                                <div class="sc_price_block_description">Juniors must be less than 19 years old as at 1st January</div>
                                <div class="sc_price_block_link">
                                    <a href="#" class="sc_button sc_button_style_filled sc_button_size_large">
                                        <span class="cube flip-to-top">
                                            <span class="default-state">
                                                <span>Order now</span>
                                            </span>
                                            <span class="active-state">
                                                <span>Order now</span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Price block -->
                        <!-- Price block -->
                        <div class="col-md-3">
                            <div class="sc_price_block">
                                <div class="sc_price_block_title">
                                    <span>Individual</span>
                                </div>
                                <div class="sc_price_block_money">
                                    <div class="sc_price">
                                        <span class="sc_price_currency">$</span>
                                        <span class="sc_price_money">350</span>
                                        <span class="sc_price_period">mth</span>
                                    </div>
                                </div>
                                <div class="sc_price_block_description">Save $98 every year compared to the monthly plan by paying yearly.</div>
                                <div class="sc_price_block_link">
                                    <a href="#" class="sc_button sc_button_style_filled sc_button_size_large">
                                        <span class="cube flip-to-top">
                                            <span class="default-state">
                                                <span>Order now</span>
                                            </span>
                                            <span class="active-state">
                                                <span>Order now</span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Price block -->
                        <!-- Price block -->
                        <div class="col-md-3">
                            <div class="sc_price_block">
                                <div class="sc_price_block_title">
                                    <span>Recommended</span>
                                </div>
                                <div class="sc_price_block_money">
                                    <div class="sc_price">
                                        <span class="sc_price_currency">$</span>
                                        <span class="sc_price_money">450</span>
                                        <span class="sc_price_period">mth</span>
                                    </div>
                                </div>
                                <div class="sc_price_block_description">Save $128 by inviting your family to train with you monthly</div>
                                <div class="sc_price_block_link">
                                    <a href="#" class="sc_button sc_button_style_filled sc_button_size_large">
                                        <span class="cube flip-to-top">
                                            <span class="default-state">
                                                <span>Order now</span>
                                            </span>
                                            <span class="active-state">
                                                <span>Order now</span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Price block -->
                        <!-- Price block -->
                        <div class="col-md-3">
                            <div class="sc_price_block">
                                <div class="sc_price_block_title">
                                    <span>Family</span>
                                </div>
                                <div class="sc_price_block_money">
                                    <div class="sc_price">
                                        <span class="sc_price_currency">$</span>
                                        <span class="sc_price_money">450</span>
                                        <span class="sc_price_period">mth</span>
                                    </div>
                                </div>
                                <div class="sc_price_block_description">Save $128 by inviting your family to train with you monthly</div>
                                <div class="sc_price_block_link">
                                    <a href="#" class="sc_button sc_button_style_filled sc_button_size_large">
                                        <span class="cube flip-to-top">
                                            <span class="default-state">
                                                <span>Order now</span>
                                            </span>
                                            <span class="active-state">
                                                <span>Order now</span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Price block -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
