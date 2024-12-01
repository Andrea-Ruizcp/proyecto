<?php

include("../conexion/conexion.php");

include("../include/header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapped</title>
    <link rel="stylesheet" href="/CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="/image/logo.png" type="image/x-icon">
</head>
<body>

<div class="content">
        <div class="contenedor bg-white p-5 text-secondary">
            <div class="text-center fs-2 fw-light">Registrarse</div>
            <div class="d-flex gap-1 justify-content-center mt-4">
                <div>¿Ya tienes una cuenta?</div>
                <a href="http://localhost/Ecommerce/partes/login.php" class="text-decoration-none fw-semibold" style="color: #ffdc41;">Inicia sesión</a>
            </div>
            <div class="input-group mt-4">
                <input class="form-control bg-white" type="text" placeholder="Nombre completo" />
            </div>
            <div class="input-group mt-3">
                <input class="form-control bg-white" type="email" placeholder="Correo electrónico" />
            </div>
            <div class="input-group mt-3">
                <input class="form-control bg-white" type="password" placeholder="Contraseña" />
            </div>
            <div class="input-group mt-3">
                <input class="form-control bg-white" type="password" placeholder="Confirmar contraseña" />
            </div>
            <div class="btn text-white w-100 mt-4 fw-semibold shadow-sm" style="background-color: #ffdc41;">
                <a href="http://localhost/Ecommerce/principal/" class="text-decoration-none text-white">Registrarse</a>
            </div>
        </div>
    </div>
  
    <?php include("../include/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>