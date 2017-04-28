<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1342.less', 'css/1342.css');
        ?>
        <link href="css/font.css" rel="stylesheet" type="text/css" />
        <link href="css/1342.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="type-1342">
        <div class="row">
            <div class="col-md-2">
                <div class="news-1"></div>
            </div>
            <div class="col-md-4">
                <div class="detail">
                    <div class="sep-text">
                        <img src="images/shusi.png" alt="" />
                        <div class="content">
                            <h3>Brunch</h3>
                            <div class="text">Today Specials</div>
                        </div>
                    </div>
                    <div class="fp_box">
                        <h3>Cashew Chicken With Stir-Fry Vegetables<span class="fp_price">$22</span></h3>
                        <div class="menu_description">Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.</div>
                    </div>
                    <div class="fp_box">
                        <h3>Optic Big Breakfast Combo Menu<span class="fp_price">$20</span></h3>
                        <div class="menu_description"></div>
                    </div>
                    <div class="fp_box">
                        <h3>Coffee and Pain au chocolat Combo Menu<span class="fp_price">$11</span></h3>
                        <div class="menu_description">Hot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="coffe">
                    <div class="sep-text">
                        <img src="images/coffe.png" alt="" style="margin-bottom: 24px;" />
                        <div class="content">
                            <h3>
                                    Happy hour
                                </h3>
                            <div class="text">Today Specials</div>
                        </div>
                    </div>
                    <p>The restaurant will open at 3pm for happy hour and dinner service starting at 5pm. We will continue to offer brunch on weekends from 10am-3pm with bottomless mimosas. We will also continue with our late night lounge on Friday and Saturdays until 2am.</p>
                    <h4>+359 562 958</h4>
                    <h6>30 minute guarantee!</h6>
                    <div class="box">
                        <div class="text">Book a table!</div>
                        <div class="text">Book a table!</div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="news-2"></div>
            </div>
        </div>
    </div>

</body>

</html>