function paginator(actual) {

    let position = 0;
    if (position != 0) {
        position = localStorage.getItem("total");
    }
    var count = localStorage.getItem("count");

    if (actual == 'ant') {
        count--;
        localStorage.setItem("count", count);
        imprimir(count);
    }
    if (actual == 'sig') {
        count++;
        localStorage.setItem("count", count);
        imprimir(count);
    }

}

function imprimir(count) {
    localStorage.setItem("count", count);
    if (localStorage.getItem("gestion") == 0 && localStorage.getItem("ciudad") == 0 && localStorage.getItem("tipo") == 0 && localStorage.getItem("zona") == 0 && localStorage.getItem("precio") == 0 && localStorage.getItem("precio1") == 5000000000) {
        $.ajax({
            url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total/12/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:eoCuupdlOGv2HYwclvy7Fs3rCDQCEFjgLT3z8kt3-98'));
            },
            'dataType': "json",
            success: function (data) {

                if (data == "Sin resultados") {
                    res += '<div class="alert alert-danger"><h4>No hay Inmuebles </h4></div>';
                    $("#inmb").append(res);
                    return;

                } else {


                    localStorage.setItem("total", data.datosGrales.fin - 1);

                    var res = " ";
                    for (var pos = 0; pos < data.Inmuebles.length; pos++) {
                        res += '<div class="col-md-4 news-grid">';
                        if (data.Inmuebles[pos].foto1 != "") {
                            res += '<img src="' + data.Inmuebles[pos].foto1 + '"  alt="" style="width:100%;" >';
                        } else {
                            res += '<img src="images/no_image.png" alt="" style="height:300px">';
                        }
                        res += '<div class="news-grid-info">' +
                            '<h5>' +
                            '<span>' + data.Inmuebles[pos].Barrio + '</span> </h5>' +
                            '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">';
                        if (data.Inmuebles[pos].Gestion == "Arriendo") {

                            res += '<h4>$' + data.Inmuebles[pos].Canon + '</h4>';
                        } else if (data.Inmuebles[pos].Gestion == "Arriendo/Venta") {

                            res += '<h4>$' + data.Inmuebles[pos].Venta + '"<br>"' + data[i].Canon + '</h4>';
                        } else {
                            res += '<h4>$' + data.Inmuebles[pos].Venta + '</h4>';
                        }
                        res += '</a>' +
                            '<div class="buttton ver-mas">' +
                            '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" style="color: #fff;"> Ver más' +
                            '</a>' +
                            '</div>' +
                            '<ul style="list-style:  none;display: -webkit-box;">' +
                            '<li>' +
                            '<span class="span-inmueble" style="color: white;">Código: </span>' +
                            '<span class="span-inmueble" style="color: white;">' + data.Inmuebles[pos].Codigo_Inmueble + '</span>' +
                            '</li>' +
                            '<li style="margin-left: 30px;">' +
                            '<span class="span-inmueble" style="color: white;">' + data.Inmuebles[pos].Tipo_Inmueble + '</span>' +
                            '</li>' +
                            '<li style="margin-left: 22px;">' +
                            '<span class="span-inmueble" style="color: white;">' + data.Inmuebles[pos].Gestion + '</span>' +
                            '</li>' +
                            '</ul>' +
                            '<div class="article-links">' +
                            '<ul>' +
                            '<li>' +
                            '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">' +
                            '<i class="fa fa-bath"> Baños:  </i>'+
                            '<span class="span-inmueble">' + data.Inmuebles[pos].banios + '</span>' +
                            '</a>' +
                            '</li>' +
                            '<li>' +
                            '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">' +
                            '<i class="fa fa-bed"> Alcobas: </i>' +
                            '<span class="span-inmueble">' + data.Inmuebles[pos].Alcobas + '</span>' +
                            '</a>' +
                            '</li>' +
                            ' <li>' +
                            '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">' +
                            ' <i class="fa fa-compress">Área</i>' +
                            ' <span class="span-inmueble">' + data.Inmuebles[pos].AreaConstruida + 'mts<sup>2</sup>' + '</span>' +
                            '</a>' +
                            '</li>' +
                            '<li>' +
                                '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">' +
                                '<i class="fas fa-user-tie"> Admin: </i>' +
                                '<span class="span-inmueble"> $8' + data.Inmuebles[pos].Administracion + '</span>' +
                                '</a>' +
                                '</li>' +
                            '</ul>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    }

                    $(".pagina").html("Página " + data.datosGrales.pagina_actual + " de " + localStorage.getItem("total"))
                }
                $("#inmb").html(res)

            }

        });
        validar()
    } else {

        $.ajax({
            url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total/12/departamento/0/ciudad/' + localStorage.getItem("ciudad") + '/zona/' + localStorage.getItem("zona") + '/barrio/0/tipoInm/' + localStorage.getItem("tipo") + '/tipOper/' + localStorage.getItem("gestion") + '/areamin/0/areamax/0/valmin/' + localStorage.getItem("precio") + '/valmax/' + localStorage.getItem("precio1") + '/campo/0/order/0/banios/0/alcobas/0/garajes/0',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:eoCuupdlOGv2HYwclvy7Fs3rCDQCEFjgLT3z8kt3-98'));
            },
            'dataType': "json",
            success: function (data) {
                console.log(data)
                var res = " ";
                if (data == "Sin resultados") {
                    res += '<div class="alert alert-danger"><h4>No hay Inmuebles </h4></div>';
                    $("#inmb").append(res);
                    return;

                } else {


                    localStorage.setItem("total", data.datosGrales.fin);

                    for (var pos = 0; pos < (data.Inmuebles.length); pos++) {
                        if (data.Inmuebles[pos].Codigo_Inmueble != undefined) {
                            res += '<div class="col-md-4 news-grid">';
                            if (data.Inmuebles[pos].foto1 != "") {
                                res += '<img src="' + data.Inmuebles[pos].foto1 + '"  alt="" style="width:100%;" >';
                            } else {
                                res += '<img src="images/no_image.png" alt="" style="height:300px">';
                            }
                            res += '<div class="news-grid-info">' +
                                '<h5>' +
                                '<span>' + data.Inmuebles[pos].Barrio + '</span> </h5>' +
                                '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">';
                            if (data.Inmuebles[pos].Gestion == "Arriendo") {

                                res += '<h4>$' + data.Inmuebles[pos].Canon + '</h4>';
                            } else if (data.Inmuebles[pos].Gestion == "Arriendo/Venta") {

                                res += '<h4>$' + data.Inmuebles[pos].Venta + '"<br>"' + data[i].Canon + '</h4>';
                            } else {
                                res += '<h4>$' + data.Inmuebles[pos].Venta + '</h4>';
                            }
                            res += '</a>' +
                                '<div class="buttton ver-mas">' +
                                '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" style="color: #fff;"> Ver más' +
                                '</a>' +
                                '</div>' +
                                '<ul style="list-style:  none;display: -webkit-box;">' +
                                '<li>' +
                                '<span class="span-inmueble" style="color: white;">Código: </span>' +
                                '<span class="span-inmueble" style="color: white;">' + data.Inmuebles[pos].Codigo_Inmueble + '</span>' +
                                '</li>' +
                                '<li style="margin-left: 30px;">' +
                                '<span class="span-inmueble" style="color: white;">' + data.Inmuebles[pos].Tipo_Inmueble + '</span>' +
                                '</li>' +
                                '<li style="margin-left: 22px;">' +
                                '<span class="span-inmueble" style="color: white;">' + data.Inmuebles[pos].Gestion + '</span>' +
                                '</li>' +
                                '</ul>' +
                                '<div class="article-links">' +
                                '<ul>' +
                                '<li>' +
                                '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">' +
                                '<i class="fa fa-bath"> Baños:  </i>'+
                                '<span class="span-inmueble">' + data.Inmuebles[pos].banios + '</span>' +
                                '</a>' +
                                '</li>' +
                                '<li>' +
                                '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">' +
                                '<i class="fa fa-bed"> Alcobas: </i>' +
                                '<span class="span-inmueble" >' + data.Inmuebles[pos].Alcobas + '</span>' +
                                '</a>' +
                                '</li>' +
                                ' <li>' +
                                '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">' +
                                ' <i class="fa fa-compress">Área</i>' +
                                ' <span class="span-inmueble">' + data.Inmuebles[pos].AreaConstruida +'mts<sup>2</sup>'+ '</span>' +
                                '</a>' +
                                '</li>' +
                                '<li>' +
                                '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">' +
                                '<i class="fas fa-user-tie">Admin: </i>' +
                                '<span class="span-inmueble"> $8' + data.Inmuebles[pos].Administracion + '</span>' +
                                '</a>' +
                                '</li>' +
                                '</ul>' +
                                '</div>' +
                                '</div>' +
                                '</div>';
                        }
                    }
                    if (localStorage.getItem("total") == 0) {
                        $(".pagina").html("Página " + data.datosGrales.pagina_actual + " de 1")
                    } else {
                        $(".pagina").html("Página " + data.datosGrales.pagina_actual + " de " + localStorage.getItem("total"))
                    }
                }
                $("#inmb").html(res)

            }

        });
        validar()
    }
}

function validar() {
    if (localStorage.getItem("total") == localStorage.getItem("count")) {
        $("#siguiente").css("display", "none");
    } else {
        $("#siguiente").css("display", "inline-flex");
    }

    if (localStorage.getItem("count") == 1) {
        $("#anterior").css("display", "none");
    } else {
        $("#anterior").css("display", "inline-flex");
    }
}


