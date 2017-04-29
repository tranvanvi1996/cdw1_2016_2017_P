

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
        <div class="project">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="title">
                        <a href="#">JON MADISON</a>
                        -<a href="#" id="a"> 17 AUG, 2016  </a>-
                        <a href="#"><i class="fa fa-comment"></i>0 COMMENTS</a>
                    </div>

                    <div class="image">
                        <img src="image/header-1-615x220 (1).jpg" alt=""/>
                    </div>
                    <div class="content">
                        <p>Lamb is a very subjective item. Many people feel that New Zealand or Australian is the best and others feel there is no lamb other than American and are willing to pay the premium price for it.</p>
                        <p>Lamb from each region has its own distinguishing characteristics including flavor, size and price. What are the differences then?</p>
                        <h1>American Lamb:</h1>

                        <p>American lamb is just that, it has been raised in the U.S. Most quality American lamb comes from Colorado and the Midwestern States and is grain fed. This breed is the largest in size and many say is the highest in quality and consistency.
                            American lamb has grain in its diet and thus tastes less “gamey” compared to imported lamb which is typically grass fed. It is also the most expensive available. American lamb is very sensitive to market conditions which makes availability and size variable. Lamb farming is a small industry in the U.S. which is why supply and demand is a major issue.</p>

                        <h1>American Lamb:</h1>

                        <p>“Aussie” lamb has become a very popular item today. It has been cross-bred with American lamb to create a larger more consistent product. Not too many years ago Aussie lamb was very undesirable. The lambs were raised primarily for their wool and the meat was almost a by-product of that industry. This meant a very inconsistent product in size and quality.</p>
                        <br>
                        <p>
                            Today Aussie lamb is also raised for consumption to a specific size and weight which produces a quality product that is less expensive than American domestic lamb. It is of a medium size and resembles that of American lamb the most.
                        </p>

                        <h1>Popular Lamb Cuts:</h1>
                        <p>
                            Lamb can be purchased a few different ways, “Primal”, “Sub-Primal” and “Portion Control”. Most customers purchase “Sub-Primal” or “Portion Control”. Unlike beef, when lamb is portioned, they become “Chops” not “Steaks”.
                        </p>

                        <h1>
                            Popular Primal Cuts – Bone-In:
                        </h1>
                        <p>Leg, Loin, Hotel Rack, Shoulder, Saddle</p>

                        <h1>Popular Sub Primal Cuts:</h1>
                        <p>
                            Rack Split Chine Off, Loin Boneless Trimmed, Leg Boneless, Shank, Shoulder Boneless
                        </p>

                        <h1>
                            Popular Portion Control Cuts:
                        </h1>

                        <p>
                            Lamb Rack, Frenched, Lamb Rib Chop, Frenched, Lamb Loin Chop, Lamb Shoulder Chops, Lamb Leg, Frenched Carving
                        </p>
                        <br>
                        <p>
                            So, which Lamb is the best: American, Australian or New Zealand? Perhaps all of them, depending on your specific needs. Try them and decide for yourself!
                        </p>
                        
                        <div class="icon">
                            <i class="fa fa-tag"></i><a href="#">FEATURES</a>
                        </div>
                        <div class="icon">
                            <i class="fa fa-tag"></i><a href="#">TOP-WIDGETS</a>
                        </div>
                        
                        <div class="icon1">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-pinterest"></i>
                            <i class="fa fa-tumblr"></i>
                            <i class="fa fa-google-plus"></i>
                        </div>
                    </div>


                </div>
                <div class="col-md-3"></div>
            </div>
        </div>


    </body>
</html>
