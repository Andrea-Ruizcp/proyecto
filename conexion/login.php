<?php

$conexion = mysqli_connect("localhost", "root", "", "zapped");

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña'";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);
    session_start();
    $_SESSION['correo'] = $row['correo'];
    $_SESSION['cedula'] = $row['cedula'];
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['direccion'] = $row['direccion'];
    header("Location: http://localhost/comercio/proyecto/principal/index.php");
} else {
    echo "Correo o contraseña incorrectos";
}
?>