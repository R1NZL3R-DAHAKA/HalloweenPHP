<!DOCTYPE html>
<html lang="en">
<!--==============================PHP VARIABLES=================================-->
<?php
$txtbelowgif = "El Halloween, también conocido como la Noche de Halloween o Noche de Brujas, es una fiesta que celebra la
víspera del Día de Todos Los Santos y se realiza cada año el 31 de octubre.
En Perú, la fecha no tiene un carácter oficial por lo que, dentro del calendario laboral, es un día laborable.
En nuestro país, es una celebración relativamente nueva y popular entre los niños y jóvenes, por lo que las
fiestas en torno a este día generan discusión entre la sociedad peruana.
Es necesario decir que el 31 de octubre también se conmemora en Perú el Día de la Canción Criolla por lo que
las actividades al aire libre se alternan y varían de región en región.";

$peliculas = array(
  "Asi en la tierra como en el infierno",
  "VHS I / II",
  "JIGSAW",
  "Brightburn",
  "ZOMBIELAND",
  "Anabelle");

?>

<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.countdown.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script>
    $(window).load(
        function() {
            $('.carousel1').carouFredSel({
                auto: false,
                prev: '.prev',
                next: '.next',
                width: 220,
                items: {
                    visible: {
                        min: 3,
                        max: 3
                    },
                    height: 'auto',
                    width: 220,

                },
                responsive: true,

                scroll: 1,

                mousewheel: false,

                swipe: {
                    onMouse: false,
                    onTouch: true
                }
            });
            $('.typo').mouseenter(
                function() {
                    var temp = $(".typo>img").attr("data-href");
                    $(".typo>img").attr(
                        "src", temp
                    );
                }
            );

        });
    </script>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">

</head>

<body class="page1">
    <!--==============================header=================================-->
    <header>
        <div class="container_12">
            <div class="grid_12">
                <h1><a href="index.html.php"><img src="images/anim.gif" alt="">""</a> </h1>
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
                    var x = setInterval(function() {

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
                        document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                            minutes + "m " + seconds + "s ";

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

    <div class="content">
        <div class="ic"></div>
        <div class="container_12">
            <div class="grid_9">
                <div class="box">
                    <div class="typo">
                        <div class="ind"></div>
                        <img src="images/static.jpg" data-href="images/anim.gif" alt="">
                    </div>
                    <h4><?php echo $txtbelowgif;?></h4>
                </div>
                <a href="#" class="next"></a><a href="#" class="prev"></a>
                <h3 class="pl1">Peliculas Recomendadas</h3>
                <div class="car_div">
                    <ul class="carousel1">
                        <li><img src="images/page1_img6.jpg" alt=""><a
                                href="https://cuevana3.so/664/annabelle"><?php echo $peliculas[5];?></a>
                        </li>
                        <li><img src="images/page1_img5.jpg" alt=""><a
                                href="https://cuevana3.io/22945/zombieland/comment-page-1"><?php echo $peliculas[4];?></a>
                        </li>
                        <li><img src="images/page1_img4.jpg" alt=""><a
                                href="https://cuevana3.cc/peliculas/brightburn-hijo-de-la-oscuridad/"><?php echo $peliculas[3];?></a>
                        </li>
                        <li><img src="images/page1_img3.jpg" alt=""><a
                                href="https://cuevana3.io/3941/jigsaw-ihy0v/comment-page-1"><?php echo $peliculas[2];?></a>
                        </li>
                        <li><img src="images/page1_img2.jpg" alt=""><a
                                href="https://cuevana3.so/3273/v-h-s"><?php echo $peliculas[1];?></a>
                        </li>
                        <li><img src="images/page1_img1.jpg" alt=""><a
                                href="https://cuevana3.cc/peliculas/asi-en-la-tierra-como-en-el-infierno/"><?php echo $peliculas[0];?></a>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="grid_3">
                <div class="block1 blue"><img src="images/creep1.png" alt=""><a
                        href="https://www.facebook.com/events/aseo-y-bienestar-para-tu-mascota/halloween-concurso-de-disfraces/914123695640628/">Concurso
                        de disfraces - Mascotas</a></div>
                <div class="block1 green"><img src="images/creep3.png" alt=""><a
                        href="https://www.elmundo.es/f5/comparte/2017/10/30/59f4eaedca4741ea228b463d.html">Legendas</a>
                </div>
            </div>
            <div style="text-align:center;"><iframe width="560" height="315"
                    src="https://www.youtube.com/embed/ov62Oy_FOoo" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
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
                    Halloween &copy; 2013 | <a href="#">Privacy Policy</a> | Website Template designed by <a
                        href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>