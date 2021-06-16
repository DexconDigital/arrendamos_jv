
<!DOCTYPE html>
<html lang="en">
<?php
$gs = 0;
$ti = 0;
$ci = 0;
$zo = 0;
$pre = 0;
$pre1 = 0;
if (isset($_GET["gs"]) && isset($_GET["ti"]) && isset($_GET["ci"]) && isset($_GET["zo"])&& isset($_GET["pre"]) && isset($_GET["pre1"])) {
    $gs = $_GET["gs"];
    $ti = $_GET["ti"];
    $ci = $_GET["ci"];
    $zo = $_GET["zo"];
    $pre = $_GET["pre"];
    $pre= str_replace('.', '', $pre);
    $pre1 = $_GET["pre1"];
	$pre1= str_replace('.', '', $pre1);
	
	
}
?>

<!-- Mirrored from p.w3layouts.com/demos_new/30-01-2017/pro_property-demo_Free/1675550087/web/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Aug 2018 16:07:30 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
	<link rel="icon" type="image/png" href="images/favicon.png" />
	<title>Inmuebles</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/swipebox.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/nouislider.css">
	<style> 

</style>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
	 crossorigin="anonymous"> <!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/bf9798fd18.js"></script>
	<link rel="stylesheet" href="css/style2.css">
</head>

<body onload="imprimir(1)">
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
                            <div class="collapse navbar-collapse nav-wil menu-ppal" id="bs-example-navbar-collapse-1">
    
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
                   
                <div class="main-2" style="background-image:url(images/Inmueblesbanner.png); background-repeat: no-repeat;background-size:  cover;">
                    <div class="banner">
                    <!--Slider-->
								<h3>Inmuebles</h3>
                </div>
            </div>
		<div class="clearfix"> </div>
		
	
    		<div class="property-search-area container ancho-buscador" >
						<div class="property-search-form property-search-form2 dimension">
							<div class="advanced-search-sec row">
								<div class="col-xs-12 col-lg-me-13 search-field">
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
								<div class="col-xs-12 col-sm-6 col-md-me-13 col-lg-me-13 search-field" >
									<label for="property-bathroom">Operación</label>
									<select id="property-bathroom" name="Bathrooms" class="operacion">
										<option value="0">Operacion</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-me-29 col-lg-me-17 search-field" id="dis-precio">
									<div class="price-range">
										<div class="property-price">
											<label>Precio</label>
											<input type="text" name="Codigo" placeholder="Precio Mínimo" id="input-number-1" style="margin-left: 0;display: none"
											    alt="Precio Mínimo" disabled>
											<input type="text" name="Codigo" placeholder="Precio Máximo" id="input-number" style="margin-left: 0; display: none"
											    alt="Precio Máximo" disabled>
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
					<style>
						.news-grid{
							height: 300px !important;
							margin:9px 0 !important;
						}
						.news-grid img{
							height: 100%;
							object-fit: cover;
						}
					</style>
					
		<div class="news news-inmueble" id="news">
			<div class="container">
				<div class="latest-agileits-grids" id="inmb">
				
					<div class="clearfix"> </div>
				</div>
				<div class="col-xs-12">
					<div class="pagination-area mb-60">
						<ul class="pagination-list text-center">
							<div class="pagina" style="color:black;"></div>
							<li id="anterior">
								<a href="#" id="banterior" onclick="paginator('ant')">
									<i class="fa fa-angle-left" aria-hidden="true" id="flechas"></i>
								</a>
							</li>
							<li id="siguiente">
								<a href="#" id="bsiguiente" onclick="paginator('sig')">
									<i class="fa fa-angle-right" aria-hidden="true" id="flechas"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>



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
		
		
		<!-- start-smoth-scrolling -->
		<!--swipebox -->
		<link rel="stylesheet" href="css/swipebox.css">
		<script src="js/jquery.swipebox.min.js"></script>
		<script type="text/javascript">
			jQuery(function ($) {
				$(".swipebox").swipebox();
				
				
			});
		</script>
	
		<!--//swipebox Ends -->
		<!-- //js -->
		
		<script>
					$('.w3_navigation').addClass('menufijo');
					$(".navbar-nav > li > a").css("color", "#da251c");
		</script>
		 
		<script src="js/bootstrap.js"></script>
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
		<script src="js/nouislider.js"></script>

		<script src="js/wNumb.js"></script>
		<script src="js/index.js"></script>
		<script src="js/paginador.js"></script>
		<script src="js/search.js"></script>
		<script src="js/main.js"></script>
				<script type="text/javascript">
				 $(".operacion").change(function() {
                var operacion = $(".operacion option:selected").val();
    			console.log(operacion)
    				if(operacion == 0){
                            $('#dis-precio').css("display", "none")
                        }
                    else{
                        $('#dis-precio').css("display", "block")
                    }
				 });
	
		
			
		</script>

	

		
		<?php echo '<script>var gs = ' . $gs . '</script>'; ?>
    <?php echo '<script>var ti = ' . $ti . '</script>'; ?>
    <?php echo '<script>var ci = ' . $ci . '</script>'; ?>
    <?php echo '<script>var zo = ' . $zo . '</script>'; ?>
    <?php echo '<script>var pre = ' . $pre . '</script>'; ?>
	<?php echo '<script>var pre1 = ' . $pre1 . '</script>'; ?>
		
		<script>
		if (typeof(Storage) !== "undefined") {
		// Store
		localStorage.setItem("gestion", gs);
    localStorage.setItem("ciudad", ci);
    localStorage.setItem("tipo", ti);
    localStorage.setItem("zona", zo);
    localStorage.setItem("precio", pre);
	localStorage.setItem("precio1", pre1);
		
		} else {
			document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
		}
		</script>


		<!-- //here ends scrolling icon -->
	</body>

	<!-- Mirrored from p.w3layouts.com/demos_new/30-01-2017/pro_property-demo_Free/1675550087/web/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Aug 2018 16:07:30 GMT -->

</html>