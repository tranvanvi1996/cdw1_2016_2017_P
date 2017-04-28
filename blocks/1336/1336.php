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
        $less->compileFile('less/1336.less', 'css/1336.css');
        ?>
        <link href="css/1336.css" rel="stylesheet" type="text/css" />
        <link href="css/font.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                 <div class="type-1336">
                <div class="col-md-4">
                   
                        <div class="ornament-top"></div>
                        <div class="news">
                            <div class="sep-text single centered">
                                <img src="images/coffe.jpg" alt="" style="    margin-bottom: 15px;">
                                <div class="sep-text-before">
                                    <div class="sep-text-line"></div>
                                </div>
                                <div class="content">
                                    <h2 class="text-divider-double">
                                        Soft Drinks
                                    </h2>
                                    <div class="text-divider-subtitle">Coffee Specials</div>
                                </div>

                                <div class="sep-text-after">
                                    <div class="sep-text-line"></div>
                                </div>
                            </div>
                            <img src="images/header-small-1.jpg" alt="" width="100%" />
                            <div class="fp_box">
                                <h3>Caffè macchiato<span>$5.90</span></h3>
                                <div class="menu_description">An espresso coffee drink with a small amount of milk, usually foamed.</div>
                            </div>
                            <div class="fp_box">
                                <h3>Cappuccino<span>$5.90</span></h3>
                                <div class="menu_description">A cappuccino is an Italian coffee drink that is traditionally prepared with espresso, hot milk, and steamed milk foam.</div>
                            </div>
                            <div class="fp_box">
                                <h3>Caffe Latte<span>$5.90</span></h3>
                                <div class="menu_description">A Latte is a coffee drink made with espresso and steamed milk.</div>
                            </div>
                        </div>
                        <div class="ornament-bottom"></div>
                    </div>
              
                <div class="col-md-4">
                  
                        <div class="ornament-top1"></div>
                        <div class="background">
                            <div class="top">
                                <img src="images/map.jpg" alt="" />
                                <br>
                                <h>Contact</h>
                                <p>Book your table for lunch or dinner.
                                <p>
                                <h3>+359 562 958</h3>
                                <div class="box">
                                    <div class="text">RESERVATION</div>
                                </div>
                            </div>
                            <div class="ornament-bottom1"></div>
                            <div class="bot">
                                <h>Opening Times</h>
                                <p>Weekdays
                                    <br>07:00am – 11:00pm</p>
                                <p>Weekends
                                    <br>9:00pm – 12:00pm</p>
                            </div>
                        </div>
                        <div class="ornament-bottom2"></div>
                    </div>
               
                <div class="col-md-4">
                 
                        <div class="ornament-top"></div>
                        <div class="news">
                            <div class="sep-text single centered">
                                <img src="images/ly.jpg" alt="" style="    margin-bottom: 15px;">
                                <div class="sep-text-before">
                                    <div class="sep-text-line"></div>
                                </div>
                                <div class="content">
                                    <h2 class="text-divider-double">
                                        Wines
                                    </h2>
                                    <div class="text-divider-subtitle">Cocktails</div>
                                </div>
                                <div class="sep-text-after">
                                    <div class="sep-text-line"></div>
                                </div>
                            </div>
                            <img src="images/header-small-2.jpg" alt="" width="100%" />
                            <div class="fp_box">
                                <h3>Caffè macchiato<span>$5.90</span></h3>
                                <div class="menu_description">An espresso coffee drink with a small amount of milk, usually foamed.</div>
                            </div>
                            <div class="fp_box">
                                <h3>Cappuccino<span>$5.90</span></h3>
                                <div class="menu_description">A cappuccino is an Italian coffee drink that is traditionally prepared with espresso, hot milk, and steamed milk foam.</div>
                            </div>
                            <div class="fp_box">
                                <h3>Caffe Latte<span>$5.90</span></h3>
                                <div class="menu_description">A Latte is a coffee drink made with espresso and steamed milk.</div>
                            </div>
                        </div>
                        <div class="ornament-bottom"></div>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>