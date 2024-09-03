<?php
session_start();
require_once 'conexion.php'; // Asegúrate de que la ruta sea correcta

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    echo "<p class='tasks__empty-message'>Por favor, inicie sesión.</p>";
    exit;
}

$usuario_id = $_SESSION['usuario_id'];
$nombre_tarea = isset($_GET['nombre']) ? $_GET['nombre'] : ''; // Asegúrate de manejar el caso en que 'nombre' no esté definido

$sql = "SELECT T.id, T.nombre_tarea, T.descripcion, T.fecha_vencimiento, T.prioridad, T.estado
        FROM Tareas T
        WHERE T.usuario_id = ? AND T.nombre_tarea LIKE ?";
$stmt = $conexion->prepare($sql);
$like_nombre = "%$nombre_tarea%";
$stmt->bind_param("ss", $usuario_id, $like_nombre);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    echo "<table class='tasks__table'>
            <thead class='tasks__thead'>
                <tr class='tasks__tr'>
                    <th class='tasks__th'>Nombre</th>
                    <th class='tasks__th'>Descripción</th>
                    <th class='tasks__th'>Fecha de Vencimiento</th>
                    <th class='tasks__th'>Prioridad</th>
                    <th class='tasks__th'>Estado</th>
                </tr>
            </thead>
            <tbody class='tasks__tbody'>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr class='tasks__tr'>
                <td class='tasks__td'>" . htmlspecialchars($fila['nombre_tarea']) . "</td>
                <td class='tasks__td'>" . htmlspecialchars($fila['descripcion']) . "</td>
                <td class='tasks__td'>" . htmlspecialchars($fila['fecha_vencimiento']) . "</td>
                <td class='tasks__td'>" . htmlspecialchars($fila['prioridad']) . "</td>
                <td class='tasks__td'>" . htmlspecialchars($fila['estado']) . "</td>
            </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p class='tasks__empty-message'>No se encontraron tareas con el nombre especificado.</p>";
}
?>