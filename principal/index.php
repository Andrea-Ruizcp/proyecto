<?php
session_start();
 
if (!isset($_SESSION['user_id'])) {
    header('Location: ../navegacion/login.php');
    exit();
}
 
 
include("../conexion/conexion.php");
include("../include/header.php");
?>
 
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapped Shoes</title>
    <link rel="stylesheet" href="path_to_your_stylesheet.css">
    <link rel="shortcut icon" href="http://localhost/comercio/proyecto/image/logo.png" type="image/x-icon">
</head>
<body>
<div class="alert alert-dismissible fade show container text-center mt-3" style="background-color: #d8e3ff;" role="alert">
        <h4>Bienvenido, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h4>
    </div>    
 
    <?php
    include("../partes/carrousel.php");
    include("../partes/blackfriday.php");
    include("../partes/newshoes.php");
    include("../partes/promo.php");
    include("../partes/brands.php");
    ?>
 
</body>
</html>
 
<?php
include("../include/footer.php");
?>
