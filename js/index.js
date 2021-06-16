setTimeout(function() {
    $.ajax({
        url: 'http://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/10/limit/1',
        type: 'GET',
        cache: true,
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:eoCuupdlOGv2HYwclvy7Fs3rCDQCEFjgLT3z8kt3-98'));
        },
        'dataType': "json",
        success: function(data) {
            
            var res = "";
            if (data == "Sin resultados") {
                res += '<h1  style="color:red">Inmuebles destacados </h1>';
                $("#propiedades").append(res);
                return;

            } else {
                var j = 0;
                 for (var i = 0; i < data.infoAdd.totalInmuebles; i++) {
                    res += '<div class="col-md-4 news-grid">';
                    if (data[i].foto1 != "") {
                        res += '<img src="' + data[i].foto1 + '"  alt="" style="width:100%; height: 300px;" >';
                    } else {
                        res += '<img src="images/no_image.png" alt="" style="">';
                    }
                    res += '<div class="news-grid-info">'+
                    '<h5>'+
                    '<span>'+data[i].Barrio+'</span> </h5>'+
                    '<a href="detalle-inmueble.php?dt='+data[i].Codigo_Inmueble+'">';
                    if (data[i].Gestion == "Arriendo") {
                        
                    res += '<h4>$'+data[i].Canon+'</h4>';
                    }else if(data[i].Gestion == "Arriendo/Venta"){
                        
                    res += '<h4>$'+data[i].Venta+'"<br>"'+data[i].Canon+'</h4>';
                    }else{
                    res += '<h4>$'+data[i].Venta+'</h4>';
                    }
                    
                    res +='</a>'+
                    '<div class="buttton ver-mas">' +
                    '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" style="color: #fff;"> Ver más' +
                    '</a>' +
                    '</div>' +
                    '<ul style="list-style:  none;display: -webkit-box;">'+
                    '<li>'+
                    '<span class="span-inmueble" style="color: white;">Código: </span>'+
                    '<span class="span-inmueble" style="color: white;">'+data[i].Codigo_Inmueble+'</span>'+
                    '</li>'+
                    '<li style="margin-left: 36px;">'+
                    '<span class="span-inmueble" style="color: white;">'+data[i].Tipo_Inmueble+'</span>'+
                    '</li>'+
                    '<li style="margin-left: 23px;">'+
                    '<span class="span-inmueble" style="color: white;">'+data[i].Gestion+'</span>'+
                    '</li>'+
                    '</ul>'+
                    '<div class="article-links">'+
                    '<ul>'+
                    '<li>'+
                    '<a href="detalle-inmueble.php?dt='+data[i].Codigo_Inmueble+'">'+
                    '<i class="fa fa-bath">Baños:  </i>'+
                    '<span class="span-inmueble">'+data[i].banios+'</span>'+
                    '</a>'+
                    '</li>'+
                    '<li>'+
                    '<a href="detalle-inmueble.php?dt='+data[i].Codigo_Inmueble+'">'+
                    '<i class="fa fa-bed">Alcobas:  </i>'+
                    '<span class="span-inmueble">'+data[i].Alcobas+'</span>'+
                    '</a>'+
                    '</li>'+
                    ' <li>'+
                    '<a href="detalle-inmueble.php?dt='+data[i].Codigo_Inmueble+'">'+
                    '<i class="fa fa-compress">Área:  </i>'+
                    '<span class="span-inmueble">'+data[i].AreaConstruida +'</span>'+
                    '</a>'+
                    '</li>'+
                    ' <li>'+
                    '<a href="detalle-inmueble.php?dt='+data[i].Codigo_Inmueble+'">'+
                    '<i class="fas fa-user-tie">Admin:  </i>'+
                    '<span class="span-inmueble"> $'+data[i].Administracion+'</span>'+
                    '</a>'+
                    '</li>'+
                    '</ul>'+
                    '</div>'+
                    '</div>'+
                    '</div>';

                        
                    j++;
                    if (j > 5) {
                        break;
                    }
                }
            }
            $("#propiedades").append(res);

        }

    });
},500);

                  