<?php

function Conect()
{
   #$echo = mysqli_connect("18.224.227.202","bdcomercial1","Nu3v4B4s3Dato@","blogs");
   $echo = mysqli_connect("localhost","root","","dexcondigital_noticias_inmueble");
    return $echo;
}

?>
