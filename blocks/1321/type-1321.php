
<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="UTF-8" />           
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-1321.less', 'css/type-1321.css');
    ?>
    <link href="css/type-1321.css" rel="stylesheet" type="text/css"/>
    <body>
        <div class="type-1321">
            <div class="content_wrap">
                <div class="content">

                    <div class="padding_top_20_imp ">
                        <div class="general_info_section">

                            <div class="sc_section_overlay">
                                <div class="sc_section_content ">
                                    <div class="columns_wrap  no_margins ">
                                        <div class="column-1_2"></div><div class="column-1_2   custom_shadow1 even text_align_center">
                                            <div class="sc_column_item_inner">
                                                <h3>Welcome</h3>
                                                <h6>to our tennis club</h6>
                                                <div class="margin_top_tiny">
                                                    <p>Founded in 1964 by a team of professional tennis players our club is based in one of the most picturesque areas of the country and is ideal for family membership.</p>
                                                </div>
                                                <figure >
                                                    <img src="images/signature.png" alt="" />
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 