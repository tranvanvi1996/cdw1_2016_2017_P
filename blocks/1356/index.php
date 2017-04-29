

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!--fix menu-->
    <script src="js/newjavascript.js" type="text/javascript"></script>
    <!--end fixmenu-->

    <!--slideshow-->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!--end slideshow-->

    <!--croll-->
    <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    <script src="js/wow.min.js" type="text/javascript"></script>

    <script>
        new WOW().init();
    </script>
    <!-- ..end croll -->

    <!-- Owl slide -->
    <link rel="stylesheet" href="jsOWL/owl.carousel.min.css">
    <link rel="stylesheet" href="jsOWL/owl.theme.default.min.css">
    <script src="jsOWL/jquery.min.js"></script>
    <script src="jsOWL/owl.carousel.js"></script>
    <!-- end owl -->
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
    <div class="type-1356">
        <div class="row">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6">
                <div class="tab1">
                    <span>Book a Table</span>
                    <span>Events</span>
                </div>
                <div class="tab1-content">
                    <h4>
                        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    </h4>
                    <h1>Make a Reservation</h1>
                    <span>FOR FURTHER QUESTIONS, PLEASE CALL</span>
                    <div class="time">
                        <div class="item">
                            <p>DATE</p>
                            <input type="text">
                        </div>
                        <div class="item">
                            <p>tIME</p>
                            <select>
                                <option>1:00am</option>
                                <option>1:00am</option>
                                <option>1:00am</option>
                                <option>1:00am</option>
                                <option>1:00am</option>
                                <option>1:00am</option>
                                
                            </select>
                        </div>
                        <div class="item">
                            <p>DATE</p>
                            <input type="text" placeholder="1">
                        </div>
                    </div>
                    
                    <div class="form">
                        <label>YOUR NAME</label>
                        <input type="text" placeholder="Your Name" class="form-control">
                        <label>EMAIL ADDRESS</label>
                        <input type="text" placeholder="Email Address" class="form-control">
                        <input type="submit" value="Reserve Now">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
