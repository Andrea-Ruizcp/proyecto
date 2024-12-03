<?php

include("../conexion/conexion.php");

$correo = $_POST['correo'];
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$contraseña = $_POST['contraseña'];
$confirm_contraseña = $_POST['confirm_contraseña'];

if ($contraseña === $confirm_contraseña) {
    $sql = "INSERT INTO usuarios (correo, cedula, nombre, direccion, contraseña) VALUES ('$correo', '$cedula', '$nombre', '$direccion', '$contraseña')";
    if (mysqli_query($conexion, $sql)) {
        header("Location: http://localhost/comercio/proyecto/navegacion/login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
} else {
    echo "Las contraseñas no coinciden";
}

?>