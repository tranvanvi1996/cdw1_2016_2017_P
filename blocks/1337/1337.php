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
        $less->compileFile('less/1337.less', 'css/1337.css');
        ?>
        <link href="css/font.css" rel="stylesheet" type="text/css" />
        <link href="css/1337.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="row">
         <div class="type-1337">
        <div class="col-md-6">
           
                <div class="introduction"></div>
          
        </div>
        <div class="col-md-6">
          
                <div class="detail">
                    <div class="sep-text single centered">
                        <img src="images/illustration-1.svg" alt="illustration-1" style="margin-bottom: 15px;">
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
                    <p>❈</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>