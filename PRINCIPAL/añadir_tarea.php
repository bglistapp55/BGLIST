<?php
session_start();
require_once '../conexion.php';

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

$usuario_id = $_SESSION['usuario_id'];

// Obtener los datos del formulario
$taskName = $_POST['taskName'];
$taskDescription = $_POST['taskDescription'];
$taskDueDate = $_POST['taskDueDate'];
$taskPriority = $_POST['taskPriority'];
$taskState = $_POST['taskState'];
$categoryId = $_POST['categoryId'];
$newCategoryName = $_POST['newCategoryName'];

// Agregar nueva categoría si se proporciona
if (!empty($newCategoryName)) {
    // Insertar la nueva categoría en la base de datos
    $sql_add_category = "INSERT INTO Categorias (nombre_categoria, usuario_id) VALUES (?, ?)";
    $stmt_add_category = $conexion->prepare($sql_add_category);
    $stmt_add_category->bind_param('ss', $newCategoryName, $usuario_id);
    $stmt_add_category->execute();
    $newCategoryId = $conexion->insert_id;

    // Usar el nuevo ID de categoría
    $categoryId = $newCategoryId;
}

// Insertar la nueva tarea en la base de datos
$sql_add_task = "INSERT INTO Tareas (nombre_tarea, descripcion, fecha_vencimiento, prioridad, estado, usuario_id, categoria_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt_add_task = $conexion->prepare($sql_add_task);
$stmt_add_task->bind_param('sssssii', $taskName, $taskDescription, $taskDueDate, $taskPriority, $taskState, $usuario_id, $categoryId);
$stmt_add_task->execute();

header("Location: inicio.php"); // Redirigir a la página principal sin mensaje de confirmación
exit;
?>