<?php
session_start();
 
if (!isset($_SESSION['user_id'])) {
    header('Location: ../navegacion/login.php');
    exit();
}
 
include("../conexion/conexion.php");
include("../include/header.php");
 
if (!isset($_SESSION['user'])) {
    echo "No se ha encontrado el ID del usuario en la sesión.";
    exit();
}
 
$usuario_id = $_SESSION['user_id'];
$consulta_carrito = "SELECT c.id, p.nombre, p.imagen, p.precio, c.cantidad FROM carrito c
                     JOIN productos p ON c.producto_id = p.id
                     WHERE c.usuario_id = :usuario_id";
$resultado_carrito = $pdo->prepare($consulta_carrito);
$resultado_carrito->bindParam(':usuario_id', $usuario_id);
$resultado_carrito->execute();
$productos_carrito = $resultado_carrito->fetchAll();
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapped</title>
    <link rel="stylesheet" href="http://localhost/comercio/proyecto/partescss/carrito.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="http://localhost/comercio/proyecto/image/logo.png" type="image/x-icon">
    <script src="https://www.paypal.com/sdk/js?client-id=ATEMcVWYVVHjtS_fyIVDrrqGoRptE-6zhJYBJd-sl-uRGti4P4Bgh6WFJWHP_0rXy8OAjUa0o1l9z5P2&currency=USD"></script>
</head>
<body>
   
<main>
    <div class="container my-5">
        <div class="row">
            <!-- Productos en el carrito -->
            <div class="col-lg-8">
                <h3 class="mb-4">Tu Carrito</h3>
                <?php foreach ($productos_carrito as $producto): ?>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="http://localhost/comercio/proyecto/image/<?= $producto['imagen'] ?>" class="img-fluid rounded-start" alt="<?= $producto['nombre'] ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0"><?= $producto['nombre'] ?></h5>
                                    </div>
                                    <p class="card-text mt-3"><strong>Precio:</strong> $<?= number_format($producto['precio'], 2) ?></p>
                                    <p class="card-text"><strong>Cantidad:</strong> <?= $producto['cantidad'] ?></p>
                                    <p class="card-text"><strong>Total por producto:</strong> $<?= number_format($producto['precio'] * $producto['cantidad'], 2) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
 
                <!-- Resumen del Pedido -->
                <div class="col-lg-4">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <h5 class="card-title mb-4 text-center text-uppercase fw-bold">Resumen del Pedido</h5>
                            <?php
                            $subtotal = 0;
                            foreach ($productos_carrito as $producto) {
                                $subtotal += $producto['precio'] * $producto['cantidad'];
                            }
                            ?>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Subtotal</span>
                                <span class="fw-bold">$<?= number_format($subtotal, 2) ?></span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Envío</span>
                                <span class="fw-bold">$10.00</span> <!-- Puedes calcular el costo de envío dinámicamente -->
                            </div>
                            <hr class="my-3">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <strong class="text-dark">Total</strong>
                                <strong class="text-success">$<?= number_format($subtotal + 10, 2) ?></strong> <!-- Total con envío -->
                            </div>
 
                            <!-- Botón de PayPal -->
                            <div id="paypal-button-container" class="mt-5"></div>
 
                            <script>
                                paypal.Buttons({
                                    style:{
                                        color: 'blue',
                                        shape: 'pill',
                                        label: 'pay',
                                    },
                                    createOrder: function(data, actions){
                                        return actions.order.create({
                                            purchase_units: [{
                                                amount: {
                                                    value: '<?= $subtotal + 10 ?>' // Total del carrito más envío
                                                }
                                            }]
                                        });
                                    },
                                    onApprove: function(data, actions){
                                        actions.order.capture().then(function(detalles){
                                            alert('Transacción completada por ' + detalles.payer.name.given_name);
                                            window.location.href = "gracias.php";  // Redirigir a una página de agradecimiento
                                        });
                                    },
                                }).render('#paypal-button-container');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
 
    <?php include("../include/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
 