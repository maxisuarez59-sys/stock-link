<?php
// **** CERRAR SESIÓN ****
session_start(); 

// Vaciamos la sesión
$_SESSION = []; 

// Destruimos la sesión
session_destroy();

// Recargamos la página (te manda al login)
header("Location: login.php");
exit();
?>