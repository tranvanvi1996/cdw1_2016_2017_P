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
        $less->compileFile('less/1334.less', 'css/1334.css');
        ?>
        <link href="css/1334.css" rel="stylesheet" type="text/css" />
        <link href="css/font.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-1334">
       
        <div class="ornament-top"></div>
        <div class="introduction">
            <div class="detail">
                <div class="sep-text single centered">
                    <img src="images/pho.jpg" alt="" />
                    <div class="sep-text-before">
                        <div class="sep-text-line"></div>
                    </div>
                    <div class="content">
                        <h2 class="text-divider-double">
                                Brunch
                            </h2>
                        <div class="text-divider-subtitle">Starts at 11:00 am</div>
                    </div>
                    <div class="sep-text-after">
                        <div class="sep-text-line"></div>
                    </div>
                </div>
                <div class="fp_box">
                    <h3>American Brunch Combo Menu<span>$ 15</span></h3>
                    <div class="menu_description">Freshly scrambled eggs with applewood smoked bacon, tomatoes, green onions and cheddar cheese.</div>
                </div>
                <div class="fp_box">
                    <h3>American Brunch Combo Menu<span>$ 15</span></h3>
                    <div class="menu_description">Freshly scrambled eggs with applewood smoked bacon, tomatoes, green onions and cheddar cheese.</div>
                </div>
                <div class="fp_box">
                    <h3>American Brunch Combo Menu<span>$ 15</span></h3>
                    <div class="menu_description">Freshly scrambled eggs with applewood smoked bacon, tomatoes, green onions and cheddar cheese.</div>
                </div>
                <div class="fp_box">
                    <h3>American Brunch Combo Menu<span>$ 15</span></h3>
                    <div class="menu_description">Freshly scrambled eggs with applewood smoked bacon, tomatoes, green onions and cheddar cheese.</div>
                </div>
                <div class="fp_box">
                    <h3>American Brunch Combo Menu<span>$ 15</span></h3>
                    <div class="menu_description">Freshly scrambled eggs with applewood smoked bacon, tomatoes, green onions and cheddar cheese.</div>
                </div>
            </div>
        </div>
        <div class="ornament-bottom"></div>
    </div>
</body>

</html>