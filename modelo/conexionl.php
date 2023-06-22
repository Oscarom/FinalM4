<?php

$host = "localhost";    // sera el valor de nuestra BD 
$basededatos = "escuela";    // sera el valor de nuestra BD 
$usuariodb = "oscar";    // sera el valor de nuestra BD 
$clavedb = "123";    // sera el valor de nuestra BD 

//Lista de Tablas
$tabla_db1 = "administradores"; 	   // tabla de usuarios


error_reporting(0); //No me muestra errores

$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


if ($conexion->connect_errno) {
    echo "Nuestro sitio experimenta fallos....";
    exit();
}
?>