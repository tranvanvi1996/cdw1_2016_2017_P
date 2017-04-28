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
        $less->compileFile('less/1340.less', 'css/1340.css');
        ?>
        <link href="css/font.css" rel="stylesheet" type="text/css" />
        <link href="css/1340.css" rel="stylesheet" type="text/css" />

</head>

<body>
    
    <div class="type-1340">
        <div class="row">
            <div class="col-md-15">
                <div class="col-md-3">
                    <div class="news">
                        <img src="images/coffee-thumb-1.jpg" alt="" />
                        <br>
                        <h>Coffee & Tea</h>
                        <p>Its delicious smooth blend and various varieties seductively charm you at the start of your day.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news">
                        <img src="images/coffee-thumb-3.jpg" alt="" />
                        <br>
                        <h>Coffee & Tea</h>
                        <p>Its delicious smooth blend and various varieties seductively charm you at the start of your day.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news">
                        <img src="images/coffee-thumb-4.jpg" alt="" />
                        <br>
                        <h>Coffee & Tea</h>
                        <p>Its delicious smooth blend and various varieties seductively charm you at the start of your day.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news">
                        <img src="images/coffee-thumb-5.jpg" alt="" />
                        <br>
                        <h>Coffee & Tea</h>
                        <p>Its delicious smooth blend and various varieties seductively charm you at the start of your day.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news">
                        <img src="images/coffee-thumb-6.jpg" alt="" />
                        <br>
                        <h>Coffee & Tea</h>
                        <p>Its delicious smooth blend and various varieties seductively charm you at the start of your day.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>