<?php
session_start();
require_once 'conexion.php';

date_default_timezone_set('America/Bogota'); // Configura tu zona horaria

if (!isset($_SESSION['usuario_id'])) {
    echo "<p class='tasks__empty-message'>Por favor, inicie sesión.</p>";
    exit;
}

$usuario_id = $_SESSION['usuario_id'];
$hoy = date('Y-m-d');

$sql = "SELECT id, nombre_tarea, descripcion, fecha_vencimiento, prioridad, estado
        FROM Tareas
        WHERE usuario_id = ? AND DATE(fecha_vencimiento) > ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ss", $usuario_id, $hoy);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $tareas = [];
    while ($fila = $resultado->fetch_assoc()) {
        $tareas[] = $fila;
    }
    include 'templates/tabla_tareas.php';
} else {
    echo "<p class='tasks__empty-message'>No hay tareas próximas.</p>";
}
?>