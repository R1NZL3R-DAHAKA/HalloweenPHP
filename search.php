<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Search</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/jquery.countdown.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="search/search.js"></script>
          <script src="js/script.js"></script>

  
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/jquery.countdown.js"></script>
     <script>

   
     </script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">
     </head>
     <body  class="">
<!--==============================header=================================-->
<header>
    <div class="container_12">
      <div class="grid_12">
        <h1><a href="index.html.php"><img src="images/logo.png" alt="">""</a> </h1>
        <!--==============================COUNTDOWN START=================================-->
        <style>
          p {
            text-align: right;
            font-size: 60px;
            margin-top: 70px;
          }
        </style>
        </head>

        <body>
          <p id="demo"></p>
          <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Oct 31, 2021 00:00:00").getTime();

            // Update the count down every 1 second
            var x = setInterval(function () {

              // Get today's date and time
              var now = new Date().getTime();

              // Find the distance between now and the count down date
              var distance = countDownDate - now;

              // Time calculations for days, hours, minutes and seconds
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);

              // Output the result in an element with id="demo"
              document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";

              // If the count down is over, write some text 
              if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
              }
            }, 1000);
          </script>
          <!--==============================COUNTDOWN END=================================-->
          <div class="clear"></div>
          <div class="menu_block">
            <!--==============================NAVEGATION BAR==============================-->
            <nav class="">
              <ul class="sf-menu">
                <li class="current"><a href="index.html.php">Inicio</a></li>
                <li><a href="index-1.html.php">Historia</a></li>
                <li><a href="index-2.html.php">Recetas</a></li>
                <li><a href="index-4.html.php">Decoraciones</a></li>
              </ul>
            </nav>
            <form id="search" action="search.php" method="GET">
              <input type="text" name="s">
              <a onClick="document.getElementById('search').submit()"></a>
              <div class="clear"></div>
            </form>
            <div class="clear"></div>
          </div>

          <div class="clear"></div>
      </div>
    </div>
  </header>

<!--==============================Content=================================-->

<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - September 07, 2013!</div>
  <div class="container_12">
    <div class="grid_12 ">
      <div class="box bx2 pb1">
        <h3>Search result:</h3>
        <div id="search-results"></div>
      </div>
    </div>
  </div>
</div>

<!--==============================footer=================================-->

<footer>    
  <div class="container_12">
    <div class="grid_12">
    <div class="socials">
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
    </div>
      <div class="copy">
      Halloween    &copy; 2013 | <a href="#">Privacy Policy</a> | Website Template  designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
      </div>
    </div>
  </div>
</footer>

</body>
</html>