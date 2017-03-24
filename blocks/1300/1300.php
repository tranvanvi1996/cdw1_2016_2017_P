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
        $less->compileFile('less/1300.less', 'css/1300.css');
        ?>
        <link href="css/1300.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>

        <div class="type-1300">
            <div class="container">
                <div class="row">
                    <div id="content">
                        <!-- content 1 -->
                        <div class="content_bg">
                            <div class="category-info">
                                <h2>Women</h2>
                                <div class="info_detail">
                                    <p>Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl.</p>
                                </div>
                            </div>
                        </div>
                        <!-- content 2 -->
                        <div class="product-filter">
                            <!--thanh 1 -->
                            <div class="sort">
                                <label class="control-label" for="input-sort">Sort By:</label>
                                <label class="arrow">
                                    <select id="input-sort" class="form-control  " onchange="location = this.value;" style="display: none;">
                                        <option value="#">Default</option>
                                        <option value="#">Name (A - Z)</option>
                                        <option value="#">Name (Z - A)</option>
                                        <option value="#">Price (Low &gt; High)</option>
                                        <option value="#">Price (High &gt; Low)</option>
                                        <option value="#">Rating (Highest)</option>
                                        <option value="#">Rating (Lowest)</option>
                                        <option value="#">Model (A - Z)</option>
                                        <option value="#">Model (Z - A)</option>
                                    </select>
                                    <div class="btn-group bootstrap-select form-control dropup">
                                        <button type="button" class="btn1 dropdown-toggle   btn-default" data-toggle="dropdown" data-id="input-sort" title="Default"><span class="filter-option pull-left">Default</span>&nbsp;<span class="caret"></span></button>
                                        <!-- button mo khong biet viet-->
                                        <div class="dropdown-menu open">
                                            <ul class="dropdown-menu inner    " role="menu" style="max-height: 185px; overflow-y: auto; min-height: 81px; ">
                                                <li rel="0" data-original-index="0" class="   ">
                                                    <a tabindex="0" class="" style="">
                                                        <span class="text">Default</span>
                                                        <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                    </a>
                                                </li>
                                                <li rel="1" data-original-index="1">
                                                    <a tabindex="0" class="" style="">
                                                        <span class="text">Name (A - Z)</span>
                                                        <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                    </a>
                                                </li>
                                                <li rel="2" data-original-index="2">
                                                    <a tabindex="0" class="" style="">
                                                        <span class="text">Name (Z - A)</span>
                                                        <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                    </a>
                                                </li>
                                                <li rel="3" data-original-index="3">
                                                    <a tabindex="0" class="" style="">
                                                        <span class="text">Price (Low &gt; High)</span>
                                                        <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                    </a>
                                                </li>
                                                <li rel="4" data-original-index="4">
                                                    <a tabindex="0" class="" style="">
                                                        <span class="text">Price (High &gt; Low)</span>
                                                        <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                    </a>
                                                </li>
                                                <li rel="5" data-original-index="5">
                                                    <a tabindex="0" class="" style="">
                                                        <span class="text">Rating (Highest)</span>
                                                        <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                    </a>
                                                </li>
                                                <li rel="6" data-original-index="6">
                                                    <a tabindex="0" class="" style="">
                                                        <span class="text">Rating (Lowest)</span>
                                                        <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                    </a>
                                                </li>
                                                <li rel="7" data-original-index="7">
                                                    <a tabindex="0" class="" style="">
                                                        <span class="text">Model (A - Z)</span>
                                                        <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                    </a>
                                                </li>
                                                <li rel="8" data-original-index="8">
                                                    <a tabindex="0" class="" style="">
                                                        <span class="text">Model (Z - A)</span>
                                                        <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <!--thanh 2 -->
                            <div class="compare-total"><a href="#">Product Compare (0)</a></div>
                            <!--thanh 3 -->
                            <div class="limit">
                                <label class="control-label" for="input-limit">Show:</label>
                                <label class="arrow">
                                    <select id="input-limit" class="form-control  " onchange="location = this.value;" style="display: none;">
                                        <option value="#"="   ">9</option>
                                        <option value="#">25</option>
                                        <option value="#">50</option>
                                        <option value="#">75</option>
                                        <option value="#">100</option>
                                    </select>
                                    <div class="btn-group bootstrap-select form-control">
                                        <button type="button" class="btn1 dropdown-toggle btn-default" data-toggle="dropdown" data-id="input-limit" title="9">
                                            <span class="filter-option pull-left">9</span>&nbsp;<span class="caret"></span>
                                        </button>
                                        <!-- button mo khong biet viet-->
                                        <div class="dropdown-menu open">
                                            <ul class="dropdown-menu inner    " role="menu" style="max-height: 185px; overflow-y: auto; min-height: 81px; ">
                                                <li rel="0" data-original-index="0" class="   ">
                                                    <a tabindex="0" class="" style="">
                                                        <span class="text">9</span>
                                                        <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                    </a>
                                                </li>
                                                <li rel="1" data-original-index="1">
                                                    <a tabindex="0" class="" style="">
                                                        <span class="text">25</span>
                                                        <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                    </a>
                                                </li>
                                                <li rel="2" data-original-index="2">
                                                    <a tabindex="0" class="" style="">
                                                        <span class="text">50</span>
                                                        <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                    </a>
                                                </li>
                                                <li rel="3" data-original-index="3">
                                                    <a tabindex="0" class="" style="">
                                                        <span class="text">75</span>
                                                        <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                    </a>
                                                </li>
                                                <li rel="4" data-original-index="4">
                                                    <a tabindex="0" class="" style="">
                                                        <span class="text">100</span>
                                                        <i class="glyphicon glyphicon-ok icon-ok check-mark"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <!--thanh 4 -->
                            <div class="btn-group">
                                <button type="button" id="grid-view" title="Grid" class="active"><i class="fa fa-th"></i></button>
                                <button type="button" id="list-view" title="List" class=""><i class="fa fa-th-list"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>