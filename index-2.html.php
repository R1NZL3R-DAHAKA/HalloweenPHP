<!DOCTYPE html>
<html lang="en">
<!--==============================PHP VARIABLES=================================-->
<?php
$navB1 = "Inicio";
$navB2 = "Historia";
$navB3 = "Recetas";
$navB4 = "Decoraciones";

  $recetas = array(
  "PCalabaza"=>"El pastel consiste de un bizcocho a base de calabaza, variando el color de naranja a marrón,
  horneado raramente con una cubierta superior. El pastel es generalmente saborizado con nuez
  molida, canela y jengibre.
  Cuando se elabora en variante de tarta (pie) consiste en un puré de calabaza horneado en una
  masa o en su cáscara, y es tradicionalmente servido con crema batida.",
                  
  "BFantasma"=>"Los fantasmas que nos propone la italiana Chiara Passion se hacen con un bizcocho de
  zanahoria, harina de repostería, huevos blanqueados con azúcar y un poco de levadura
  química. Y para hornearlos os recomendamos estos moldes de Decora.
  El toque final lo pone la cobertura de azúcar glas con zumo de limón rematada con estas
  perlas. ¿A que nos han quedado monisísimos? Pero todo hay que decirlo, creo que pasarán más
  miedo los fantasmitas que vosotros cuando los queráis devorar de un bocado.",
  
  "BAraña"=>"Queda poco para Halloween, algo hay que preparar. Es una fiesta que se ha convertido en la
  favorita de los niños por los disfraces y dulces terroríficos, ellos se lo pasan genial,
  vale la pena disfrutarlo con ellos.
  El bizcocho es el del yogurt, utilicé la mitad de la masa, en un molde de 18cm. Las patas
  son de regaliz y el resto es fondant blanco y negro, ahora se encuentra en muchos centros
  comerciales y en tiendas especializadas.");

  $links = array(
  "PCalabaza" => "https://elgourmet.com/receta/pastel-de-calabaza",

  "BFantasta" => "https://www.marialunarillos.com/blog/bizcochos-fantasma-halloween.html",

  "BAraña" => "http://www.cocinandoconmontse.com/2014/10/arana-halloween-bizcochos-dulces.html");

?>

<head>
    <title>Recetas</title>
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
                                <li><a href="index.php"><?php echo $navB1;?></a></li>
                                <li><a href="index-1.html.php"><?php echo $navB2;?></a></li>
                                <li class="current"><a href="index-2.html.php"><?php echo $navB3;?></a></li>
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
        <div class="ic">More Website Templates @ TemplateMonster.com - September 07, 2013!</div>
        <div class="container_12">
            <div class="grid_12">
                <div class="box blue pb1">
                    <h3 class="head1">Recetas</h3>
                    <img src="images/page3_img1.jpg" alt="" class="img_inner fleft">
                    <div class="extra_wrapper">
                        <div class="text1"><a href="https://elgourmet.com/receta/pastel-de-calabaza">Pastel de
                                Calabaza</a></div>
                        <h4><?php echo $recetas["PCalabaza"];?></h4>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="box pt1 green pb1">
                    <img src="images/page3_img2.jpg" alt="" class="img_inner fleft">
                    <div class="extra_wrapper">
                        <div class="text1"><a
                                href="https://www.marialunarillos.com/blog/bizcochos-fantasma-halloween.html">Bizcochos
                                Fantasma</a></div>
                        <h4><?php echo $recetas["BFantasma"];?></h4>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="box bx2 pt1">
                    <img src="images/page3_img3.jpg" alt="" class="img_inner fleft">
                    <div class="extra_wrapper">
                        <div class="text1"><a
                                href="http://www.cocinandoconmontse.com/2014/10/arana-halloween-bizcochos-dulces.html">Bizcocho
                                araña</a></div>
                        <h4><?php echo $recetas["BAraña"];?></h4>
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