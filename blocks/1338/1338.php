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
        $less->compileFile('less/1338.less', 'css/1338.css');
        ?>
        <link href="css/font.css" rel="stylesheet" type="text/css" />
        <link href="css/1338.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
   
    <div class="type-1338">
 <div class="row">
        <div class="theme">
            <p>Theme Options</p>
            <div class="page-header-line"></div>
        </div>

        <ul class="nav nav-tabs ">
            <li class="active"><a data-toggle="tab" href="#home">General Settings</a></li>
            <li><a data-toggle="tab" href="#menu1">Global Layout</a></li>
            <li><a data-toggle="tab" href="#menu2">Global Styles</a></li>
            <li><a data-toggle="tab" href="#menu3">Global Typography</a></li>
            <li><a data-toggle="tab" href="#menu4">Top Bar & Header</a></li>
            <li><a data-toggle="tab" href="#menu5">Body</a></li>
            <li><a data-toggle="tab" href="#menu6">Footer & Subfooter</a></li>
            <li><a data-toggle="tab" href="#menu7">Site Identity, Product Archives</a></li>
            <li><a data-toggle="tab" href="#menu8">Menus, Widgets, Static Front Page</a></li>
            <li><a data-toggle="tab" href="#menu9">Page Options</a></li>
            <li><a data-toggle="tab" href="#menu10">Blog Post Options</a></li>
            <li><a data-toggle="tab" href="#menu11">Project Post Options</a></li>
            <li><a data-toggle="tab" href="#menu12">Drag & Drop Builder</a></li>
        </ul>
        
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <img src="images/customizer.png" alt="" />
                <img src="images/general1.png" alt="" />
                <div class="text">
                    <h2>General</h2>
                </div>
                <div class="sep"></div>
                <img src="images/general.png" alt="" />
                <div class="text">
                    <h2>Posts</h2>
                </div>
                <div class="sep"></div>
                <img src="images/posts.png" alt="" />
                <div class="text">
                    <h2>Skins</h2>
                </div>
                <div class="sep"></div>
                <img src="images/skins.png" alt="" />
            </div>

            <div id="menu1" class="tab-pane fade">
                <img src="images/global-layout.png" alt="" />
            </div>

            <div id="menu2" class="tab-pane fade">
                <img src="images/global-styles.png" alt="" />
            </div>

            <div id="menu3" class="tab-pane fade">
                <img src="images/global-typography.png" alt="" />
            </div>

            <div id="menu4" class="tab-pane fade">
                <div class="text">
                    <h2>Top Bar</h2>
                </div>
                <div class="sep"></div>
                <img src="images/top-bar.png" alt="" />
                <div class="text">
                    <h2>Header</h2>
                </div>
                <div class="sep"></div>
                <img src="images/header.png" alt="" />
            </div>

            <div id="menu5" class="tab-pane fade">
                <img src="images/body.png" alt="" />
            </div>

            <div id="menu6" class="tab-pane fade">
                <div class="text">
                    <h2>Footer</h2>
                </div>
                <div class="sep"></div>
                <img src="images/footer.png" alt="" />
                <div class="text">
                    <h2>Subfooter</h2>
                </div>
                <div class="sep"></div>
                <img src="images/sub-footer.png" alt="" />
            </div>

            <div id="menu7" class="tab-pane fade">
                <div class="text">
                    <h2>Footer</h2>
                </div>
                <div class="sep"></div>
                <img src="images/footer.png" alt="" />
                <div class="text">
                    <h2>Subfooter</h2>
                </div>
                <div class="sep"></div>
                <img src="images/sub-footer.png" alt="" />
            </div>

            <div id="menu8" class="tab-pane fade">
                <div class="text">
                    <h2>Footer</h2>
                </div>
                <div class="sep"></div>
                <img src="images/footer.png" alt="" />
                <div class="text">
                    <h2>Subfooter</h2>
                </div>
                <div class="sep"></div>
                <img src="images/sub-footer.png" alt="" />
            </div>

            <div id="menu9" class="tab-pane fade">
                <img src="images/page.png" alt="" />
            </div>

            <div id="menu10" class="tab-pane fade">
                <img src="images/page.png" alt="" />
            </div>

            <div id="menu11" class="tab-pane fade">
                <img src="images/page.png" alt="" />
            </div>
            
            <div id="menu12" class="tab-pane fade">
                <div class="text">
                    <h2>Standard View</h2>
                </div>
                <div class="sep"></div>
                <img src="images/standard-view.png" alt="" />
                <div class="text">
                    <h2>Standard View</h2>
                </div>
                <div class="sep"></div>
                <img src="images/standard-view.png" alt="" />
                <div class="text">
                    <h2>Standard View</h2>
                </div>
                <div class="sep"></div>
                <img src="images/standard-view.png" alt="" />
                <div class="text">
                    <h2>Standard View</h2>
                </div>
                <div class="sep"></div>
                <img src="images/standard-view.png" alt="" />
                <div class="text">
                    <h2>Standard View</h2>
                </div>
                <div class="sep"></div>
                <img src="images/standard-view.png" alt="" />
            </div>
        </div>
    </div>
    </div>
</body>

</html>