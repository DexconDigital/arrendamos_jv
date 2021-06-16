<!DOCTYPE html>
<html lang="en">
<?php
    $codigo = $_GET["dt"];
?>

<!-- Mirrored from p.w3layouts.com/demos_new/30-01-2017/pro_property-demo_Free/1675550087/web/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Aug 2018 16:07:30 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <title>Detalle Inmueble</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pro Property Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/swipebox.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/quienes-somos.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous" <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <link href="http://fonts.googleapis.com/css?family=Gidugu" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/bf9798fd18.js"></script>
</head>

<body>
    <script>
        (function () {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
            }
        })();
    </script>
    <script>
        (function () {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
            }
        })();
    </script>
    <script>
        (function () {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
            }
        })();
    </script>
    <style>
        .altoimg{
            height:480px;
        }
        .total-package{
            margin-top:0;
        }
    @media (max-width: 769px){
        .altoimg{
            height:480px;
        }
        .img-resp{
            height: 480px !important;
        }
        .margen{
            margin:0px 0px 1.3em 0px;
            
        }
    
    }
        .img-resp{
            height: 550px ;
        }
        h1.page-header{
            padding-top:1.7em;
            font-size: 2.2em;
        }


    @media (max-width: 480px){
        .altoimg{
            height:19em;
        }
        .img-resp{
            height: 300px !important;
        }
        .img-resp{
            height: 550px ;
        }
        h1.page-header{
            font-size:1.2em;
        }
        .total-package{
            margin-top:0.9em;
        }
        h1.page-header{
            padding-top:0.3em;
            font-size: 1.4em;
        }
    }
    @media(max-width: 320px){
        h1.page-header{
            padding-top:0.3em;
            font-size: 1.2em;
        }
        h2.page-header{
            font-size:0.9em;
        }
    }
    
    </style>

    <body>

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
                        <div class="collapse navbar-collapse nav-wil menu-ppal" id="bs-example-navbar-collapse-1" style="background:#fff">

                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
            <div class="banner" style="height: 6vh;">
                <!--Slider-->
            </div>
        

        <div class="main">
                <div class="container">
                    <!-- /.header-image -->
                    <div class="row">
                        <div class="content col-sm-12 col-md-12">
                            <h1 class="page-header" style="color:  #DA251C;">
                                Detalle de Inmueble
                                <?php echo $codigo;?>
                                <div class="page-header-actions">
                                </div>
                                <!-- /.page-header-actions -->
                            </h1>
                            <!-- GALLERY -->
                        <div class="row">
                                
                                <div class="col-sm-6">
                                   <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                                      <ol class="carousel-indicators">
                                        
                                      </ol>

                                      <!-- Wrapper for slides -->
                                      <div class="carousel-inner altoimg">
                                        <div class="item active">
                                          
                                        </div>

                                        
                                      </div>

                                      <!-- Left and right controls -->
                                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                               </div>
                                <div class="col-sm-1"></div>
                               <div class="col-sm-5 coldetalle">
                                        <div class="total-package shadow-bottom-items">     
                                                <strong id="precio"></strong>
                                                <div class="price-list">

                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-compress"></i>  Total Area
                                                            </span>
                                                            <span id="area">
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-bath"> </i> Baños
                                                            </span>
                                                            <span id="banios">
                                                               
                                                            
                                                        </li>
                                                        <li>
                                                            <span>
                                                            <i class="fa fa-bed"> </i> Cuartos
                                                            </span>
                                                            <span id="alcobas">
                                                                
                                                           
                                                        </li>
                                                        <li>
                                                            <span>
                                                            <i class="fa fa-car"> </i> Garaje
                                                            </span>
                                                            <span id="garajes">

                                                        </li>
                                                        <li>
                                                            <span>
                                                            <i class="fas fa-user-tie"> </i> Administración
                                                            </span>
                                                            <span id="administracion">
                                                        </li>                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                </div>
                            </div>                                
                        
                            <div  class="col-sm-12 coldetalle">
                                <div class="property-detail-section" id="description">
                                    <h2 class="page-header margen" style="color:  #DA251C;">Descripción</h2>
        
                                    <div class="property-detail-description">
                                        <p id="descripcion"></p>
                                    </div>
                                    <!-- /.property-detail-description -->
                                </div>
                            

                           
                         </div>
                          <div class="col-md-12 col-sm-12 col-xs-12 coldetalle">
                              <div class="property-detail-section">
                                    <h2 class="page-header" style="color:  #DA251C;">Características Internas</h2>
                                     <div class="description-inner">
                                 <ul id="details-2"></ul>
                                </div>
                                    <!-- MAP -->
                                    
                                    <!-- /.map-position -->
                                </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 coldetalle">
                                <div class="property-detail-section">
                                    <h2 class="page-header" style="color:  #DA251C;">Características Externas</h2>
                                     <div class="description-inner">
                                     <ul id="details-1"></ul>
                                </div>
                                    <!-- MAP -->
                                    
                                    <!-- /.map-position -->
                                </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 coldetalle">
                                <div class="property-detail-section" id="location">
                                    <h2 class="page-header" style="color:  #DA251C;">Ubicación</h2>
                                    <!-- MAP -->
                                    <div class="map-position">
                                        <div id="map" style="height:300px"></div>
                                    </div>
                                    <!-- /.map-position -->
                                </div>
                                </div>
                              
                          </div>
                            
                        </div>
                        <!-- /.content -->
    
                        <!-- /.sidebar -->
                    </div>
                    <!-- /.row -->
                    <!-- /.block -->
                    <!-- /.customizer -->
                </div>
                <!-- /.container -->
            </div>
            <br>
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
         <script src="js/bootstrap.js"></script>

        <!-- skills -->

        <script src="js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
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
            jQuery(document).ready(function ($) {
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
            jQuery(function ($) {
                $(".swipebox").swipebox();
            });
        </script>
        	      <script>

					$('.w3_navigation').addClass('menufijo');
					$(".navbar-nav > li > a").css("color", "#da251c");
			
		</script>
        <!--//swipebox Ends -->
        <!-- //js -->
       x
        <!-- //for bootstrap working -->
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function () {
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
        <script src="js/search.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1IGUhpmCGfJMYiRso7HUY6tYrHhhy5cs"    async defer></script>
         <?php echo "<script> var codeInm ='" . $codigo . "';</script>"; ?>
        <script type="text/javascript">
    
                var latitud = 0;
                var longitud = 0;
                $.ajax({
                    url: "http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/" + codeInm + "",
                    async: true,
                    type: "GET",
                    dataType: "json",
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader(
                            "Authorization",
                            'Basic ' + btoa('Authorization:eoCuupdlOGv2HYwclvy7Fs3rCDQCEFjgLT3z8kt3-98')
                        );
                    },
                success: function(data) {
                    console.log(data)
                    if(data.msn == "Inmueble NO Disponible"){
                        openModal();
                        return;
                    }
                       var j = 1;
                var carrousel = '';
                if(data.fotos == undefined){
                    carrousel += '<div class="item">' +
                    '<img class="image-responsive" src="images/no_image.png" alt="" />' +
                    '</div>';
                }
                else if (data.fotos.length == 1) {
                    carrousel += '<div class="item">' +
                    '<img class="image-responsive" src="' + data.fotos[0].foto + '" alt="" />' +
                    '</div>';
                } else {
                    
                    for (var y = 1; y < Object.keys(data.fotos).length - 1; y++) {
                        carrousel += '<div class="item">' +
                        '<img class="image-responsive" src="' + data.fotos[y].foto + '" alt="" />' +
                        '</div>';
                    }
                }

                

                    
                    $("#precio").append("$ "+data.precio);

                    $("#alcobas").append(data.alcobas);
                    $("#banios").append(data.banos);
                    $("#garajes").append(data.garaje);
                    $("#area").append(Math.trunc(data.AreaConstruida) + " mts<sup>2</sup>");
                    $("#code").append(data.idInm);
                    $("#estrato").append(data.Estrato);
                    $("#administracion").append('$' + data.Administracion);
                    $("#venta").append("$ "+data.ValorVenta);
                    $("#descripcion").text(data.descripcionlarga);
                    
                     var j = 1;
                        var carrousel = '';
                        if (data.fotos == undefined) {
                            carrousel += '<div class="item active">' +
                                    '<img src="images/no_image.png" alt=""  class="thumb-preview img-resp"/>'+
                                    '</div>';
                        } else {
                            carrousel += '<div class="item active">' +
                                    '<img src="' + data.fotos[0].foto + '" alt="" class="thumb-preview img-resp"/>'+
                                '</div>';

                            for (var y = 1; y < Object.keys(data.fotos).length - 1; y++) {
                                if (data.fotos[y].foto != undefined) {
                                    carrousel += '<div class="item">' +
                                    '<img src="' + data.fotos[y].foto + '" alt="" class="thumb-preview img-resp"/>'+
                                        '</div>';
                                    j++;
                                }
                            }
                        }

                $(".carousel-inner").html(carrousel);


                    $("#gestion").html('<a title="'+data.Gestion+'" >'+data.Gestion+'</a>');
                    $("#tipo").append('<a title="'+data.Tipo_Inmueble+'" style="color:#424242;">'+data.Tipo_Inmueble+'</a>');
                    $('#mycarousel').owlCarousel();
                      var res = '';
                                if((data.caracteristicasExternas != undefined) ){
                                    for(var x = 0; x < Object.keys(data.caracteristicasExternas).length; x++){
                                            res+= '<li class="detalle-caracteristicas"><i class="jfont"></i>'+data.caracteristicasExternas[x].Descripcion+'</li>';
                                            console.log(data.caracteristicasExternas[x].Descripcion)
                                    }
                                }
                                if(Object.keys(data.caracteristicasExternas).length == 0){
                                    res+= '<li class="detalle-caracteristicas"><i class="jfont"></i>Garaje: '+data.garaje+'</li>';
                                }
                    var res1 = '';
                    
                                    if(data.caracteristicasInternas != undefined || Object.keys(data.caracteristicasInternas).length > 0){
                                        for(var x = 0; x < Object.keys(data.caracteristicasInternas).length; x++){
                                            
                                                res1+= '<li class="detalle-caracteristicas"><i class="jfont"></i>'+data.caracteristicasInternas[x].Descripcion+'</li>';
                                                 console.log(data.caracteristicasInternas[x].Descripcion)
                                            
                                            
                                                
                                            }
                                    }   
                    $("#details-1").append(res);
                    $("#details-2").append(res1);
                    console.log(data)
                    console.log(data.caracteristicasInternas)
                    window.localStorage.setItem("codigo",data.idInm)
                    window.localStorage.setItem("gestion",data.Tipo_Inmueble)


                    latitud = data.latitud;
                    longitud = data.longitud;
                    $("#ubicacion").append(data.ciudad + ", " + data.depto);

                    initMap(latitud, longitud);
                },
                error: function(data) {
                    console.log("Fail");
                }
            });

            function initMap(latitud, longitud) {
                var uluru = {
                    lat: parseFloat(latitud),
                    lng: parseFloat(longitud)
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 17,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
            function openModal(){
                $("body").append('<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">'+
                          '<div class="modal-dialog" role="document">'+
                            '<div class="modal-content">'+
                              '<div class="modal-header">'+
                                '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>'+
                                '<h4 class="modal-title" id="myModalLabel">Descripción del inmueble</h4>'+
                              '</div>'+
                              '<div class="modal-body">'+
                              'El inmueble no existe en Arrendamos JV'+
                              '</div>'+
                              '<div class="modal-footer">'+
                                '<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>'+
                              '</div>'+
                            '</div>'+
                          '</div>'+
                        '</div>');
                        
                    $(".modal").modal();
                    setTimeout(() => { 
                        redirect();
                    }, 3000);
            }
            function redirect(){
                window.history.back();
            }


        </script>
        <!-- //here ends scrolling icon -->
    </body>

    <!-- Mirrored from p.w3layouts.com/demos_new/30-01-2017/pro_property-demo_Free/1675550087/web/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Aug 2018 16:07:30 GMT -->

</html>
