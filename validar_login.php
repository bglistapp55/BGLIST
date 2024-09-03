<?php
session_start();
include_once("conexion.php");

$nombre_usuario = $_POST['nombre_usuario'];
$contraseña = $_POST['contraseña'];

// Consulta SQL para obtener el usuario
$sql = "SELECT * FROM Usuarios WHERE nombre_usuario = ? AND contraseña = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ss", $nombre_usuario, $contraseña);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Obtener el rol del usuario
    $rol = $user['rol'];

    // Iniciar sesión según el rol
    if ($rol == 'usuario') {
        $_SESSION['usuario_id'] = $user['cedula'];
        $_SESSION['nombre_usuario'] = $user['nombre_usuario'];
        header("Location: PRINCIPAL/inicio.php"); // Redirigir al usuario a su área
        exit();
    } elseif ($rol == 'administrador') {
        $_SESSION['admin_id'] = $user['cedula'];
        $_SESSION['nombre_admin'] = $user['nombre_usuario'];
        header("Location: admin.php"); // Redirigir al administrador a su área
        exit();
    }
} else {
    echo "Nombre de usuario o contraseña incorrectos.";
}

$stmt->close();
$conexion->close();
?>