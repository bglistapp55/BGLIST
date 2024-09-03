<?php
session_start();
require_once 'conexion.php';

if (!isset($_SESSION['usuario_id'])) {
    echo json_encode([]);
    exit;
}

$sql = "SELECT id, nombre_categoria FROM Categorias";
$result = $conexion->query($sql);

$categorias = [];
while ($row = $result->fetch_assoc()) {
    $categorias[] = $row;
}

echo json_encode($categorias);
?>