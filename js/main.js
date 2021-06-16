(function ($) {
    "use strict";

    var menu = '<nav class="cl-effect-1" id="cl-effect-1">' +
        '<ul class="nav navbar-nav">' +
        '<li >' +
        '<a class="scroll"  href="index.php"><img src="images/inicio.png" class="img-menu"></a>' +
        '</li>' +
        '<li>' +
        '<a href="clientes.html" class="scroll hvr-bounce-to-bottom">Clientes</a>' +
        '</li>' +
        '<li>' +
        '<a href="inmuebles.php" class="scroll hvr-bounce-to-bottom">Inmuebles</a>' +
        '</li>' +
        '<li>' +
        '<a href="noticias.php" class="scroll hvr-bounce-to-bottom">Noticias</a>' +
        '</li>' +
        '<li>' +
        '<a href="quienes-somos.html" class="scroll hvr-bounce-to-bottom">Quiénes Somos</a>' +
        '</li>' +
        '<li>' +
        '<a href="contactenos.php" class="scroll hvr-bounce-to-bottom">Contáctanos</a>' +
        '</li>' +
        '<li>' +
        '<a href="https://www.e-collect.com/customers/Plus/ArrendamosJVPagosPlus.htm" target="_blank" class="scroll hvr-bounce-to-bottom"><img src="images/logo-pse-crediuno-visa (2).png" class="img-menu" ></a>' +
        '</li>' +
        '</ul>' +
        '</nav>';

    $(".menu-ppal").html(menu);





    var footer = '<div class="container">' +
        '<div class="w3agile_footer_grids" style="text-align: left;">' +
        '<div class="col-md-4 w3agile_footer_grid">' +
        '<h3>Quiénes Somos</h3>' +
        '<p>Inmobiliaria fundada el 14 de diciembre de 1999 con matrícula arrendador 2081 de la División de Vivienda de la Alcaldía Mayor de Bogotá D.C. Nos destacamos por tener una clientela 100% de referidos y brindar un servicio de excelencia y confianza. ' +
        '</p >' +
        '</div >' +
        '<div class="col-md-4 w3agile_footer_grid">' +
        '<h3>Contáctanos</h3>' +
        '<ul>' +
        '<li>' +
        '<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Av. Carrera 7, No. 127-48, Oficina 303, ' +
        '<span>Edificio 128 Centro Empresarial, Bogota</span>' +
        '</li>' +
        '<li>' +
        '<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>' +
        '<a href="mailto:arrendamosjv@yahoo.es" target="_blank">arrendamosjv@yahoo.es</a>' +
        '</li>' +
        '<li>' +
        '<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>' +
        '<a href="tel:0319260402" target="_blank">(+571) 9260 402</a>' +
        '</li >' +
        '<li>' +
        '<i class="glyphicon fa fa-whatsapp" aria-hidden="true"></i>' +
        '<a href="https://wa.me/573108567102" target="_blank">(+57) 310 8567102</a>' +
        '</li>' +
       
        '</ul >' +
        '</div >' +
        '<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">' +
        '<h3>formularios de aseguradoras</h3>' +
        '<ul>' +
        '<li class="formularios">' +
        'PERSONA JURÍDICA' +
        '</li>' +
        '<li class="formularios">' +
        'PERSONA NATURAL' +
        '</li>' +
        '<li class="formularios">' +
        '<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>' +
        '<a class="scroll" href="Formulario-Persona-Juridica-LIBERTADOR.pdf" target="_blank">Libertador</a>' +
        '</li>' +
        '<li class="formularios">' +
        '<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>' +
        '<a class="scroll" href="Formulario-Persona-Natural-LIBERTADOR.pdf" target="_blank">Libertador</a>' +
        '</li>' +
        '<li class="formularios">' +
        '<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>' +
        '<a class="scroll" href="JURIDICA PROTECSA.pdf" target="_blank">Protecsa</a>' +
        '</li>' +
        '<li class="formularios">' +
        '<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>' +
        '<a class="scroll" href="PERSONA-NATURAL PROTECSA.pdf" target="_blank">Protecsa</a>' +
        '</li>' +
        '<li class="formularios">' +
        '<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>' +
        '<a class="scroll" href="JURIDICA UNIFIANZA.pdf" target="_blank">Unifianza</a>' +
        '</li>' +
        '<li class="formularios">' +
        '<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>' +
        '<a class="scroll" href="NATURAL UNIFIANZA.pdf"target="_blank">Unifianza</a>' +
        '</li>' +
        '</ul>' +
        '</div>' +
        '<div class="clearfix"> </div>' +
        '</div >' +
        '</div >';
        $(".footer-ppal").html(footer);

   
})
(jQuery);

/*-------------------------
oUIslider
------------------------*/
  /*-------------------------
oUIslider
------------------------*/
    var slider = document.getElementById('slider');

    noUiSlider.create(slider, {
        start: [0, 50000000000],
        tooltips: [ true, true ],
        step: 500000,
        connect: true,
        range: {
            'min': 0,
            'max': 5000000000
        },
        format: wNumb({
            decimals: 0,
            thousand: '.',
        })
        
    });
    



    var inputNumber = document.getElementById('input-number');
    var inputNumber1 = document.getElementById('input-number-1');

     slider.noUiSlider.on('update', function( values, handle ) {
    
         var value = values[handle];
    
         if ( handle ) {
             inputNumber.value = value;
         } else {
             inputNumber1.value = value;
         }
     });
    
     slider.inputNumber1.addEventListener('change', function(){
         noUiSlider.set([this.value, null]);
     });
    
     slider.inputNumber.addEventListener('change', function(){
         noUiSlider.set([null, this.value]);
     });

