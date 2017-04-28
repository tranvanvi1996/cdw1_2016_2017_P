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
        $less->compileFile('less/1331.less', 'css/1331.css');
        ?>
        <link href="css/font.css" rel="stylesheet" type="text/css" />
        <link href="css/1331.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div class="type-1331">
            <div class="container">
                    <img src="images/cook.jpg" alt=""/><br>
                    <h>Join the team!</h>
                    <p>
                        We are always looking for dedicated and passionate individuals who are striving to build their career in the hospitality industry.<br>
                        If you would like to be part of this award winning team please visit our Current Vacancies page and apply online.<br>
                        We also offer an internship programme in our Support Office.
                    </p>
                    <div class="box">
                        <div class="text">Apply Now</div>
                        <div class="text">Apply Now</div>
                    </div>
            </div>
        </div>
    </body>

</html>