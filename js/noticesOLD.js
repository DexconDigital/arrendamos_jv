$.ajax({
    url: 'js/noticesJSON.php',
    dataType: "json",
    success: function (data) {
        var result = "";
        var j = 0;
        for (var indice in data) {
            result += '<div class=" col-md-4 news-grid">' +
                '<a href="detalle-noticia.php?codigo=' + data[j].id + '"  class="" title="">' +
                '<img src="http://biinyu.com.co/Arrendamos-JV/arrendamos-noticias/admin/' + data[j].imagen + '" alt="' + data[j].descripcion + '"  class="img-responsive" />' +
                '<div class="news-grid-info">'+
                '<h4>' +
                '<span>' + data[j].titulo + '</span></h4>' +
                '<div class="buttton ver-mas"><a href="detalle-noticia.php?codigo=' + data[j].id + '">Ver más</a></div>' +
                '</div>' +
                '</a>' +
                '</div>' +
                '</div>';
            j++;
            if (j > 3) {
                break;
            }
        }


        $("#ulti-noticias").append(result);


    },
    error: function (data) {
    }
});
$.ajax({
    url: 'js/noticesJSON.php',
    dataType: "json",
    success: function (data) {
        var result = "";
        for (var j in data) {
            result += '<div class="blog-each-item">' +
                '<div class="row">' +
                '<article class="post-item">' +
                '<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">' +
                '<div class="shadow-bottom-items">' +
                '<div class="post-media">' +
                '<img src="http://biinyu.com.co/Arrendamos-JV/arrendamos-noticias/admin/' + data[j].imagen + '" alt="' + data[j].descripcion + '" alt="Featured">' +
                '</div>' +
                '</div>' +
                '</div>	' +
                '<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">' +
                '<div class="post-inner">' +
                '<div class="post-content">' +
                '<div class="post-title">' +
                '<h5>' +
                '<a href="detalle-noticia.php?codigo=' + data[j].id + '" >' + data[j].titulo + '</a>' +
                '</h5>' +
                '</div>' +
                '<div class="post-entry">' +
                '<p>' + data[j].descripcion + '</p>' +
                '</div>' +
                '<div class="post-about">' +
                '<a href="detalle-noticia.php?codigo=' + data[j].id + '" class="post-btn">Ver más</a>' +
                '</div>' +
                '</div>' +
                '</div> ' +
                '</div> ' +
                '</article>' +
                '</div>' +
                '</div> ';

        }
        $("#notices-info").append(result);


    },
    error: function (data) {
    }
});



