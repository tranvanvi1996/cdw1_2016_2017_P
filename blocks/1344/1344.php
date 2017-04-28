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
        $less->compileFile('less/1344.less', 'css/1344.css');
        ?>
        <link href="css/font.css" rel="stylesheet" type="text/css" />
        <link href="css/1344.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>
    
      <div class="row">
    <div class="type-1344">
      
            <div class="col-md-3">
                <div class="photo">
                    <img src="images/coffee-photo-4.jpg" alt="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="coffe">
                    <img src="images/coffe.png" alt="" />
                    <h2>Buddha:<br>
How to drink tea?</h2>
                    <p>The types of tea are white tea, green tea, yellow tea, oolong tea, black tea, and pu-erh tea. “When you have the title ‘white tea’ or ‘green tea’, you’re actually describing the process by which it has been made,” Woollard says.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>

                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="image">
                                <img src="images/honey.jpg" alt="Chania" width="300" height="300">
                            </div>
                            <div class="back">
                                <h4>Add to Cart</h4>
                            </div>
                            <div class="news">
                                <h5>Twinings</h5>
                                <span><a>Accessory</a>-<a>Tea</a>-<a>Teapot</a></span>
                                <h3>Elea – Tea set with tray</h3>
                                <h>
                                    <h>£</h>60.00</h>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="images/drink-6.jpg" alt="Chania" width="300" height="300">
                            </div>
                            <div class="back">
                                <h4>Add to Cart</h4>
                            </div>
                            <div class="news">
                                <h5>Twinings</h5>
                                <span><a>Accessory</a>-<a>Tea</a>-<a>Teapot</a></span>
                                <h3>Elea – Tea set with tray</h3>
                                <h>
                                    <h>£</h>60.00</h>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="images/tea-2.jpg" alt="Chania" width="300" height="300">
                            </div>
                            <div class="back">
                                <h4>Add to Cart</h4>
                            </div>
                            <div class="news">
                                <h5>Twinings</h5>
                                <span><a>Accessory</a>-<a>Tea</a>-<a>Teapot</a></span>
                                <h3>Elea – Tea set with tray</h3>
                                <h>
                                    <h>£</h>60.00</h>
                            </div>
                        </div>
                        <a class="carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>