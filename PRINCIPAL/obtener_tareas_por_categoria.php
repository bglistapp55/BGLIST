<?php
require_once '../conexion.php';

$category_id = isset($_GET['categoria_id']) ? intval($_GET['categoria_id']) : 0;

$sql = "SELECT T.id, T.nombre_tarea, T.descripcion, T.fecha_vencimiento, T.prioridad, T.estado
        FROM Tareas T
        WHERE T.categoria_id = ?";
$stmt = $conexion->prepare($sql);

if ($stmt === false) {
    die('Error al preparar la consulta: ' . $conexion->error);
}

$stmt->bind_param("i", $category_id);
$stmt->execute();
$resultado = $stmt->get_result();

// Verificar si hay resultados
$tareas = [];
if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $tareas[] = $fila;
    }
}

if (empty($tareas)) {
    echo '<p>No hay tareas disponibles para esta categoría.</p>';
} else {
    echo '<table class="tasks__table">
            <thead class="tasks__thead">
                <tr class="tasks__tr-head">
                    <th class="tasks__th">Nombre</th>
                    <th class="tasks__th">Descripción</th>
                    <th class="tasks__th">Fecha de Vencimiento</th>
                    <th class="tasks__th">Prioridad</th>
                    <th class="tasks__th">Estado</th>
                </tr>
            </thead>
            <tbody class="tasks__tbody">';
    foreach ($tareas as $tarea) {
        echo '<tr class="tasks__tr">
                <td class="tasks__td">' . htmlspecialchars($tarea['nombre_tarea']) . '</td>
                <td class="tasks__td">' . htmlspecialchars($tarea['descripcion']) . '</td>
                <td class="tasks__td">' . htmlspecialchars($tarea['fecha_vencimiento']) . '</td>
                <td class="tasks__td">' . htmlspecialchars($tarea['prioridad']) . '</td>
                <td class="tasks__td">' . htmlspecialchars($tarea['estado']) . '</td>
              </tr>';
    }
    echo '</tbody></table>';
}
?>