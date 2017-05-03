<!DOCTYPE html>
<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1369.less', 'css/1369.css');
        ?>
        <link href="css/font.css" rel="stylesheet" type="text/css" />
        <link href="css/1369.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-1369">
            <div class="introduction"></div>
            <div class="item">
                <div class="detail">
                    <div class="sep-text single centered">
                        <img src="images/illustration-4.svg" alt="illustration-4" style="margin-bottom: 15px;">
                        <div class="sep-text-before">
                            <div class="sep-text-line"></div>
                        </div>
                        <div class="content">
                            <h2 class="text-divider-double">
                                Dessert
                            </h2>
                            <div class="text-divider-subtitle">Today Specials</div>
                        </div>
                        <div class="sep-text-after">
                            <div class="sep-text-line"></div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="fp_box">
                            <h3 class="" title="American Brunch Combo Menu">Creamy mascarpone cake with passion fruit sauce<span class="fp_price">$8</span></h3>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fp_box">
                            <h3 class="" title="American Brunch Combo Menu">Fig and lemon cake<span class="fp_price">$7</span></h3>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fp_box">
                            <h3 class="" title="American Brunch Combo Menu">Chocolate Cherry Cake with Meringue Butter Cream<span class="fp_price">$8</span></h3>
                            <div class="menu_description">Vanilla, milk, dark chocolate, cherries, eggs, butter</div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fp_box">
                            <h3 class="" title="American Brunch Combo Menu">Blueberry Sweet Rolls with Lemon Glaze<span class="fp_price">$7</span></h3>
                            <div class="menu_description">Butter, blueberries, lemon, heavy cream - an irresistible sweet-sour combination of tastes.</div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fp_box">
                            <h3 class="" title="American Brunch Combo Menu">Berries and creme tart<span class="fp_price">$7</span></h3>
                            <div class="menu_description">Butter crust, vanilla pudding with heavy cream, topping with fresh raspberries, blueberries, cranberry.</div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fp_box">
                            <h3 class="" title="American Brunch Combo Menu">Classic Blueberry Pie<span class="fp_price">$6</span></h3>
                            <div class="menu_description">Pastry, cinnamon, blueberries, lemon juice</div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fp_box">
                            <h3 class="" title="American Brunch Combo Menu">Blueberry banana pancakes<span class="fp_price">$5</span></h3>
                            <div class="menu_description">Banana, almond milk, vanilla, cinnamon, blueberry topping</div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fp_box">
                            <h3 class="" title="American Brunch Combo Menu">Traditional pancakes with maple syrup butter & berry jam<span class="fp_price">$5</span></h3>
                            <div class="menu_description">Milk, eggs, strawberries, butter, maple syrup</div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fp_box">
                            <h3 class="" title="American Brunch Combo Menu">Pain au chocolat<span class="fp_price">$4</span></h3>
                            <div class="menu_description">Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for an impressive and indulgent addition to ...</div>
                        </div>
                    </a>
                    <p>❈</p>
                </div>
            </div>
        </div>
    </body>

</html>