<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1366.less', 'css/1366.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/1366.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type_1366">
            <div class="container">
                <div class="woocommerce-tabs ">
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#home" title="Show products as thumbs">Description</a>
                        </li>
                        <li><a data-toggle="pill" href="#menu1" title="Show products as list">Additional information</a>
                        </li>
                        <li><a data-toggle="pill" href="#menu2" title="Show products as list">Reviews (0)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" class=" tab-pane fade in active ">
                            <div class=" panel " id="home" role="tabpanel" aria-labelledby="tab-title-description" style="display: block;">
                                <h2>Description</h2>
                                <p>Directions:</p>
                                <p>1. Preheat oven to 400 degrees F (200 degrees C).
                                    <br> 2. In large bowl, cream together the butter and sugar. Beat in the egg, amaretto, and almonds. Gradually mix in the flour until well blended. …
                                    <br> 3. Bake 5 to 8 minutes in the preheated oven, or until cookies are lightly colored.</p>
                            </div>
                        </div>
                        <div id="menu1" class=" tab-pane fade">
                            <div class="panel" id="menu1" role="tabpanel" aria-labelledby="tab-title-additional_information" style="display: block;">
                                <h2>Additional information</h2>
                                <table class="shop_attributes">
                                    <tbody>
                                        <tr>
                                            <th>Brand</th>
                                            <td>
                                                <p><a href="#" rel="tag">Home Chef</a></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="menu2" class=" tab-pane fade">
                            <div class="panel" id="menu2" role="tabpanel" aria-labelledby="tab-title-reviews" style="display: block;">
                                <div id="reviews" >
                                    <div id="comments">
                                        <h2>Reviews</h2>
                                        <p>There are no reviews yet.</p>
                                    </div>
                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" >
                                                <span id="reply-title">Be the first to review “Almond Cookies Breakfast” </span>
                                                <form action="#" method="post" id="commentform"  novalidate="">
                                                    <p><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span>*</span></p>
                                                    <p>
                                                        <label for="rating">Your Rating</label>
                                                    <p class="stars">
                                                        <a href="#">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></p>


                                                    </p>
                                                    <p class="comment-form-comment">
                                                        <label for="comment">Your Review</label>
                                                        <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
                                                    </p>
                                                    <p>
                                                        <label for="author">Name <span>*</span></label>
                                                        <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
                                                    </p>
                                                    <p>
                                                        <label for="email">Email <span>*</span></label>
                                                        <input id="email" name="email" type="email" value="" size="30" aria-required="true" required="">
                                                    </p>
                                                    <p>
                                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                        <input type="hidden" name="comment_post_ID" value="12035" id="comment_post_ID">
                                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>

</html>