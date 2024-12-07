<?php
session_start();
 
 
include("../conexion/conexion.php");
include("../include/header.php");
 
 
if (!isset($_SESSION['user'])) {
    header('Location: ../navegacion/login.php');
    exit();
}
 
$consulta = "SELECT * FROM `productos` WHERE id = :id";
$resultado = $pdo->prepare($consulta);
$resultado->bindParam(':id', $_GET['id']);
$resultado->execute();
$producto = $resultado->fetch();
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_id = $_SESSION['user_id'];
    $producto_id = $producto['id'];
    $cantidad = $_POST['cantidad'];
    $insertar_carrito = "INSERT INTO carrito (usuario_id, producto_id, producto_nombre, producto_imagen, producto_precio, cantidad)
                         VALUES (:usuario_id, :producto_id, :producto_nombre, :producto_imagen, :producto_precio, :cantidad)";
   
    $stmt = $pdo->prepare($insertar_carrito);
    $stmt->bindParam(':usuario_id', $usuario_id);
    $stmt->bindParam(':producto_id', $producto_id);
    $stmt->bindParam(':producto_nombre', $producto['nombre']);
    $stmt->bindParam(':producto_imagen', $producto['imagen']);
    $stmt->bindParam(':producto_precio', $producto['precio']);
    $stmt->bindParam(':cantidad', $cantidad);
    $stmt->execute();
 
    echo "<div class='alert alert-success'>Producto agregado al carrito</div>";
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapped Shoes</title>
    <link rel="stylesheet" href="http://localhost/comercio/proyecto/partescss/vista.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="http://localhost/comercio/proyecto/image/logo.png" type="image/x-icon">
</head>
<body>
   
<main>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="http://localhost/comercio/proyecto/image/<?= $producto['imagen'] ?>" class="img-fluid rounded-start" alt="<?= $producto['nombre'] ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $producto['nombre'] ?></h5>
                                    <p class="card-text">Descripción: <?= $producto['descripcion'] ?></p>
                                    <p class="card-text"><strong>Precio:</strong> $<?= number_format($producto['precio'], 2) ?></p>
 
                                    <!-- Formulario para seleccionar cantidad y agregar al carrito -->
                                    <form method="POST">
                                        <div class="mb-3">
                                            <label for="cantidad" class="form-label">Cantidad</label>
                                            <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" value="1" required>
                                        </div>
                                        <button type="submit" class="btn btn-dark text-white">Añadir al carrito</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("../include/footer.php"); ?>
    <script src="http://localhost/comercio/proyecto/script/vista.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
 