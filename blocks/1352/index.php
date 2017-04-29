

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!--fix menu-->
    <script src="js/newjavascript.js" type="text/javascript"></script>
    <!--end fixmenu-->

    <!--slideshow-->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!--end slideshow-->

    <!--croll-->
    <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    <script src="js/wow.min.js" type="text/javascript"></script>

    <script>
        new WOW().init();
    </script>
    <!-- ..end croll -->

    <!-- Owl slide -->
    <link rel="stylesheet" href="jsOWL/owl.carousel.min.css">
    <link rel="stylesheet" href="jsOWL/owl.theme.default.min.css">
    <script src="jsOWL/jquery.min.js"></script>
    <script src="jsOWL/owl.carousel.js"></script>
    <!-- end owl -->
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/style.less', 'css/style.css');
    ?>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div class="type-1352">
      <div class="row pd">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <form>
            <label id="label1">Write a comment:</label>
            <textarea type="text" placeholder="Write us something nice  or just a funny joke..." id="ip1"></textarea>
            <input type="text" placeholder="Jogn Doe" required>
            <input type="text" placeholder="email@example.com">
            <label id="label">YOUR EMAIL ADDRESS WILL NOT BE PUBLISHED.</label>

            <input type="submit" value="Post comment" >
        </form>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</body>
</html>
