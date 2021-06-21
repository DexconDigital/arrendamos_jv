<?php
require_once( "conexion.php" );
$id = $_GET["id"];
$con = Conect();

$qry = "DELETE FROM noticias WHERE id ='$id'  ";
$result = $con->prepare( $qry );
$result->execute();

if ( !$result ) {
    echo 'No se logro realizar la peticion';

} else {
    header( "Location: noticias.php" );
}

?>
