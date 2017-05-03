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
        $less->compileFile('less/1364.less', 'css/1364.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/1364.css"rel="stylesheet"type="text/css"/>

    </head>
    <body>
        <div class="type_1364">
            <div class="header">
                <h1>Shop</h1>
                <hr>
                <p>Pure natural food</p>
            </div>
            <div class="container">
                <div class="menu">
                    <ul class="nav nav-pills">
                        <li class="active"><a  data-toggle="pill" href="#all" title="Show products as thumbs">
                                <span>All</span>
                            </a></li>
                        <li><a data-toggle="pill" href="#salads" title="Show products as list">
                                <span>Salads</span>
                            </a></li>
                        <li><a data-toggle="pill" href="#soups" title="Show products as list">
                                <span>Soups</span>
                            </a></li>
                        <li><a data-toggle="pill" href="#main" title="Show products as list">
                                <span>Main</span>
                            </a></li>
                        <li><a data-toggle="pill" href="#desserts" title="Show products as list">
                                <span>Desserts</span>
                            </a></li>
                        <li><a data-toggle="pill" href="#breakfast" title="Show products as list">
                                <span>Breakfast</span>
                            </a></li>
                        <li><a data-toggle="pill" href="#drinks" title="Show products as list">
                                <span>Drinks</span>
                            </a></li>
                        <li><a data-toggle="pill" href="#accessories" title="Show products as list">
                                <span>Accessories</span>
                            </a></li>
                    </ul> 
                    <div class="tab-content">
                        <div id="all" class="tab-pane fade in active ">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="a">
                                        <div class="product-thumbnail">
                                            <img width="300" height="233" src="images/breakfast-7-300x233.jpg" alt="breakfast-7.jpg" title="breakfast-7.jpg"></div>
                                        <a href="#" class="button">Add to card</a>
                                        <h5>Home Chef</h5>
                                        <span class="tagged_as">
                                            <span class="visuallyhidden">Tags:</span> 
                                            <a href="#" >bio</a> 
                                            <a href="#" >breakfast</a> 
                                            <a href="#" >Gourmet</a> 
                                            <a href="#" >sweet</a>
                                        </span>
                                        <div class="title">
                                            <a href="#" rel="tag">
                                                <h3>Almond Cookies Breakfast</h3></a>
                                        </div>
                                        <span class="price">
                                            £5.00
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="a">
                                        <div class="product-thumbnail">
                                            <img width="300" height="233" src="images/breakfast-7-300x233.jpg" alt="breakfast-7.jpg" title="breakfast-7.jpg"></div>
                                        <a href="#" class="button">Add to card</a>
                                        <h5>Home Chef</h5>
                                        <span class="tagged_as">
                                            <span class="visuallyhidden">Tags:</span> 
                                            <a href="#" rel="tag">bio</a> 
                                            <a href="#" rel="tag">breakfast</a> 
                                            <a href="#" rel="tag">Gourmet</a> 
                                            <a href="#" rel="tag">sweet</a>
                                        </span>
                                        <div class="title">
                                            <a href="#" rel="tag">
                                                <h3>Almond Cookies Breakfast</h3></a>
                                        </div>
                                        <span class="price">
                                            £5.00
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="a">
                                        <div class="product-thumbnail">
                                            <img width="300" height="233" src="images/breakfast-7-300x233.jpg" alt="breakfast-7.jpg" title="breakfast-7.jpg"></div>
                                        <a href="#" class="button">Add to card</a>
                                        <h5>Home Chef</h5>
                                        <span class="tagged_as">
                                            <span class="visuallyhidden">Tags:</span> 
                                            <a href="#" rel="tag">bio</a> 
                                            <a href="#" rel="tag">breakfast</a> 
                                            <a href="#" rel="tag">Gourmet</a> 
                                            <a href="#" rel="tag">sweet</a>
                                        </span>
                                        <div class="title">
                                            <a href="#" rel="tag">
                                                <h3>Almond Cookies Breakfast</h3></a>
                                        </div>
                                        <span class="price">
                                            £5.00
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="a">
                                        <div class="product-thumbnail">
                                            <img width="300" height="233" src="images/breakfast-7-300x233.jpg" alt="breakfast-7.jpg" title="breakfast-7.jpg"></div>
                                        <a href="#" class="button">Add to card</a>
                                        <h5>Home Chef</h5>
                                        <span class="tagged_as">
                                            <span class="visuallyhidden">Tags:</span> 
                                            <a href="#" rel="tag">bio</a> 
                                            <a href="#" rel="tag">breakfast</a> 
                                            <a href="#" rel="tag">Gourmet</a> 
                                            <a href="#" rel="tag">sweet</a>
                                        </span>
                                        <div class="title">
                                            <a href="#" rel="tag">
                                                <h3>Almond Cookies Breakfast</h3></a>
                                        </div>
                                        <span class="price">
                                            £5.00
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="a">
                                        <div class="product-thumbnail">
                                            <img width="300" height="233" src="images/breakfast-7-300x233.jpg" alt="breakfast-7.jpg" title="breakfast-7.jpg"></div>
                                        <a href="#" class="button">Add to card</a>
                                        <h5>Home Chef</h5>
                                        <span class="tagged_as">
                                            <span class="visuallyhidden">Tags:</span> 
                                            <a href="#" rel="tag">bio</a> 
                                            <a href="#" rel="tag">breakfast</a> 
                                            <a href="#" rel="tag">Gourmet</a> 
                                            <a href="#" rel="tag">sweet</a>
                                        </span>
                                        <div class="title">
                                            <a href="#" rel="tag">
                                                <h3>Almond Cookies Breakfast</h3></a>
                                        </div>
                                        <span class="price">
                                            £5.00
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="a">
                                        <div class="product-thumbnail">
                                            <img width="300" height="233" src="images/breakfast-7-300x233.jpg" alt="breakfast-7.jpg" title="breakfast-7.jpg"></div>
                                        <a href="#" class="button">Add to card</a>
                                        <h5>Home Chef</h5>
                                        <span class="tagged_as">
                                            <span class="visuallyhidden">Tags:</span> 
                                            <a href="#" rel="tag">bio</a> 
                                            <a href="#" rel="tag">breakfast</a> 
                                            <a href="#" rel="tag">Gourmet</a> 
                                            <a href="#" rel="tag">sweet</a>
                                        </span>
                                        <div class="title">
                                            <a href="#" rel="tag">
                                                <h3>Almond Cookies Breakfast</h3></a>
                                        </div>
                                        <span class="price">
                                            £5.00
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="a">
                                        <div class="product-thumbnail">
                                            <img width="300" height="233" src="images/breakfast-7-300x233.jpg" alt="breakfast-7.jpg" title="breakfast-7.jpg"></div>
                                        <a href="#" class="button">Add to card</a>
                                        <h5>Home Chef</h5>
                                        <span class="tagged_as">
                                            <span class="visuallyhidden">Tags:</span> 
                                            <a href="#" rel="tag">bio</a> 
                                            <a href="#" rel="tag">breakfast</a> 
                                            <a href="#" rel="tag">Gourmet</a> 
                                            <a href="#" rel="tag">sweet</a>
                                        </span>
                                        <div class="title">
                                            <a href="#" rel="tag">
                                                <h3>Almond Cookies Breakfast</h3></a>
                                        </div>
                                        <span class="price">
                                            £5.00
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="a">
                                        <div class="product-thumbnail">
                                            <img width="300" height="233" src="images/breakfast-7-300x233.jpg" alt="breakfast-7.jpg" title="breakfast-7.jpg"></div>
                                        <a href="#" class="button">Add to card</a>
                                        <h5>Home Chef</h5>
                                        <span class="tagged_as">
                                            <span class="visuallyhidden">Tags:</span> 
                                            <a href="#" rel="tag">bio</a> 
                                            <a href="#" rel="tag">breakfast</a> 
                                            <a href="#" rel="tag">Gourmet</a> 
                                            <a href="#" rel="tag">sweet</a>
                                        </span>
                                        <div class="title">
                                            <a href="#" rel="tag">
                                                <h3>Almond Cookies Breakfast</h3></a>
                                        </div>
                                        <span class="price">
                                            £5.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="salads" class="tab-pane fade">
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="soups" class="tab-pane fade">
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="main" class="tab-pane fade">
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="desserts" class="tab-pane fade">
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="breakfast" class="tab-pane fade">
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="drinks" class="tab-pane fade">
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="accessories" class="tab-pane fade">
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="a">
                                    <div class="product-thumbnail">
                                        <img width="300" height="233" src="images/salad-4-300x233.jpg" alt="salad-4-300x233.jpg" title="salad-4-300x233.jpg"></div>
                                    <a href="#" class="button">Add to card</a>
                                    <h5>Home Chef</h5>
                                    <span class="tagged_as">
                                        <span class="visuallyhidden">Tags:</span> 
                                        <a href="#" rel="tag">bio</a> 
                                        <a href="#" rel="tag">breakfast</a> 
                                        <a href="#" rel="tag">Gourmet</a> 
                                        <a href="#" rel="tag">sweet</a>
                                    </span>
                                    <div class="title">
                                        <a href="#" rel="tag">
                                            <h3>Almond Cookies Breakfast</h3></a>
                                    </div>
                                    <span class="price">
                                        £5.00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
