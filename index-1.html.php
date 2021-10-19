<!DOCTYPE html>
<html lang="en">
<!--==============================PHP VARIABLES=================================-->
<?php
$historiatxt = "El término Halloween proviene de la contracción inglesa: All Hallows’ Eve, cuyo significado se
refiere a la víspera de Todos los Santos o la Víspera de los Difuntos.
En la tradición celta, la víspera del 1 de noviembre era conocida como el festival del Samhain,
nombre que a la vez procede del irlandés antiguo y está relacionado con el fin del verano.
Durante esa noche, la tradición creía que los difuntos caminaban entre los vivos y para ello se
hacían rituales de comunicación con los muertos ayudándolos a encontrar su camino de regreso
hacia el descanso eterno.";
$NPerutxt = "La fiesta de Halloween en Perú se realiza siguiendo las tradiciones de Estados Unidos de donde
proviene la celebración. Los jóvenes y niños esperan este día para vestirse con disfraces,
máscaras, trajes de superhéroes o personajes de sus películas favoritas.
La población joven suele asistir a fiestas organizadas por clubs nocturnos, conciertos y
festivales, en los que se organizan concursos de disfraces, por su parte los niños salen en
grupos con compañía de sus padres a pedir caramelos en los alrededores de sus hogares.
Algunas familias realizan actividades en sus propias casas donde los miembros de esta colaboran
para armar la decoración con adornos alusivos a la fiesta.
Aunque es una festividad extranjera ha ido creciendo comercialmente en los últimos años y ha
tenido gran aceptación sobre todo en las familias con niños pequeños.";
?>
<head>
    <title>Historia</title>
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
                                <li><a href="index.html.php">Inicio</a></li>
                                <li class="current"><a href="index-1.html.php">Historia</a></li>
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
        <div class="ic">More Website Templates @ TemplateMonster.com - September 07, 2013!</div>
        <div class="container_12">
            <div class="grid_12">
                <div class="box bx2">
                    <h3>Historia</h3>
                    <img src="images/page2_img1.jpg" alt="" class="img_inner">
                    <h4><?php echo $historiatxt ?></h4>
                    <h3>Halloween en Perú</h3>
                    <h4><?php echo $NPerutxt ?></h4>
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