<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- head -->
        <meta charset="utf-8">
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="css/header-logo.css" rel="stylesheet" type="text/css"/>
        <!--..-->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/header-logo.css" rel="stylesheet" type="text/css"/>
        <!--..-->
        <!--......................-->
        <!--...-->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>    
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!--..-->
        <!--.....-->
      
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style.less', 'css/style.css');
        ?>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        
       
    </head>
    <body>

        <div class="cdw2">
            

            <div class="banner">
                <div class="container">
                    <div class="image">
                        <img src="image/gourmet-element-1.png" id="img2">
                        <img src="image/banner.jpg" id="img1">
                    </div>
                    <div class="text" style="width: 100%;">
                        <div class="a" style="">
                            <h1>Gour  meét</h1>
                         <span>+1869305953   </span>
                         <span>   +1869305953</span>
                        </div>
                    </div>
                </div>
            </div>

            <div style="clear: both;"></div>

         
        </div>

    </div>

</body>
</html>