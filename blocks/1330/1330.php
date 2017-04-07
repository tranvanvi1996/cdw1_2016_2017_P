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
        $less->compileFile('less/1330.less', 'css/1330.css');
        ?>
        <link href="css/font.css" rel="stylesheet" type="text/css" />
        <link href="css/1330.css" rel="stylesheet" type="text/css" />
     

</head>

<body>
    <div class="type-1330">
        <div class="ornament-top"></div>
        <div class="introduction">
            <div class="row">
                <div class="col-md-6">
                    <img class="chef" src="images/chef-dark.jpg" alt="" />
                </div>
                <div class="col-md-6">
                    <img class="sushi" data-attachment-id="11812" data-permalink="#" data-orig-file="images/sushi-icon-4.1.svg" data-orig-size="" data-comments-opened="1" data-image-meta="[]" data-image-title="sushi-icon-4.1" data-image-description="" data-medium-file="images/sushi-icon-4.1.svg" data-large-file="images/sushi-icon-4.1.svg" class="aligncenter size-large wp-image-11812" src="images/sushi-icon-4.1.svg" alt="sushi-icon-4.1" width="200" height="auto">
                    <br>
                    <h>Massimo Bottura</h>
                    <h6 class="vamtam-font-style-2 with-color">Our Chef</h6>
                    <p>“First and foremost I am a chef, whether behind the stove at one of my Northern California restaurants or for the past 15 years in front of the camera on my Food Network cooking shows. Creating new dishes and flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”</p>
                    <img class="sign" data-attachment-id="11813" data-permalink="images/sign-white-1.svg" data-orig-file="images/sign-white-1.svg" data-orig-size="" data-comments-opened="1" data-image-meta="[]" data-image-title="sign-white" data-image-description="" data-medium-file="images/sign-white-1.svg" data-large-file="images/sign-white-1.svg" class="aligncenter size-large wp-image-11813" src="images/sign-white-1.svg" alt="sign-white">
                </div>
            </div>

        </div>
        <div class="ornament-bottom"></div>
    </div>
</body>

</html>