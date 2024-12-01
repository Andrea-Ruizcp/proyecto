<?php

$conexion = mysqli_connect("localhost", "root", "", "zapped");

if (!$conexion) {
    echo "Error en la conexión";
}
else {
    echo "Conexión exitosa";
}

?>