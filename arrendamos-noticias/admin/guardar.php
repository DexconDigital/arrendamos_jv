<?php
require_once 'conexion.php';

$nombre = $_REQUEST["titulo"];
$descripcion = $_REQUEST["descripcion"];
$fecha = $_REQUEST["fecha"];
$noticia = $_POST["noticia"];
$foto = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace( " ", "", $foto );
$destino = "fotos/".$nombre_foto;

$con = Conect();
copy( $ruta, $destino );

$nombre_ar = $_FILES['archivo']['name'];
$tipo = $_FILES['archivo']['type'];
$tamanio = $_FILES['archivo']['size'];
$rutas = $_FILES['archivo']['tmp_name'];
$nombre_archivo = str_replace( " ", "-", $nombre_ar );
$destinos = "archivos/".$nombre_archivo;

$con = Conect();
copy( $rutas, $destinos );

if ( $nombre_ar != "" ) {
    $sql = ( "INSERT INTO `noticias` (`id`, `nombre`, `descripcion`, `imagen`, `archivo`, `noticia`, `fecha`, `id_inmobiliaria2`) VALUES (NULL, '$nombre', '$descripcion', '$destino', '$destinos', '$noticia', '$fecha', '18')" );
    $result = $con->prepare( $sql );
    $result->execute();

    header( "Location: noticias.php" );
} else {
    $sql = ( "INSERT INTO `noticias` (`id`, `nombre`, `descripcion`, `imagen`, `archivo`, `noticia`, `fecha`, `id_inmobiliaria2`) VALUES (NULL, '$nombre', '$descripcion', '$destino', 'null', '$noticia', '$fecha', '18')" );
    $result = $con->prepare( $sql );
    $result->execute();

    header( "Location: noticias.php" );
}
?>
