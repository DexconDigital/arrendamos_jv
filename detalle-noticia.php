<!DOCTYPE html>
<html lang="en">

<?php
require_once("js/bd_function.php");

$codigo = $_GET["codigo"];

$con = Conect();

$sql = "SELECT * FROM noticias WHERE id = $codigo";
$result = $con->prepare( $sql );
$result->execute();
$resultado = $result->fetchAll();
    
foreach ( $resultado as $key => $field ) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $descripcion = $field['descripcion'];
    $imagen = $field['imagen'];
    $archivo = $field['archivo'];
    $noticia = $field['noticia'];
    $fecha_complete = strtotime($field['fecha']);
}

?>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <title>Detalle Noticia</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pro Property Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <style>
        .pdf-descargar {
            font-size: 1.3rem;
        }

        .pdf-descargar i {
            color: #da251c !important;
        }

        .img-noticias {
            text-align: center;
            margin-bottom: 40px;
        }

        .img-noticias img {
            width: 70% !important;
            height: auto !important;
        }

        .main-blog .post-inner {
            padding: 15px;
        }

        }
    </style>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/swipebox.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/noticias.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //font-awesome icons -->
    <link href="http://fonts.googleapis.com/css?family=Gidugu" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href="css/inmueble.css" rel="stylesheet" type="text/css" media="all" />
    <script src="https://use.fontawesome.com/bf9798fd18.js"></script>
</head>

<body>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
            }
        })();
    </script>

    <body>
        <!-- <div class="main-2" style="background-image: url(images/Noticiasbanner.png); background-repeat: no-repeat;background-size:  100% 100%;"> -->

        <div class="banner" style="height:7vh;">
            <!--Slider-->
        </div>
        </div>
        <div class="w3_navigation w3_navigation2">
            <div class="container">
                <nav class="navbar navbar-default navbar-default2">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo">
                            <a href="index.php" class="scroll hvr-bounce-to-bottom "><img src="images/Arrendamos_logo.png" style="height: 60px;"> </a>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil menu-ppal" id="bs-example-navbar-collapse-1">

                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>

        <section class="main-blog">
            <div class="container">

                <div class="blog-each-item" id="notice-info">
                    <div class="row">
                        <article class="post-item">
                            <div class="shadow-bottom-items">
                                <div class="img-noticias">
                                    <img src="arrendamos-noticias/admin/<?php echo $imagen;?>" alt="Featured" class="imagen-noticia">
                                </div>
                            </div>
                            <div class="post-inner">
                                <div class="post-content">
                                    <div class="post-title">
                                        <h3><?php echo $nombre ?></h3>
                                    </div>
                                    <div class="post-entry" style="word-wrap: break-word;">
                                        <div id="calendario">
                                         
                                        </div>
                                        <p><?php echo $noticia?></p>
                                        <?php if($archivo != "archivos/"){
                                            echo '
                                                <a class="pdf-descargar" download="" href="arrendamientos-noticias/admin/<?php echo $archivo; ?>">
                                                <i class="fas fa-file-pdf"></i> Descarga aqui el Archivo adjunto</a>
                                            ';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div> <!-- /.blog-each-item -->

            </div> <!-- /.container -->
        </section>
        <!-- //contact -->
        <!-- footer -->
        <div class="footer-bottom footer-ppal">

        </div>
        <div class="copy-right-social">
            <div class="container">
                <div class="copy-right">
                    <p>&copy; Copyright © 2019
                        <a href="https://www.dexcondigital.com/">Dexcon Digital.</a> Todos los derechos reservados.</p>
                </div>
                <div class="bottom-socila-icons">
                    <ul class="top-links two">
                        <li>
                            <a href="https://www.facebook.com/ArrendamosJV1/">
                                <i class="fa fa-facebook back-face"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/arrendamosjv/">
                                <i class="fa fa-instagram back-ins"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/573108567102" target="_blank">
                                <i class="fa fa-whatsapp back-what"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //footer -->
        <a href="#" id="toTop" style="display: block;">
            <span id="toTopHover" style="opacity: 1;"> </span>
        </a>

        <script src="js/jquery-2.2.3.min.js"></script>
        <!-- skills -->

        <script src="js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function() {
                // Slideshow 4
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function() {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function() {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });

            });
        </script>
        <!-- js -->
        <!-- Starts-Number-Scroller-Animation-JavaScript -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/counterup.min.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 20,
                    time: 1000
                });
            });
        </script>

        <!-- //Starts-Number-Scroller-Animation-JavaScript -->

        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script src="js/main.js"></script>
        <!-- start-smoth-scrolling -->
        <!--swipebox -->
        <link rel="stylesheet" href="css/swipebox.css">
        <script src="js/jquery.swipebox.min.js"></script>
        <script type="text/javascript">
            jQuery(function($) {
                $(".swipebox").swipebox();
            });
        </script>
        <script>
            $('.w3_navigation').addClass('menufijo');
            $(".navbar-nav > li > a").css("color", "#da251c");
        </script>
        <!--//swipebox Ends -->
        <!-- //js -->
        <script src="js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                    };
                */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <script src="js/owlcarousel/owl.carousel.min.js"></script>
        <script src="js/owlcarousel/owl.carousel.js"></script>
        <script>
        </script>
        <?php echo "<script> var anio = " . date('Y', $fecha_complete) . "</script>"; ?>
        <?php echo "<script> var mes = " . date('m', $fecha_complete) . "</script>"; ?>
        <?php echo "<script> var dia = " . date('d', $fecha_complete) . "</script>"; ?>
        <script>
            var noti = '<i class="fa fa-calendar">  ' + dia + '/' + mes + '/' + anio + '</i>';
            $("#calendario").append(noti);
        </script>


    </body>


</html>