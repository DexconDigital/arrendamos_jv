<?php
		require_once("js/bd_function.php");
		$id = 1;
		$con = Conect();
		$qry = "SELECT * FROM estadisticas where id ='$id'";
		$sql = mysqli_query($con, $qry);
		$res =  mysqli_fetch_array($sql);
		?>
<html lang="es">

<!-- Mirrored from p.w3layouts.com/demos_new/30-01-2017/pro_property-demo_Free/1675550087/web/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Aug 2018 16:07:30 GMT -->
<!-- Added by HTTrack -->

<!-- /Added by HTTrack -->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="icon" type="image/png" href="images/favicon.png" />
	<title>Inicio</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/swipebox.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/nouislider.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- <link rel="stylesheet" href="css/style2.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> <!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/pop-up.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<link href="http://fonts.googleapis.com/css?family=Gidugu" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
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
		<div class="w3_navigation">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="logo">
							<a href="index.php" class="scroll hvr-bounce-to-bottom "><img src="images/Arrendamos_logo.png" style="height: 60px;">
							</a>
						</div>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil menu-ppal" id="bs-example-navbar-collapse-1">

					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
		<div class="main">
			<!-- banner -->

			<div class="banner">
				<!--Slider-->


				<div class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="slider-info slide-altura" style="background-image: url(images/slide_1.jpg)  ;">
								<!-- <div class="banner"> -->
								<h3>Arrendamos J V SAS</h3>
								<p>Su mejor alternativa Inmobiliaria </p>
								<!-- </div> -->
							</div>
						</li>
						<li>
							<div class="slider-info slide-altura" style="background-image: url(images/slide_2.jpg) ; ">
								<h3>Encuentra </h3>
								<p>Tu inmueble con nosotros</p>

							</div>
						</li>
						<li>
							<div class="slider-info slide-altura" style="background-image: url(images/slide_3.jpg) ;">
								<h3><?php echo $res[4]; ?> Años</h3>
								<p>Comprometidos con nuestros clientes </p>
							</div>
						</li>
					</ul>
					<ul class="top-links" style="position: absolute;top: 70%;width:  100%;z-index:  300;">
						<li>
							<a href="https://www.facebook.com/ArrendamosJV1/" target="_blank">
								<i class="fa fa-facebook back-face"></i>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/arrendamosjv/" target="_blank">
								<i class="fa fa-instagram back-ins"></i>
							</a>
						</li>
						<li>
							<a href="https://wa.me/573108567102" target="_blank">
								<i class="fa fa-whatsapp back-what"></i>
							</a>
						</li>
					</ul>
					<div class="clearfix"></div>
					<div class="property-search-area container ancho-buscador">
						<div class="property-search-form ">
							<div class="advanced-search-sec row">
								<div class="col-xs-12 col-sm-6 col-lg-2 search-field">
									<label for="property-location">Código</label>
									<input placeholder="Código" type="text" class="in-field field-width codeInm" name="property_id " id="property_id ">
								</div>
								<div class="col-xs-12 col-sm-6 col-md-me-15 col-lg-me-13 search-field">
									<label for="proeprty-type">Ciudad </label>
									<select id="proeprty-type" name="Property-type" class="ciudad">
										<option value="0">Ciudad</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-me-13 col-lg-me-13 search-field">
									<label for="property-room">Zona</label>
									<select id="property-room" name="Total-room" class="zona">
										<option value="0">Zona</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-me-13 col-lg-me-15 search-field">
									<label for="property-bathroom">Tipo de Inmueble</label>
									<select id="property-bathroom" name="Bathrooms" class="inmueble">
										<option value="0">Tipo de Inmueble</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-me-13 col-lg-me-13 search-field">
									<label for="property-bathroom">Operación</label>
									<select id="property-bathroom" name="Bathrooms" class="operacion">
										<option value="0">Operación</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-me-29 col-lg-me-17 search-field" id="dis-precio">
									<div class="price-range">
										<div class="property-price">
											<label>Precio</label>
											<input type="text" name="Codigo" placeholder="Precio Mínimo" id="input-number-1" style="margin-left: 0;display: none" alt="Precio Mínimo" disabled>
											<input type="text" name="Codigo" placeholder="Precio Máximo" id="input-number" style="margin-left: 0; display: none" alt="Precio Máximo" disabled>
											<div id="slider" style="margin-top: 7px;"></div>
										</div>
										<!-- /.property-price -->
									</div>
									<!-- /.price-range -->
								</div>
								<div class="col-xs-12 col-sm-6 col-md-me-15 col-lg-me-15 search-field">
									<div class="submit">
										<button type="submit" value="Buscar" class="search-1 dream-btn" style="background:  white;">Buscar</button>
									</div>
								</div>
								</form>
							</div>
							<!-- /.advanced-search-sec -->
							<!-- Show or Hide Property -->
						</div>
					</div>
					<div class="property-search-form ">
						<!-- Show or Hide Property -->
						<a class="more-options close-element"></a>
					</div>
				</div>
				<!--//Slider-->


			</div>
			<!-- //banner -->
		</div>
		<!-- header -->

		<!-- //header -->

		<div class="clearfix"> </div>
		</div>
		</div>
		<!---728x90--->
		<div style='margin: 0 auto;text-align: center;margin-top: 5px;'>

		</div>
		</div>
		<!-- //about-bottom -->
		<!-- /property-grids -->
		<div class="news news-nuevo" id="news">
			<div class="container">
				<h3 class="w3l_head">PROPIEDADES DESTACADAS</h3>

				<div class="latest-agileits-grids" id="propiedades">

					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="services" id="services">
			<div class="container">

				<div style='margin: 0 auto;text-align: center;margin-top: 5px;'>

				</div>
				<h3 class="w3l_head">NUESTROS SERVICIOS</h3>


				<div class="agileinfo-wthree-grid-info">


					<div class="col-md-12 agile_banner_bottom_grids">
						<div id="trigger">
							<div class="col-md-4 agile_banner_bottom_grid">
								<div class="agile_banner_bottom_grid1 hvr-rectangle-out">
									<span class="glyphicon fas fa-key" aria-hidden="true"></span>

								</div>
								<h3>Arriendos</h3>


								<div class="dropdown">
									<a href="#" data-toggle="dropdown">Ver Más <i class="icon-arrow"></i></a>
									<ul class="dropdown-menu lista-modal">

										<li><span class="glyphicon glyphicon-ok span-lista"></span> Promoción de su inmueble</li>
										<li><span class="glyphicon glyphicon-ok span-lista"></span> Publicidad en principales Portales Inmobiliarios</li>
										<li><span class="glyphicon glyphicon-ok span-lista"></span> Elaboración Contrato de Arrendamiento</li>
										<li><span class="glyphicon glyphicon-ok span-lista"></span> Inventario de Entrega</li>
										<li><span class="glyphicon glyphicon-ok span-lista"></span> Pagos de Administración</li>
										<li><span class="glyphicon glyphicon-ok span-lista"></span> Reparaciones Locativas</li>
										<li><span class="glyphicon glyphicon-ok span-lista"></span> Pago de Impuestos Prediales</li>
										<li><span class="glyphicon glyphicon-ok span-lista"></span> Representaciones en Asambleas P.H</li>


									</ul>
								</div>
							</div>
							<div class="col-md-4 agile_banner_bottom_grid">
								<div class="agile_banner_bottom_grid1 hvr-rectangle-out">
									<span class="glyphicon fas fa-handshake" aria-hidden="true"></span>
								</div>
								<h3>Ventas</h3>
								<div class="dropdown">
									<a href="#" data-toggle="dropdown">Ver Más <i class="icon-arrow"></i></a>

									<ul class="dropdown-menu lista-modal">

										<li><span class="glyphicon glyphicon-ok span-lista"></span> Promoción de su inmueble</li>
										<li><span class="glyphicon glyphicon-ok span-lista"></span> Publicidad en principales Portales Inmobiliarios</li>
										<li><span class="glyphicon glyphicon-ok span-lista"></span> Elaboración Promesa de Compraventa</li>
										<li><span class="glyphicon glyphicon-ok span-lista"></span> Acompañamiento en tramites</li>


									</ul>
								</div>
							</div>
							<div class="col-md-4 agile_banner_bottom_grid">
								<div class="agile_banner_bottom_grid1 hvr-rectangle-out">
									<span class="glyphicon fas fa-gavel" aria-hidden="true"></span>
								</div>
								<h3>Asesorías Jurídicas</h3>
								<div class="dropdown">
									<a href="#" data-toggle="dropdown">Ver Más <i class="icon-arrow"></i></a>
									<ul class="dropdown-menu lista-modal">

										<li><span class="glyphicon glyphicon-ok span-lista"></span> Sucesiones</li>
										<li><span class="glyphicon glyphicon-ok span-lista"></span> Revisión de Promesas de Compraventa</li>
										<li><span class="glyphicon glyphicon-ok span-lista"></span> Revisión Contratos de Arrendamiento</li>


									</ul>

								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- Noticias -->
		<div class="work" id="work">
			<h3 class="w3l_head">ÚLTIMAS NOTICIAS</h3>
			<div class="container">
				<div class="work-grids" id="ulti-noticias">

					<div class="clearfix"> </div>
				</div>
			</div>

		</div>

		<div class="team" id="team">
			<div class="container">
				<h3 class="w3l_head">NUESTROS ALIADOS</h3>

				<div class="w3l_team_grids">

					<div class="col-md-3 col-aliados">
						<center><a href="http://www.ellibertador.co/wps/portal/el-libertador/home" target="_blank"><img src="images/Logo_El libertador (1).png" alt="" style="margin-top: 22px;"></a> </center>
					</div>
					<div class="col-md-3 col-aliados">
						<center><a href="https://www.unifianza.com.co/formularios-interactivos.html" target="_blank"><img src="images/Logo-Unifianza (1).png" alt=""></a> </center>
					</div>

					<div class="col-md-3 col-aliados">
						<center><a href="http://tae-ltda.com/index.php" target="_blank"><img src="images/Logo_SIMI (1).png" alt=""></a> </center>
					</div>

					<div class="col-md-2 col-aliados">
						<center><a href="https://www.protecsa.com.co/" target="_blank"><img src="images/Logo_Protecsa (1).png" alt=""></a> </center>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>

		<!--<div class="property-grids">
			<div class="agile-homes-w3l  grid" style="background-color: #fff">
				<div class="col-md-6 home-agile-left">
					<figure class="effect-moses">
						<a href="clientes.html">
							<img src="images/propietarios_home.JPG" alt="" />
						</a>
						<center>
							<figcaption>
								<a href="propietarios.html">
									<h4>Propietarios</h4>
								</a>
							</figcaption>
						</center>
					</figure>

				</div>
				<div class="col-md-6 home-agile-left">
					<figure class="effect-moses">
						<a href="clientes.html">
							<img src="images/arrendatarios_home.jpg" alt="" />
						</a>
						<center>
							<figcaption>
								<a href="arrendatarios.html">
									<h4>Arrendatarios</h4>
								</a>
							</figcaption>
						</center>
					</figure>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>-->
		<!-- //property-grids -->
		<!-- /services -->

		<!-- //services -->
		<!--team-->

		<!--//team-->
		<!-- work -->

		<!-- //work -->
		<!--/news-->

		<!--//news-->

		<!-- updates-bottom -->

		<div class="updates-bottom">
			<div class="container">
				<div class="col-md-3 w3_updates_bottom_grid">
					<div class="w3_updates_bottom_grid_left">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					</div>
					<div class="w3_updates_bottom_grid_right">
						<p class="counter" id="counter-propertys"></p>
						<h3>Total Clientes</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 w3_updates_bottom_grid">
					<div class="w3_updates_bottom_grid_left">
						<span class="glyphicon fas fa-handshake" aria-hidden="true"></span>
					</div>
					<div class="w3_updates_bottom_grid_right">
						<p class="counter" id="counter-sale"></p>
						<h3>Propiedades en Venta</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 w3_updates_bottom_grid">
					<div class="w3_updates_bottom_grid_left">
						<span class="glyphicon fas fa-key" aria-hidden="true"></span>
					</div>
					<div class="w3_updates_bottom_grid_right">
						<p class="counter" id="counter-rent"></p>
						<h3>Propiedades en Arriendo</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 w3_updates_bottom_grid">
					<div class="w3_updates_bottom_grid_left">
						<span class="glyphicon fas fa-calendar" aria-hidden="true"></span>
					</div>
					<div class="w3_updates_bottom_grid_right">
						<p class="counter" id="counter-experence"></p>
						<h3>Años de experiencia</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>

			</div>
		</div>
		<!-- //updates-bottom -->
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


		<!-- start-smoth-scrolling -->
		<!--swipebox -->
		<link rel="stylesheet" href="css/swipebox.css">
		<script src="js/jquery.swipebox.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();

			});
		</script>

		<!--//swipebox Ends -->
		<!-- //js -->
		<script>
			$(window).scroll(function() {
				if ($(window).scrollTop() > 780) {
					$('.w3_navigation').addClass('menufijo');

				} else {
					$('.w3_navigation').removeClass('menufijo');

				}
			});
		</script>
		<script type="text/javascript">
			$(".operacion").change(function() {
				var operacion = $(".operacion option:selected").val();
				console.log(operacion)
				if (operacion == 0) {
					$('#dis-precio').css("display", "none")
				} else {
					$('#dis-precio').css("display", "block")
				}
			});
		</script>
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
		<script src="js/nouislider.js"></script>
		<script src="js/wNumb.js"></script>
		<script src="js/index.js"></script>
		<script src="js/search.js"></script>
		<script src="js/main.js"></script>
		<script src="js/notices.js"></script>
		<script src="js/pop-up.js"></script>
		<script src="js/lista-desplegable.js"></script>
		<!--  contador -->
		<script src="js/countUp.min.js"></script>
		<script src="js/counter-propertys.js"></script>
		<script src="js/token_api.js"></script>
		<script>
			$(function() {
				// Bind Click event to the drop down navigation button
				$(".nav-button").click(function() {
					/*  Toggle the CSS closed class which reduces the height of the UL thus 
						hiding all LI apart from the first */
					$(this).parent().parent().toggleClass("closed");
				});

			});
		</script>

		<!-- //here ends scrolling icon -->
	</body>

	<!-- Mirrored from p.w3layouts.com/demos_new/30-01-2017/pro_property-demo_Free/1675550087/web/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Aug 2018 16:07:30 GMT -->

</html>