<?php

include("../conexion/conexion.php");

include("../include/header.php");

    $nombre_completo = $_POST["nombre"];
    $cedula = $_POST["cedula"];
    $direccion = $_POST["direccion"];
    $correo_electronico = $_POST["correo"];
    $contrasena = $_POST["contraseña"];

    $consulta = "INSERT INTO usuarios(nombre, cedula, direccion, correo, contraseña)
                VALUES ('$nombre', '$cedula', '$direccion', '$correo', '$contraseña')";
    
    $ejecutar = mysqli_query($conexion, $consulta);
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
<form action="" method="">
<div class="content">
        <div class="contenedores bg-white p-5 text-secondary">
            <div class=" texto text-center fs-2 fw-light">Registrarse</div>
            <div class="d-flex gap-1 justify-content-center mt-4">
                <div>¿Ya tienes una cuenta?</div>
                <a href="http://localhost/comercio/proyecto/navegacion/login.php" class="text-decoration-none fw-semibold" style="color: #ffdc41;">Inicia sesión</a>
            </div>
            <div class="input-group mt-4">
                <input class="form-control bg-white" type="text" placeholder="Nombre completo" name="nombre"/>
            </div>
            <div class="input-group mt-3">
                <input class="form-control bg-white" type="text" placeholder="Cedula" name="cedula"/>
            </div>
            <div class="input-group mt-3">
                <input class="form-control bg-white" type="text" placeholder="Dirección" name="direccion" />
            </div>
            <div class="input-group mt-3">
                <input class="form-control bg-white" type="email" placeholder="Correo electrónico" name="correo"/>
            </div>
            <div class="input-group mt-3">
                <input class="form-control bg-white" type="password" placeholder="Contraseña" name="contraseña"/>
            </div>
           
            <div class="btn text-white w-100 mt-4 fw-semibold shadow-sm" style="background-color: #ffdc41;">
                <a href="http://localhost/comercio/proyecto/principal/" class="text-decoration-none text-white">Registrarse</a>
            </div>
        </div>
    </div>
</form>
  
    <?php include("../include/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>