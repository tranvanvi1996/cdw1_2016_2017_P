<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- head -->
        <meta charset="utf-8">
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       
        <!--..-->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      
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
        
        <script>
            $(document).ready(function () {
                $("#cssmenu ul li a").click(function () {
                    $(this).next().slideToggle();
                });
            });
            $(document).ready(function () {
                $("#h1").click(function () {
                    $(this).next().slideToggle();
                });
                $("#h2").click(function () {
                    $(this).next().slideToggle();
                });
                $("#h3").click(function () {
                    $(this).next().slideToggle();
                });
                $("#h4").click(function () {
                    $(this).next().slideToggle();
                });
                $("#h5").click(function () {
                    $(this).next().slideToggle();
                });
                $("#h6").click(function () {
                    $(this).next().slideToggle();
                });
            });
        </script>

    </head>
    <body>

        <div class="cdw2">
          

            <section class="menu">
                <div class="title">
                    <hr style="width: 10%; float:left;position: relative;left: 16%;">
                    <h1>MENU</h1>
                    <hr style="width: 10%;position: relative;left: -16%;">
                </div>
                <div class="span" style="text-align: center;">
                    <span>~ Week Specials ~</span>
                </div>

                <div class="menus">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="items">
                                    <h1 id="h1">Uramaki</h1>
                                    <div class="all">
                                        <div class="item">
                                            <h3 >
                                                Philadelphia salmon
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>
                                        <div class="item">
                                            <h3>
                                                Salmon & Prawn Nigiri Set 2 pcs
                                                <span>$8</span>

                                            </h3>
                                        </div>
                                        <div class="item">
                                            <h3>
                                                Snow Roll Uramaki
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="items">
                                    <h1 id="h3">Uramaki</h1>
                                    <div class="all">
                                        <div class="item">
                                            <h3 >
                                                Philadelphia salmon
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>
                                        <div class="item">
                                            <h3 >
                                                Philadelphia salmon
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>
                                        <div class="item">
                                            <h3>
                                                Salmon & Prawn Nigiri Set 2 pcs
                                                <span>$8</span>

                                            </h3>
                                        </div>
                                        <div class="item">
                                            <h3>
                                                Snow Roll Uramaki
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>
                                    </div>
                                </div>
                                <br><div class="items">
                                    <h1 id="h6">Uramaki</h1>
                                    <div class="all">
                                        <div class="item">
                                            <h3 >
                                                Philadelphia salmon
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>
                                        <div class="item">
                                            <h3 >
                                                Philadelphia salmon
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>
                                        <div class="item">
                                            <h3>
                                                Salmon & Prawn Nigiri Set 2 pcs
                                                <span>$8</span>

                                            </h3>
                                        </div>
                                        <div class="item">
                                            <h3>
                                                Snow Roll Uramaki
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="image">
                                    <img src="image/gourmet-photo-2.jpg" alt=""/>
                                    <p>Creating flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”</p>
                                    <div class="view">
                                        <a href="#">  View the full menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <h1 id="h2">Uramaki</h1>
                                    <div class="all">
                                        <div class="item">
                                            <h3 >
                                                Philadelphia salmon
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>
                                        <div class="item">
                                            <h3>
                                                Salmon & Prawn Nigiri Set 2 pcs
                                                <span>$8</span>

                                            </h3>
                                        </div>
                                        <div class="item">
                                            <h3>
                                                Snow Roll Uramaki
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="items">
                                    <h1 id="h4">Uramaki</h1>
                                    <div class="all">
                                        <div class="item">
                                            <h3 >
                                                Philadelphia salmon
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>
                                        <div class="item">
                                            <h3>
                                                Salmon & Prawn Nigiri Set 2 pcs
                                                <span>$8</span>

                                            </h3>
                                        </div>
                                        <div class="item">
                                            <h3>
                                                Snow Roll Uramaki
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <div class="items">
                                    <h1 id="h5">Uramaki</h1>
                                    <div class="all">
                                        <div class="item">
                                            <h3 >
                                                Philadelphia salmon
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>
                                        <div class="item">
                                            <h3 >
                                                Philadelphia salmon
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>
                                        <div class="item">
                                            <h3>
                                                Salmon & Prawn Nigiri Set 2 pcs
                                                <span>$8</span>

                                            </h3>
                                        </div>
                                        <div class="item">
                                            <h3>
                                                Snow Roll Uramaki
                                                <span>$8</span>

                                            </h3>
                                            <p>Served with soy sauce, wasabi, pickled ginger and chopsticks.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            

        </div>

    </div>

</body>
</html>