<!DOCTYPE html>
<html >
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="images/favicon.ico">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-1322.less', 'css/type-1322.css');
        ?>
        <link href="css/type-1322.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="type-1322">
            <!-- begin Content next_last_match -->
            <div class="container">
                <div class="theme_background_1">

                    <div class="row">
                        <div class="sc_matches">
                            <!-- Next matches block -->
                            <div class="sc_matches_next col-md-4 ">
                                <h2 class="sc_item_title">Next Matches</h2>
                                <div class="sc_item_descr">Most tennis matches are played on Sundays from 10 AM to approximately 2 PM</div>
                                <ul class="sc_matches_list">
                                    <li class="sc_match" data-item="#sc_matches_1_0">
                                        <div class="sc_match_date">
                                            <span class="day">02</span>
                                            <span class="month">May</span>
                                        </div>
                                        <div class="sc_match_info">
                                            <div class="name">WTA Baku Cup</div>
                                            <div class="time">13:00, </div>
                                            <div class="players">Linda Carter - Lisa Brooks</div>
                                        </div>
                                    </li>
                                    <li class="sc_match" data-item="#sc_matches_1_1">
                                        <div class="sc_match_date">
                                            <span class="day">30</span>
                                            <span class="month">Apr</span>
                                        </div>
                                        <div class="sc_match_info">
                                            <div class="name">Australian Open</div>
                                            <div class="time">12:00, </div>
                                            <div class="players">Steven Ward - Paul Diaz</div>
                                        </div>
                                    </li>
                                    <li class="sc_match" data-item="#sc_matches_1_2">
                                        <div class="sc_match_date">
                                            <span class="day">28</span>
                                            <span class="month">Apr</span>
                                        </div>
                                        <div class="sc_match_info">
                                            <div class="name">Astana Challenger (hard)</div>
                                            <div class="time">11:00, </div>
                                            <div class="players">Mary Wilson - Helen Price</div>
                                        </div>
                                    </li>
                                    <li class="sc_match" data-item="#sc_matches_1_3">
                                        <div class="sc_match_date">
                                            <span class="day">27</span>
                                            <span class="month">Apr</span>
                                        </div>
                                        <div class="sc_match_info">
                                            <div class="name">ITF Sacramento Women (hard)</div>
                                            <div class="time">10:00, </div>
                                            <div class="players">Helen Price - Linda Carter</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /Next matches block -->
                            <!-- Current matches block -->
                            <div class="sc_matches_current col-md-7">
                                <h2 class="sc_item_title">Last Match Review</h2>
                                <div class="sc_item_descr">We are very excited to go over this exceptional tournament that literally left the players and the crowd breathless!</div>
                                <ul class="sc_matches_list">
                                    <li class="sc_match">
                                        <div class="match_block">
                                            <div class="player">
                                                <div class="player_country">US</div>
                                                <div>
                                                    <a class="hover_icon hover_icon_view" href="#" title="Linda Carter">
                                                        <img alt="player-4.jpg" src="images/player-4-420x420.jpg"> </a>
                                                </div>
                                                <div class="player_name">
                                                    <a href="#">Linda Carter</a>
                                                </div>
                                            </div>
                                            <div class="match_info">
                                                <div class="match_date">02 May 13:00</div>
                                                <div class="match_score">3-0</div>
                                                <div class="match_category">
                                                    <a href="#">WTA Baku Cup</a>
                                                </div>
                                            </div>
                                            <div class="player">
                                                <div class="player_country">AU</div>
                                                <div>
                                                    <a class="hover_icon hover_icon_view" href="#" title="Lisa Brooks">
                                                        <img alt="image-21.jpg" src="images/image-21-420x420.jpg">
                                                    </a>
                                                </div>
                                                <div class="player_name">
                                                    <a href="3">Lisa Brooks</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
                            <!-- /Current matches block -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Content next_last_match -->
        </div>
    </body>
</html>