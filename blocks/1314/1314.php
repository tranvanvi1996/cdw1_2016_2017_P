<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opencart Super Deal Store</title>
        <meta name="description" content="My Store" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <link href="framework/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
        <script src="framework/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="framework/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
       
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

            <div class="save">
                <div class="container">
                    <div class="nd">
                        <div class="content">
                            <h1>save 30%</h1>
                            <p>We offer exclusive deals for various sport products of premium quality that has been tested and proved by years and experienced players</p>
                            <div class="blue">
                                <div class="cube flip-to-top">
                                    <a href="#">
                                        <div class="default-state">
                                            <span>view all</span>
                                        </div>
                                        <div class="active-state">
                                            <span>view all</span>
                                        </div>
                                    </a>  	
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>	    
        </div>	                
    </body>

</html>