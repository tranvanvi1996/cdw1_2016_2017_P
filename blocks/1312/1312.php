<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opencart Super Deal Store</title>
        <meta name="description" content="My Store" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="image/x-icon" href="image/favicon.ico" />
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <link href="framework/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
        <script src="framework/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="framework/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="framework/fontello/css/fontello.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type.less', 'css/type.css');
        ?>
        <link href="css/type.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-31">

            <div class="module-1">
                <div class="back">
                    <div class="container">
                        <div class="wrapper">
                            <div class="row">
                                <div data-animation="animated fadeInUp normal" >
                                    <div>
                                        <div class="sc_matches">
                                            <div class="sc_matches_next">
                                                <h2 class=" sc_item_title">Next Matches</h2>
                                                <div class=" sc_item_descr">Most tennis matches are played on Sundays from 10 AM to approximately 2 PM</div>
                                                <ul class="sc_matches_list">
                                                    <li class="sc_match" data-item="#sc_matches_101668882_0">
                                                        <div class="sc_match_date"><span class="day">28</span><span class="month">Apr</span></div>
                                                        <div class="sc_match_info">
                                                            <div class="name">Astana Challenger (hard)</div>
                                                            <div class="time">11:00, </div>
                                                            <div class="players">Mary Wilson - Helen Price</div>
                                                        </div>
                                                    </li>
                                                    <li class="sc_match" data-item="#sc_matches_101668882_1">
                                                        <div class="sc_match_date"><span class="day">31</span><span class="month">May</span></div>
                                                        <div class="sc_match_info">
                                                            <div class="name">WTA Baku Cup</div>
                                                            <div class="time">13:00, </div>
                                                            <div class="players">Linda Carter - Lisa Brooks</div>
                                                        </div>
                                                    </li>
                                                    <li class="sc_match" data-item="#sc_matches_101668882_2">
                                                        <div class="sc_match_date"><span class="day">14</span><span class="month">Jun</span></div>
                                                        <div class="sc_match_info">
                                                            <div class="name">Australian Open</div>
                                                            <div class="time">12:00, </div>
                                                            <div class="players">St Ward - Paul Diaz</div>
                                                        </div>
                                                    </li>
                                                    <li class="sc_match" data-item="#sc_matches_101668882_3">
                                                        <div class="sc_match_date"><span class="day">11</span><span class="month">Jul</span></div>
                                                        <div class="sc_match_info">
                                                            <div class="name">ITF Sacramento Women (hard)</div>
                                                            <div class="time">10:00, </div>
                                                            <div class="players">Helen Price - Linda Carter</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                           
                                            <div class="sc_matches_current">
                                                <h2 class=" sc_item_title">Last Match Review</h2>
                                                <div class=" sc_item_descr">We are very excited to go over this exceptional tournament that literally left the players and the crowd breathless!</div>
                                                <ul class="sc_matches_list">
                                                    <li >
                                                        <div class="match_block">
                                                            <div class="player">
                                                                <div class="player_country">GB</div>                                                           
                                                                <a class="hover_icon hover_icon_view" href="#" title="Mary Wilson">
                                                                    <img width="420" height="420" alt="team-1.jpg" src="image/team-1-420x420.jpg"> </a>                                                            
                                                                <div class="player_name"><a href="#">Mary Wilson</a></div>
                                                            </div>
                                                            <div class="match_info">
                                                                <div class="match_date">28 Apr 11:00</div>
                                                                <div class="match_score">6-3</div>
                                                                <div class="match_category">
                                                                    <a href="#">Singles</a> </div>
                                                            </div>
                                                            <div class="player">
                                                                <div class="player_country">PL</div>
                                                                <div>
                                                                    <a class="hover_icon hover_icon_view" href="#" title="Helen Price">
                                                                        <i></i>
                                                                        <img width="420" height="420" alt="player-5.jpg" src="image/player-5-420x420.jpg"> </a>
                                                                </div>
                                                                <div class="player_name"><a href="#">Helen Price</a></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.sc_matches_current -->
                                        </div>
                                        <!-- /.sc_matches -->
                                    </div>
                                    <!-- /.sc_matches_wrap -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>