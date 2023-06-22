<?php

$host = "localhost";    // sera el valor de nuestra BD 
$basededatos = "escuela";    // sera el valor de nuestra BD 
$usuariodb = "oscar";    // sera el valor de nuestra BD 
$clavedb = "123";    // sera el valor de nuestra BD 

try {
    $conexion = new PDO("mysql:host=$host;dbname=$basededatos",$usuariodb,$clavedb);
} catch (Exception $e) {
  echo $e->getMessage();
}
?>