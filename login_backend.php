<?php
// Iniciar sesión y conexión a la base de datos
session_start();
include("includes/basededatos.php"); 


// **** LOGIN ****
$error_login = "";

// Verificamos si el formulario se ha enviado por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recogemos los datos del formulario 
    $usuario_recibido = mysqli_real_escape_string($bd, $_POST['usuario']); //funcion de seguridad para evitar inyecciones SQL 
    $password_recibido = $_POST['password'];

    //  Buscamos el usuario en la base de datos mediante consulta
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario_recibido'";
    $resultado = $bd->query($query);

    // 3. Comprobamos si existe el usuario
    if ($resultado->num_rows == 1) {
        $fila = $resultado->fetch_assoc();

    // Validacion segura de la contraseña
    if (password_verify($password_recibido, $fila['password'])) {

    // ¡LOGIN CORRECTO!
            $_SESSION['usuario'] = $fila['usuario'];
            $_SESSION['rol'] = $fila['rol'];

            // Recargamos la página hacia el index
            header("Location: index.php"); 
            exit();

        } else {
            // Contraseña mal
            echo "<script>alert('Contraseña incorrecta'); window.location='login.php';</script>";
        }
    } else {
        // Usuario no existe
        echo "<script>alert('El usuario no existe'); window.location='login.php';</script>";
    }
} else {
    // Si intentan entrar sin enviar formulario
    header("Location: login.php");
}
?>