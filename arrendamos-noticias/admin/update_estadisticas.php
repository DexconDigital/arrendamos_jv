<?php
require_once ( 'conexion.php' );

function saltoLinea( $str ) {

    return str_replace( array( "\r\n", "\r", "\n" ), "<br />", $str );

}

$id = 1;
$clientes = $_REQUEST["clientes"];
$venta = $_REQUEST["venta"];
$arriendo = $_REQUEST["arriendo"];
$experiencia = $_REQUEST["experiencia"];

$con1 = Conect();
$qry1 = "SELECT * FROM estadisticas where id ='$id'";
$result = $con1->prepare( $qry1 );
$result->execute();
$res = $result->fetch();

$con = Conect();
$qry = ( "update estadisticas set clientes='$clientes', p_venta='$venta', p_arriendo='$arriendo',experiencia='$experiencia' where id='$id '" );
$result2 = $con->prepare( $qry );
$result2->execute();
if ( !$result2 ) {
    echo 'No se logro actualizar';
} else {
    header( "Location: estadisticas.php" );
}

?>