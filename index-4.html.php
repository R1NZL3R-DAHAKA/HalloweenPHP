<!DOCTYPE html>
<html lang="en">
<!--==============================PHP VARIABLES=================================-->
<?php
$navB1 = "Inicio";
$navB2 = "Historia";
$navB3 = "Recetas";
$navB4 = "Decoraciones";

  $decoraciones = (object)[
    "Velas" => "Las velas Halloween son uno de los
    elementos decorativos más versátiles que hay y elaborarlas en casa te permite personalizarlas a
    tu gusto. Se pueden hacer en forma de calabaza, sangrientas, de calavera… ¡Hay multitud de
    opciones! Echa un vistazo a estas propuestas y no sabrás por cual decantarte.",

    "Linternas"=>"Para elaborar esta manualidad necesitaremos una buena calabaza naranja
    y redondeada, espacio en la mesa y un buen cuchillo. Después, bastará con marcar el rostro y
    recortar según el esquema que tengamos dibujado.",

    "Calabazas"=>"Coge una bandeja grande y coloca en ellas varias calabazas
    pequeñas. Pon también piñas y velas y ya tendrás un original centro de mesa perfecto para Halloween.",
  ];
?>

<head>
    <title>Decoraciones</title>
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
                <h1><a href="index.html.php"><img src="images/anim.gif" alt=""></a> </h1>
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
                                <li class="current"><a href="index.html.php"><?php echo $navB1;?></a></li>
                                <li><a href="index-1.html.php"><?php echo $navB2;?></a></li>
                                <li><a href="index-2.html.php"><?php echo $navB3;?></a></li>
                                <li><a href="index-4.html.php"><?php echo $navB4;?></a></li>
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
        <div class="container_12">
            <div class="grid_13">
                <div class="box pb0 green">
                    <h3>Manualidades</h3>
                    <div class="block2">
                        <img src="images/page5_img1.jpg" alt="" class="img_inner i1">
                        <div class="text1"><a href="https://www.hacervelas.es/hacer-velas-de-halloween/">Velas
                                decorativas</a></div><?php echo $decoraciones->Velas;?>
                    </div>
                    <div class="block2">
                        <img src="images/page5_img2.jpg" alt="" class="img_inner i1 ">
                        <div class="text1"><a
                                href="https://www.hogarmania.com/decoracion/manualidades/otros/como-tallar-calabaza-21751.html">Linternas
                                de Jack</a></div><?php echo $decoraciones->Linternas;?>
                    </div>
                    <div class="block2">
                        <img src="images/page5_img3.jpg" alt="" class="img_inner i1">
                        <div class="text1"><a
                                href="https://papelisimo.es/2015/10/calabaza-de-papel-rellena-de-caramelos-halloween/">Calabaza
                                rellena de caramelos</a></div><?php echo $decoraciones->Calabazas;?>
                    </div>
                    <div class="clear"></div>
                    <div class="clear"></div>
                </div>
                <div class="box bx2">
                    <h3>Mas decoraciones</h3>
                    <div style="text-align:center;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Q8yc-Vusoj8"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="clear"></div>

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
                    Halloween &copy; 2013 | <a href="#">Privacy Policy</a> | Website Template designed by <a
                        href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>