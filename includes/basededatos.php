<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "stock_link"; 

// 1. Crear conexión 
$bd = new mysqli($servidor, $usuario, $password, $base_datos);

// 2. Chequear conexión
if ($bd->connect_error) {
    die("Error de conexión: " . $bd->connect_error);
}

// 3. Establecer codificación de caracteres a UTF-8
$bd->set_charset("utf8");
?>