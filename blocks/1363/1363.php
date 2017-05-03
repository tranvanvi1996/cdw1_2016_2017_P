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
        $less->compileFile('less/1363.less', 'css/1363.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/1363.css"rel="stylesheet"type="text/css"/>

    </head>
    <body>
        <div class="type_1363">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget">
                                <h2>Délicious</h2>
                            </div>
                            <div class="col-md-4">
                                <h4>About</h4>
                                <p>Osteria Francescana is a restaurant owned and run by chef Massimo Bottura in Modena, Italy</p>
                                <p>
                                    <a href="#" class="vamtam-button">
                                        <span>Buy this Delicious Theme</span>
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h4>Get news &amp; offers</h4>
                                <script type="text/javascript">(function () {
                                        if (!window.mc4wp) {
                                            window.mc4wp = {
                                                listeners: [],
                                                forms: {
                                                    on: function (event, callback) {
                                                        window.mc4wp.listeners.push({
                                                            event: event,
                                                            callback: callback
                                                        });
                                                    }
                                                }
                                            }
                                        }
                                    })();
                                </script>
                                <form class="form">
                                    <input type="email" name="EMAIL" placeholder="Your email" required="">
                                    <input type="submit" value="Subscrible">
                                    <p>* We never send you spam!</p>
                                </form>
                                <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                            <div class="col-md-4">
                                <h4>Contacts</h4>
                                <p>Via Stella, 22<br>
                                    Modena MO, Italy<br>
                                    +390 59 223 912</p>
                                <p><a href="#">hello@yoursite.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
