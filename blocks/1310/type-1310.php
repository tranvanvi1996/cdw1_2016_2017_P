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
        $less->compileFile('less/type-1310.less', 'css/type-1310.css');
        ?>
        <link href="css/type-1310.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />


        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>


        <div class="type-1310">
            <div class="wapper1">
                <div class="top_panel_middle">
                    <div class="content_wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="contact_logo">
                                        <div class="logo">
                                            <a href="#"><img src="images/logo.png"  alt="" width="291" height="50" class="img-responsive"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-right: 0 !important;">

                                    <div class="header">

                                        <div class="navbar-collapse collapse" >
                                            <ul class="nav navbar-nav">

                                                <li class="dropdown">
                                                    <a data-toggle="dropdown" href="">Home<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Home1</a></li>
                                                        <li><a href="#">Home2</a></li>

                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a data-toggle="dropdown" href="">Pages<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">typography</a></li>
                                                        <li><a href="#">shortcode   </a></li>

                                                    </ul>
                                                </li>
                                                <li><a href="">Membership</a></li>
                                                <li><a href="">Lessons</a></li>
                                                <li> <a data-toggle="dropdown" href="">New<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Classic</a></li>
                                                        <li><a href="#">Colored except</a></li>
                                                        <li><a href="#">Masonry</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="">ProShop</a></li>
                                                <li><a href="">Contacts</a></li>
                                            </ul>


                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-2" style="padding-right: 0 !important;">
                                    <div class="icon">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
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