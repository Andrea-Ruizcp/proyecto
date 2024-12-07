<?php
include("../conexion/conexion.php");
 
include("../include/header.php");
 
$error = '';
$success = '';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
 
    if ($password !== $confirm_password) {
        $error = 'Las contraseñas no coinciden.';
    } else {
        // Verificar si el correo ya está registrado
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $existing_user = $stmt->fetch();
 
        if ($existing_user) {
            $error = 'El correo electrónico ya está registrado.';
        } else {
            // Insertar el nuevo usuario en la base de datos
            $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, MD5(?))");
            $stmt->execute([$nombre, $email, $password]);
            $success = 'Registro exitoso. Ahora puedes iniciar sesión.';
        }
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapped - Registro</title>
    <link rel="shortcut icon" href="http://localhost/comercio/proyecto/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/comercio/proyecto/partescss/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
 
<div class="content">
    <div class="contenedores bg-white p-5 text-secondary">
        <div class="texto text-center fs-2 fw-light">Registrarse</div>
        <div class="d-flex gap-1 justify-content-center mt-4">
            <div>¿Ya tienes una cuenta?</div>
            <a href="http://localhost/comercio/proyecto/navegacion/login.php" class="text-decoration-none fw-semibold" style="color: #ffdc41;">Inicia sesión</a>
        </div>
 
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>
        <form method="POST" class="mt-4">
            <div class="mb-3">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email"  placeholder="Correo Electronico" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password"  placeholder="Contraseña" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="confirm_password" name="confirm_password"  placeholder="Confirmar Contraseña" required>
            </div>
            <button type="submit" class="btn btn-warning w-100">Registrar</button>
        </form>
    </div>
</div>
 
<?php include("../include/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>