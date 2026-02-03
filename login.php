<?php 
session_start();
// Si ya está logueado, lo mandamos al index
if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
// Importamos la base de datos para futuras validaciones
require_once(__DIR__ . "/includes/basededatos.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso - El Gran Campero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/stock-link2/assets/css/styles.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 text-white">

    <div class="container" style="max-width: 400px;">
        
        <div class="text-center mb-4 position-relative">
            <div class="logo-glow"></div>
            <img src="/stock-link/assets/img/logo.png" alt="Logo" class="position-relative img-fluid" style="width: 280px; z-index: 1;">
        </div>

        <div class="text-center mb-4">
            <h1 class="fw-bold h2 mb-1">ACCESO</h1>
            <p class="text-secondary small text-uppercase tracking-wider">Gestión de Stock e Inventario</p>
        </div>

        <form action="login_backend.php" method="POST">
            
            <div class="mb-3">
                <label class="form-label small fw-bold">USUARIO</label>
                <div class="input-group">
                    <input type="text" name="usuario" class="form-control bg-dark text-white border-secondary" placeholder="Usuario" required>
                    
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label small fw-bold">CONTRASEÑA</label>
                <div class="input-group">
                    <input type="password" name="password" class="form-control bg-dark text-white border-secondary" placeholder="••••••••" required>
                   
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold text-uppercase">
                Iniciar Sesión
            </button>
            
            <div class="text-center mt-3">
                <a href="#" class="text-secondary small text-decoration-none">¿Has olvidado tu contraseña?</a>
            </div>
        </form>

        <div class="mt-5 pt-4 text-center border-top border-secondary border-opacity-25">
            <p class="text-accent mb-0 small fw-bold ">STOCK-LINK</p>
            <p class="text-footer" style="font-size: 0.7rem;">MAXDESIGN • PROYECTO FINAL DAW</p>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>

