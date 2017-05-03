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
        $less->compileFile('less/1370.less', 'css/1370.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/1370.css"rel="stylesheet"type="text/css"/>

    </head>
    <body>
        <div class="type_1370">
            <div class="header">
                <h1>Recipes</h1>
                <hr>
            </div>
            <div class="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item">
                                <div class="product-thumbnail">
                                    <img width="300" height="233" src="images/Meat-1-800x535.jpg" alt="breakfast-8-300x233.jpg" title="breakfast-7.jpg">
                                </div>
                                <div class="post-content-meta">
                                    <a href="#">Recipes</a>
                                    <a href="#">Tips &amp; Tricks</a>
                                </div>
                                <div class="single">
                                    <h4><a href="#">Which Lamb is the Best: American, Australian or New Zealand?</a></h4>
                                </div>
                                <p>Lamb is a very subjective item. Many people feel that New Zealand or Australian is…</p>
                                <div class="tagged_as">
                                    <span class="visuallyhidden">Tags:</span> 
                                    <a href="#" rel="tag">bio</a> ,
                                    <a href="#" rel="tag">dinner</a> ,
                                    <a href="#" rel="tag">food</a> ,
                                    <a href="#" rel="tag">hand</a> ,
                                    <a href="#" rel="tag">made</a> ,
                                    <a href="#" rel="tag">lamb</a> ,
                                    <a href="#" rel="tag">recipe</a> ,
                                    <a href="#" rel="tag">tricks</a>
                                </div>
                                <div class="title">
                                    <a href="#" rel="tag">Jon Madison</a>
                                    <a href="#" rel="tag">27 SEP, 2014</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> 1</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="product-thumbnail">
                                    <img width="300" height="233" src="images/Cocktails-2-800x535.jpg" alt="breakfast-8-300x233.jpg" title="breakfast-7.jpg">
                                </div>
                                <div class="post-content-meta">
                                    <a href="#">Recipes</a>
                                    <a href="#">Tips &amp; Tricks</a>
                                </div>
                                <div class="single">
                                    <h4><a href="#">Which Lamb is the Best: American, Australian or New Zealand?</a></h4>
                                </div>
                                <p>Lamb is a very subjective item. Many people feel that New Zealand or Australian is…</p>
                                <div class="tagged_as">
                                    <span class="visuallyhidden">Tags:</span> 
                                    <a href="#" rel="tag">bio</a> ,
                                    <a href="#" rel="tag">dinner</a> ,
                                    <a href="#" rel="tag">food</a> ,
                                    <a href="#" rel="tag">hand</a> ,
                                    <a href="#" rel="tag">made</a> ,
                                    <a href="#" rel="tag">lamb</a> ,
                                    <a href="#" rel="tag">recipe</a> ,
                                    <a href="#" rel="tag">tricks</a>
                                </div>
                                <div class="title">
                                    <a href="#" rel="tag">Jon Madison</a>
                                    <a href="#" rel="tag">27 SEP, 2014</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> 1</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
