<?php
session_start();
 
if (!isset($_SESSION['user'])) {
    header('Location: ../navegacion/login.php');
    exit();
}
include("../conexion/conexion.php");
 
include("../include/header.php");
 
$consulta = "SELECT * FROM `productos` WHERE categoria = 'news'";
 
$orden = (isset($_GET['orden'])) ? $_GET['orden'] : 'id';
 
switch ($orden) {
    case 'az':
        $consulta = "SELECT * FROM `productos` WHERE categoria = 'news' ORDER BY nombre ASC";
        break;
    case 'za':
        $consulta = "SELECT * FROM `productos` WHERE categoria = 'news' ORDER BY nombre DESC";
        break;
    case 'menor':
        $consulta = "SELECT * FROM `productos` WHERE categoria = 'news' ORDER BY precio ASC";
        break;
    case 'mayor':
        $consulta = "SELECT * FROM `productos` WHERE categoria = 'news' ORDER BY precio DESC";
        break;
    default:
        $consulta = "SELECT * FROM `productos` WHERE categoria = 'news' ORDER BY id ASC";
        break;
}
 
$resultado = $pdo->query($consulta);
?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapped</title>
    <link rel="stylesheet" href="http://localhost/comercio/proyecto/partescss/news.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="http://localhost/comercio/proyecto/image/logo.png" type="image/x-icon">
</head>
<body>
 
<!--Barra-->
<div class="container mt-5">
            <div class="d-flex justify-content-between align-items-center">
            <h2 class="texto mb-0">News</h2>
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Ordenar por
                </button>
                <ul class="dropdown-menu dropdown-menu-end mt-3" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Más recientes primero</a></li>
                    <li><a class="dropdown-item" href="#">A - Z</a></li>
                    <li><a class="dropdown-item" href="#">Z - A</a></li>
                    <li><a class="dropdown-item" href="#">Precio de menor a mayor</a></li>
                    <li><a class="dropdown-item" href="#">Precio de mayor a menor</a></li>
                </ul>
            </div>
            </div>
        </div>
        <!--Productos-->
        <main class="products container" id="lista-1">
        <div class="product-content">
            <?php while ($producto = $resultado->fetch()) { ?>
                <div class="product m-3">
                        <img src="../image/<?= $producto['imagen'] ?>" alt="producto">
                        <h3 class="nombre"><?= $producto['nombre'] ?></h3>
                        <p class="precio">$<?= $producto['precio'] ?></p>
                    <div>
                    <a href="../navegacion/vistap.php?id=<?= $producto['id'] ?>" class="btn-2">Comprar ahora</a>
                    </div>
                </div>
            <?php } ?>
        </div>
     </main>
 
    <?php include("../include/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
 