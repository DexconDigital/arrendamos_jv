$(document).ready(function() {
    //guarda el id de los departamentos
    var res = new Array();

    //peticion departamentos
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/v2/departamento/",
        type: "GET",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:eoCuupdlOGv2HYwclvy7Fs3rCDQCEFjgLT3z8kt3-98")
            );
        },
        dataType: "html",
        success: function(data) {
            var datos = data.trim();

            if (datos.localeCompare('"Sin resultados"') == 0) {
                res += "No hay Inmuebles destacados";
            } else {
                var informacion = JSON.parse(data);
                for (var i = 0; i < informacion.length; i++) {
                    //peticion ciudades
                    $.ajax({
                        url: "http://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/" + informacion[i].id + "",
                        type: "GET",
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader(
                                "Authorization",
                                "Basic " +
                                btoa("Authorization:eoCuupdlOGv2HYwclvy7Fs3rCDQCEFjgLT3z8kt3-98")
                            );
                        },
                        dataType: "json",
                        success: function(data) {
                            var resultado = '';
                            var informacion = (data);
                            for (var i = 0; i < informacion.length; i++) {
                                resultado += '<option value="' +
                                    informacion[i].id +
                                    '">' +
                                    informacion[i].nombre +
                                    "</option>";
                            }
                            $(".ciudad").append(resultado);
                        }
                    });
                }
            }
        }
    });


    $(".ciudad").change(function() {
        var res_ciudad = $(".ciudad option:selected").val();
        console.log(res_ciudad)
        $.ajax({
            url: "http://www.simi-api.com/ApiSimiweb/response/v2/zonas/idCiudad/" +
                res_ciudad +
                "",
            type: "GET",
            beforeSend: function(xhr) {
                xhr.setRequestHeader(
                    "Authorization",
                    "Basic " +
                    btoa("Authorization:eoCuupdlOGv2HYwclvy7Fs3rCDQCEFjgLT3z8kt3-98")
                );
            },
            dataType: "json",
            success: function(data) {
                var resultado = '<option class="bs-title-option"  value="0">Zona</option>';
                var informacion = data;
                console.log("http://www.simi-api.com/ApiSimiweb/response/v2/zonas/idCiudad/" +res_ciudad +"")
                for (var i = 0; i < informacion.length; i++) {
                    resultado += '<option value="' + informacion[i].id + '">' +
                        informacion[i].nombre +
                        "</option>";
                }

                $(".zona").append("");
                $(".zona").html(resultado);
            }
        });
    });
    
    //get list of barrios
    


    //get list of properties
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/tipoInmuebles/",
        type: "GET",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:eoCuupdlOGv2HYwclvy7Fs3rCDQCEFjgLT3z8kt3-98")
            );
        },
        dataType: "json",
        success: function(data) {
            var resultado = '<option class="bs-title-option" value="0">Tipo de Inmueble</option>';
            var informacion = (data);
            for (var i = 0; i < informacion.length; i++) {
                resultado +=
                    '<option value="' +
                    informacion[i].idTipoInm + '">' +
                    informacion[i].Nombre +
                    "</option>";
            }
            $(".inmueble").html(resultado);
        }
    });

    //get list of the transactions
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/gestion/",
        type: "GET",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:eoCuupdlOGv2HYwclvy7Fs3rCDQCEFjgLT3z8kt3-98")
            );
        },
        dataType: "json",
        success: function(data) {
            var resultado = '<option class="bs-title-option" value="0">Operación</option>';
            for (var i = 0; i < data.length; i++) {
                resultado += '<option value="' +
                    data[i].idGestion + '">' +
                    data[i].Nombre +
                    "</option>";
            }
            $(".operacion").html(resultado);
            $('.selectpicker').selectpicker('refresh');
        }
    });
    
        $(".operacion").change(function() {
        var operacion = $(".operacion option:selected").val();
        if(operacion == 1){
            $('#field').html("$"+0);
            $('#fieldF').html("$"+15000000);
        slider.noUiSlider.updateOptions({
            start: [300000, 15000000],
            step:300000,
            range: {
                 'min': 0,
                'max': 15000000
            }
        });
        }else if(operacion == 5){
            $('#field').html("$"+0);
            $('#fieldF').html("$"+5000000000);
        slider.noUiSlider.updateOptions({
            start: [100000000, 5000000000],
            step: 100000000,
            range: {
                'min': 100000000,
                'max': 5000000000
            }
        });
        }else if(operacion == 2){
            $('#field').html("$"+0);
            $('#fieldF').html("$"+5000000000);
        slider.noUiSlider.updateOptions({
            start: [300000, 5000000000],
            step: 300000,
            range: {
                'min': 300000,
                'max': 5000000000
            }
        });
        }
    });
    
    
    var cuidad, inmueble, operacion, zona;

    $(".search-1").click(function() {
        zona = $(".zona option:selected").val();
        inmueble = $(".inmueble option:selected").val();
        ciudad = $(".ciudad option:selected").val();
        operacion = $(".operacion option:selected").val();
        var code = $(".codeInm").val();
        var precio, precio1;
        //price
        slider.noUiSlider.on('update', function (values) {
            precio = (values[0]);
            precio1 = (values[1]);
        });
         if(precio == 5000000000 && precio1 == 25000000000 || precio == 10000000 && precio1 == 20000000 || precio == 0 && precio1 == 25000000000){
            precio = 0;
            precio1 = 0;
        }
       
        if(code !==""){
            window.location.href = 'detalle-inmueble.php?dt=98-'+code + '';
        }else{
            window.location.href = 'inmuebles.php?gs=' + operacion + '&&ti=' + inmueble + '&&ci=' + ciudad + '&&zo=' + zona +'&&pre=' + precio + '&&pre1=' + precio1 + '';
        } 

    });
        

   
});