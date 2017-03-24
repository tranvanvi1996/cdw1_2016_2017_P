<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-1311.less', 'css/type-1311.css');
        ?>
        <link href="css/type-1311.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
      
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-1311">
            <div class="wapper1">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper1">
                        <div class="sc_section " data-animation="animated fadeInUp normal" style="background-image:url(images/custom_bg2.png);background-repeat:no-repeat;background-size:cover;">                                                                                  
                            <div class="columns_wrap">

                                <div class="column-1_2 " style="text-align:center;">
                                    <div style="background-color:#1b3253;padding: 24px;">
                                        <h3 class="sc_title " style="color:#ffffff;fontmargin_top_medium-weight:600;font-size:3.929em;">Welcome</h3>
                                        <h6 class="sc_title" style=" margin-bottom: 40px!important;letter-spacing: 2px; text-align:center;font-weight:400;font-size:0.857em; text-transform: uppercase;color: #96bd42;">to our tennis club</h6>
                                        <p>
                                            <span style="color: #ffffff;">Founded in 1964 by a team of professional tennis players</span>
                                            <br>
                                            <span style="color: #ffffff;"> our club is based in one of the most picturesque areas of</span>
                                            <br>
                                            <span style="color: #ffffff;"> the country and is ideal for family membership.</span>
                                        </p>
                                        <figure class="sc_image"><img src="images/signature.png" alt=""></figure>
                                    </div>
                                </div>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>  
    </body>

</html>