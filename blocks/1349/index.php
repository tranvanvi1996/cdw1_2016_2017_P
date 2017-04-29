

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
  <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <?php
  if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
  }
  $less = new lessc;
  $less->compileFile('less/style.less', 'css/style.css');
  ?>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
   <script type="text/javascript">
     
      function getTime() {
              
               var today = new Date();
              
               var mo = today.getMonth();
               var year = today.getFullYear();
               var h = today.getHours();
               var m = today.getMinutes();
               var s = today.getSeconds();      
               document.getElementById('span1').innerHTML = s % 10;
               document.getElementById('span2').innerHTML = parseInt(s / 10);
                document.getElementById('span3').innerHTML = m % 10;
               document.getElementById('span4').innerHTML = parseInt(m / 10);
                document.getElementById('span5').innerHTML = h % 10;
               document.getElementById('span6').innerHTML = parseInt(h / 10);     
             var t = setTimeout(function () { getTime();}, 500);
     }
</script>
          
</head>
<body  onload="getTime()">

<div id="gettimer">
         </div>
<div class="project">
  <div class="container b" >
    <div class="image">
      <img src="https://vip-restaurant.vamtam.com/wp-content/uploads/2014/04/De-logo.svg" alt="Logo">
    </div>
    <div class="text">
      <h1>SOMETHING NEW IS COMING</h1>
      <p>Estimate time for launching
      </p>
    </div>
    <div class="time">
     <div class="col-md-3 a" >
       <div class="item">
        <h5>Days</h5>

        <div class="layout">
        
          <span id="span9">2</span>
          <span id="span8">7</span>
          <span id="span7">2</span>
        </div>

      </div>
    </div>
    <div class="col-md-3 a">
     <div class="item">
      <h5>Hours</h5>

      <div class="layout">
        <span id="span6">3</span>
        <span id="span5">3</span>

      </div>

    </div>
  </div>
  <div class="col-md-3 a">
   <div class="item">
    <h5>Minutes</h5>

    <div class="layout">
      <span id="span4">3</span>
      <span id="span3">3</span>

    </div>

  </div>
</div>
<div class="col-md-3 a">
 <div class="item">
  <h5>Seconds</h5>

  <div class="layout">

    <span id="span2"></span>
    <span id="span1"></span>

  </div>

</div>
</div>

</div>


<div class="sub">
  <h4>Subscribe For Updates</h4>
  <div class="input">
    <input type="text" placeholder="Enter Your Name Here">
    <input type="submit" value="NEXT">
  </div>

  <span>©2016 All rights reserved</span>
</div>
</div>
</div>

</body>
</html>
