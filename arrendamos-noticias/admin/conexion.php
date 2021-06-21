<?php

function Conect() {
    # code...
    //$echo = mysqli_connect( "172.31.25.36", "desarrollo", "(7j*#hvc8478jh@8h_7t", "blogs" );
    //return $echo;
    try {
        $echo2 = new PDO( 'mysql:host=localhost;dbname=dexcondigital_noticias_inmueble', 'root', '' );
        $echo2->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $echo2;

    } catch ( Exception $e ) {

        die( 'Error:' . $e->getMessage() );
    }
}

?>
