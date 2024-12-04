<?php

include("../conexion/conexion.php");

include("../include/header.php");

$consulta = "SELECT * FROM producto WHERE categoria_idcategoria = '6';";
$resultado = mysqli_query($conexion, $consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids | Zapped Shoes</title>
    <link rel="stylesheet" href="http://localhost/comercio/proyecto/partescss/categorias.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="http://localhost/comercio/proyecto/image/logo.png" type="image/x-icon">
</head>
<body>
    <!--Imagen--> 
    <div class="image container mt-3">
        <img src="http://localhost/comercio/proyecto/image/kids1.png" alt="imagen" class="imagen">
    </div>
  
    <!--Por deporte-->
    <div class="deporte container mt-5">
        <div class="mt-3">
            <h2 class="texto">SHOP BY DEPORTS</h2>
        </div>
        <div class="deporte-content">
            <div class="imagenes-box">
                <img src="http://localhost/comercio/proyecto/image/black.png" alt="imagen">
            </div>
            <div class="imagenes-box">
                <img src="http://localhost/comercio/proyecto/image/black.png" alt="imagen">
            </div>
            <div class="imagenes-box">
                <img src="http://localhost/comercio/proyecto/image/black.png" alt="imagen">
            </div>
            <div class="imagenes-box">
                <img src="http://localhost/comercio/proyecto/image/black.png" alt="imagen">
            </div>
            <div class="imagenes-box">
                <img src="http://localhost/comercio/proyecto/image/black.png" alt="imagen">
            </div>
        </div>
    </div>
        <!--Productos-->
     <main class="products container" id="lista-1">
     <div>
        <h2 class="texto mb-0">NEW FOR CHILDREN</h2>
     </div>
      <div class="product-content mt-3">
        <?php while($producto = mysqli_fetch_array($resultado)) : ?>
            <div class="product">
            <img src= "http://localhost/comercio/proyecto/image/principal/black/<?php echo htmlspecialchars($fila['imagen']); ?> " alt=""> 
                    <h3><?php echo htmlspecialchars($fila['nombre']); ?></h3>
                    <p class="descripcion"><?php echo htmlspecialchars($fila['descripcion']); ?></p>
                    <p class="color">Color:<?php echo htmlspecialchars($fila['color']); ?></p>
                    <p class="precio">$<?php echo htmlspecialchars(number_format($fila['precio'], 0, ',')); ?></p>
                    <div>
                        <a href="#" class="btn-2">Comprar ahora</a>
                    </div>
                </div>
        <?php endwhile; ?>           
      </div>
     </main> 

    <?php include("../include/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>