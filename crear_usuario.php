<?php
require_once("includes/basededatos.php");

// **** CREAR USUARIO ****
$usuario_nuevo = "cocina";
$password_nueva = "123";
$rol_nuevo = "admin";

echo"<h1 >CREAR USUARIO</h1>";

// Comprobar si ya existe en la base de datos
$check = "SELECT * FROM usuarios WHERE usuario = '$usuario_nuevo'";
$resultado = $bd->query($check);

if($resultado->num_rows >0){
    echo"<h2 style='color:red'> ERROR!, El usuario '$usuario_nuevo' ya existe.";
}else{
// Hashea la contraseña
$password_seguro =  password_hash($password_nueva, PASSWORD_DEFAULT);

//Insertar en la base de datos
$sql = "INSERT INTO usuarios (usuario, password, rol) VALUES ('$usuario_nuevo', '$password_seguro', '$rol_nuevo')";
if($bd->query($sql)=== TRUE){
echo "<h3 style='color:green'>✅ Usuario creado con éxito</h3>";
        echo "<ul>";
        echo "<li><strong>Nombre de usuario:</strong> $usuario_nuevo</li>";
        echo "<li><strong>Password original:</strong> $password_nueva</li>";
        echo "<li><strong>Password guardada (Hash):</strong> $password_seguro</li>";
        echo "</ul>";
        echo "<p>Ya puedes probar el Login.</p>";
    } else {
        echo "Error en la base de datos: " . $bd->error;
    }
}
?>
