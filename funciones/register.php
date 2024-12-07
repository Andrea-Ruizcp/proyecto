<?php
include '../conexion/conexion.php';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
 
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $email, $password);
 
    if ($stmt->execute()) {
        header("Location: ../index.php?success=1");
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>