<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1335.less', 'css/1335.css');
        ?>
        <link href="css/1335.css" rel="stylesheet" type="text/css" />
        <link href="css/font.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>
    <div class="type-1335">
        <div class="container">
            <div class="row">
                <ul class=" nav nav-tabs">
                    <li>
                        <a data-toggle="tab" href="#tab-1-0-the-story"> <span class="title-text">The Story</span></a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab-1-1-the-team"> <span class="title-text">The Team</span></a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab-1-2-press-awards"> <span class="title-text">Press & Awards</span></a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-1-0-the-story">
                        <p style="text-align: center;"><span><img src="images/cook.jpg" alt=""/></span>
                            <div class="sep-text single centered">
                                <div class="sep-text-before">
                                    <div class="sep-text-line"></div>
                                </div>
                                <div class="content">
                                    <h3>Welcome</h3>
                                </div>
                                <div class="sep-text-after">
                                    <div class="sep-text-line"></div>
                                </div>
                            </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>1995</h4>
                                    <p>Opens Osteria Francescana, Via Stella 22 Modena Italy</p>
                                </div>
                                <div class="col-md-4">
                                    <h4>2002</h4>
                                    <p>Michelin Guide One-Michelin-Star. Gambero Rosso Up and Coming Chef Award.</p>
                                </div>
                                <div class="col-md-4">
                                    <h4>2016</h4>
                                    <p>The world&#8217;s 50 restaurants 1st best restaurant in the world. Michelin Guide
                                        <br/> three-michelin-stars.
                                    </p>
                                </div>
                            </div>
                            </div>
                            <div class="news">
                                <p>&#8220;Since I was a kid I was Massimo Bottura &#8212; I was escaping from my older brother under the table in the kitchen and from down there, where my grandmother was defending me, in the meantime she was rolling pasta, i was looking at the world from another point of view. It&#8217;s what we do in Osteria Francescana every day.&#8221;</p>
                                <p><a href="#">Massimo Bottura</a></p>
                                <p><img src="images/sign.jpg" alt="" /></p>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="tab-1-1-the-team">
                        <p style="text-align: center;"><span> <img src="images/cook.jpg" alt=""/></span>

                            <div class="sep-text single centered">
                                <div class="sep-text-before">
                                    <div class="sep-text-line"></div>
                                </div>
                                <div class="content">
                                    <h3>Chefs</h3>
                                </div>
                                <div class="sep-text-after">
                                    <div class="sep-text-line"></div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">

                                        <div class="team-member">
                                            <div class="thumbnail">
                                                <img width="650" height="720" src="images/people-1.jpg" alt="" />
                                                <div class="share-icons clearfix">
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </div>

                                            </div>
                                            <div class="team-member-info">
                                                <h4>
                                                    Brad Farmerie </h4>
                                                <h6> CEO &amp; FOUNDER </h6>
                                                <a>Tel: 947 577 575</a>
                                                <br>
                                                <a>chef@vamtam.com</a>
                                                <div class="team-member-bio">
                                                    <p>Brad Farmerie took a year hiatus from college to move to London and witness firsthand the culinary revolution taking place in the UK.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3">

                                        <div class="team-member">
                                            <div class="thumbnail">
                                                <img width="650" height="720" src="images/people-3.jpg" alt="" />
                                                <div class="share-icons clearfix">
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="team-member-info">
                                                <h4>
                                                    Avroko </h4>
                                                <h6> MASTER CHEF </h6>
                                                <a>Tel: 947 577 575</a>
                                                <br>
                                                <a>owners@vamtam.com</a>
                                                <div class="team-member-bio">
                                                    <p>Four partners, 14 years, multiple disciplines rooted in hospitality.
                                                        <br/> New York-headquartered design-and-concept firm AvroKO.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="team-member">
                                            <div class="thumbnail">
                                                <img width="650" height="720" src="images/people-4.jpg" alt="" />
                                                <div class="share-icons clearfix">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                                    
                                                </div>
                                            </div>
                                            <div class="team-member-info">
                                                <h4>
                                                    Dan Rafalin </h4>
                                                <h6> SOUS CHEF </h6>
                                                <a>Tel: 947 577 575</a>
                                                <br>
                                                <a>manager@vamtam.com</a>
                                                <div class="team-member-bio">
                                                    <p>Dan Rafalin has been immersed in the culinary world from the beginning of his career when he received a Grand Diplôme in culinary arts.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="team-member">
                                            <div class="thumbnail">
                                                <img width="650" height="720" src="images/people-8.jpg" alt="" />
                                                <div class="share-icons clearfix">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="team-member-info">
                                                <h4>Evan Mattew </h4>
                                                <h6> SOUS CHEF </h6>
                                                <a>Tel: 947 577 575</a>
                                                <br>
                                                <a>manager@vamtam.com</a>
                                                <div class="team-member-bio">
                                                    <p>Evan Mattew prepares fish dishes and often does all fish butchering as well as appropriate sauces. This station may be combined with the saucier position.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="tab-1-2-press-awards">
                        <p style="text-align: center;">
                            <img src="images/cook.jpg" alt="" />
                            <div class="sep-text single centered">
                                <div class="sep-text-before">
                                    <div class="sep-text-line"></div>
                                </div>
                                <div class="content">
                                    <h3>Awards</h3>
                                </div>
                                <div class="sep-text-after">
                                    <div class="sep-text-line"></div>
                                </div>
                            </div>
                        <div class="logo">
                           <img src="images/award-logos-example.jpg" alt="" />
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul style="margin-bottom: 40px;">
                                            <li>Michelin Guide, One Michelin Star (2002)</li>
                                            <li>Gambero Rosso, Up and Coming Chef Award (2002)</li>
                                            <li>ESPRESSO Guide Performance of the Year (2004)</li>
                                            <li>Lo Mejor de La Gastronomía, International Award (2005)</li>
                                            <li>ESPRESSO Guide, Dinner of the Year (2005)</li>
                                            <li>Veronelli Guide, Three Stars (2005)</li>
                                            <li>MICHELIN Guide, Two-Michelin-Stars (2006)</li>
                                            <li>Golosaria, Creative Restaurant of the Year (2006)</li>
                                            <li>Identità Golose, Best Creative Chef (2007)</li>
                                            <li>Gambero Rosso, Three Forks (2007)</li>
                                            <li>ESPRESSO Guide, Rating 19,520 (2009)</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>The World’s 50 Best Restaurants, Highest New Entry (2009)</li>
                                            <li>Les Grandes Tables du Monde (2010)</li>
                                            <li>ESPRESSO Guide, Highest rating recorded 19,7520 (2010)</li>
                                            <li>Identità Golose, Chef of the Year (2010)</li>
                                            <li>BMW Guide, Restaurant of the Year (2010)</li>
                                            <li>Michelin Guide, Three Michelin Stars (2011)</li>
                                            <li>Gambero Rosso Guide, Best Restaurant Rating 95 (2012)</li>
                                            <li>“ESPRESSO” Guide, Best Restaurant Rating 19,75 (2012)</li>
                                            <li>Touring 2012 Guide, Best Restaurant Rating 93 (2012)</li>
                                            <li>ESPRESSO Guide, Rating 1920 (2007)</li>
                                            <li>Gambero Rosso, Three forks (2008)</li>
                                        </ul>
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