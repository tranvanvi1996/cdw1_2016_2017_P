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
        $less->compileFile('less/1333.less', 'css/1333.css');
        ?>
        <link href="css/1333.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="type-1333">
                        <div class="ornament-bottom"></div>
                        <div class="vamtam-grid first has-background">
                            <div class="vamtam-parallax-bg-wrapper">
                                <div class="vamtam-parallax-bg-img"></div>
                            </div>
                            <div class="row">  
                                    <div class="vamtam-grid first unextended">
                                        <p>&nbsp;</p>
                                    </div>
                            
                                <div class="vamtam-grid vamtam-add-ornaments-all">
                                    <div class="vamtam-grid first unextended ">
                                        <p>
                                            <noscript>
                                            Notice: JavaScript is required for this content.</noscript>
                                        </p>
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