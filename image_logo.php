<?php

 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('deprixa/database.php');

if ($_GET['id'] > 0)
{
    // Consulta de búsqueda de la imagen.
    $consulta = "SELECT imagen, tipo FROM subir_imagen WHERE id={$_GET['id']}";
    $resultado = @mysql_query($consulta);
    $datos = mysql_fetch_assoc($resultado);

    $imagen = $datos['imagen']; // Datos binarios de la imagen.
    $tipo = $datos['tipo'];  // Mime Type de la imagen.
    // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
    header("Content-type: $tipo");
    // A continuación enviamos el contenido binario de la imagen.
    echo $imagen;
}
?>