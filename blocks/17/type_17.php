<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css"rel="stylesheet"type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type_17.less', 'css/type_17.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/type_17.css"rel="stylesheet"type="text/css"/>

    </head>
    <body>
        <div class="type_17">
            <div class="header">
                <h5>WE DO</h5>
                <h1>CREATIVE STUFF</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="agency">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="images/agency.jpg" alt=""/>
                        </div>
                        <div class="col-md-7">
                            <div class="section-title">
                                <span>history of agency</span>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor nisi ut aliquip ex ea commodo
                                consequat. in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. 
                            </p>
                            <a href="#" class="btn"><span>read more</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner">
                <div class="services">
                    <div class="container">
                        <div class="row">
                            <div class="section-title">
                                <span>why choose us</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="col-md-7">
                                <div class="row" style="margin-bottom:50px">
                                    <div class="col-md-6">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span class="text">unlimited options</span>
                                        <ul>
                                            <li>branding</li>
                                            <li>design &amp; copywriting</li>
                                            <li>concept development</li>
                                            <li>user experience</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <i class="fa fa-random" aria-hidden="true"></i>
                                        <span class="text">design & development</span>
                                        <ul>
                                            <li>branding</li>
                                            <li>design &amp; copywriting</li>
                                            <li>concept development</li>
                                            <li>user experience</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span class="text">e-commerce</span>
                                        <ul>
                                            <li>branding</li>
                                            <li>design &amp; copywriting</li>
                                            <li>concept development</li>
                                            <li>user experience</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <i class="fa fa-sliders" aria-hidden="true"></i>
                                        <span class="text">customizable design</span>
                                        <ul>
                                            <li>branding</li>
                                            <li>design &amp; copywriting</li>
                                            <li>concept development</li>
                                            <li>user experience</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="images/serv.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio">
                    <div class="container">
                        <div class="section-title">
                            <span>our portfolio</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <span class="text">choose category</span>
                                <ul>
                                    <li><a href="" class="active">all</a></li>
                                    <li><a href="" >photography</a></li>
                                    <li><a href="" >webdesign</a></li>
                                    <li><a href="" >logo</a></li>
                                    <li><a href="" >graphics</a></li>
                                    <li><a href="" >advertising</a></li>
                                    <li><a href="" >fashion</a></li>
                                </ul>
                                </nav>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/1.jpg" alt=""/>
                                        <img src="images/4.jpg" alt=""/>
                                        <img src="images/7.jpg" alt=""/>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="images/2.jpg" alt=""/>
                                        <img src="images/6.jpg" alt=""/>
                                        <img src="images/8.jpg" alt=""/>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="images/3.jpg" alt=""/>
                                        <img src="images/5.jpg" alt=""/>
                                        <img src="images/9.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="green-section"> 
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="text">
                                    you think we're cool? let's work together
                                </span>
                                <a href="#" class="btn"><span>get in touch</span></a>
                            </div>
                            <div class="col-md-6">
                                <div class="white-section" style="padding:20px">
                                    <span class="text">stay informed with our newsletter</span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <form action="#" method="post">
                                        <div class="input_1">
                                            <input type="text" name="email">
                                            <span>your email</span>
                                        </div>
                                        <button type="submit" class="btn"><span>send</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul>
                                <li><a href="#" class="animsition-link link">Home</a></li>
                                <li><a href="#" class="animsition-link link">about us</a></li>
                                <li><a href="#" class="animsition-link link">services</a></li>
                                <li><a href="#" class="animsition-link link">portfolio</a></li>
                                <li><a href="#" class="animsition-link link">blog</a></li>
                                <li><a href="#" class="animsition-link link">contact us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="text">
                                created by akhouad ©2016. all rights reserved.
                            </div>
                            <ul class="icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>