<?php
session_start();
 
include("../conexion/conexion.php");
 
include("../include/header.php");
 
$error = '';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ? AND password = MD5(?)");
    $stmt->execute([$email, $password]);
    $user = $stmt->fetch();
 
    if ($user) {
        $_SESSION['user'] = $user['nombre'];
        $_SESSION['user_id'] = $user['id'];
       
        header('Location: ../principal/index.php');
        exit();
    } else {
        $error = 'Credenciales incorrectas.';
    }
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapped</title>
    <link rel="stylesheet" href="http://localhost/comercio/proyecto/partescss/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="http://localhost/comercio/proyecto/image/logo.png" type="image/x-icon">
</head>
<body>
<div class="content">
        <div class="contenedores bg-white p-5 text-secondary">
          <div class="texto text-center fs-2 fw-light">Iniciar Sesión</div>
          <div class="d-flex gap-1 justify-content-center mt-4">
            <div>¿Aun no tienes cuenta?</div>
            <a href="http://localhost/comercio/proyecto/navegacion/registro.php" class="text-decoration-none fw-semibold" style="color: #6178ff;">Registrate</a>
          </div>
          <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
          <?php endif; ?>
          <form method="POST" class="mt-4">
              <div class="mb-3">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" required>
              </div>
              <div class="mb-3">
                  <input type="password" class="form-control" id="password" name="password"  placeholder="Contraseña" required>
              </div>
              <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
          </form>
        </div>
        </div>
 
    <?php include("../include/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
 