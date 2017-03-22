<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
        <title>Products &#8211; Tennis club</title>
        
        <link rel="stylesheet" href="css/fontello/css/fontello.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/woocommerce/woocommerce.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/plugin.woocommerce.css" type="text/css" media="all" />
        <link href="css/shortcodes.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/skin.css" type="text/css" media="all" /

    </head>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-1324.less', 'css/type-1324.css');
    ?>
    <link href="css/type-1324.css" rel="stylesheet" type="text/css"/>
    <body>
        <div class="type-1324">
            <div class="container">
                <div class="row">
                    <div class="page_content_wrap  ">
                        <div class="content_wrap col-md-12">
                            <h2 class="sc_title sc_title_underline sc_align_center    ">Pro Shop</h2>
                            <!--Banner section-->
                            <div class="sc_section shop_banner ">
                                <div class="sc_section_inner col-md-6">
                                    <div class="sc_section  ">
                                        <div class="sc_section_inner">
                                            <h3 class="sc_title ">New Tennis Footwear</h3>
                                            <div class="text_uppercase ">
                                                <p>
                                                    Premium quality shoes to fit the level from beginners to professionals
                                                </p>
                                            </div>
                                            <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large" style="margin-top: 10%;">
                                                <span class="cube flip-to-top">
                                                    <span class="default-state">
                                                        <span>Learn more</span>
                                                    </span>
                                                    <span class="active-state">
                                                        <span>Learn more</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/Banner section-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
