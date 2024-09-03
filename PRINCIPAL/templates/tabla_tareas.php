<table class="tasks__table">
    <thead class="tasks__thead">
        <tr class="tasks__tr-head">
            <th class="tasks__th">Nombre</th>
            <th class="tasks__th">Descripción</th>
            <th class="tasks__th">Fecha de Vencimiento</th>
            <th class="tasks__th">Prioridad</th>
            <th class="tasks__th">Estado</th>
        </tr>
    </thead>
    <tbody class="tasks__tbody">
        <?php foreach ($tareas as $tarea): ?>
            <tr class="tasks__tr">
                <td class="tasks__td"><?php echo htmlspecialchars($tarea['nombre_tarea']); ?></td>
                <td class="tasks__td"><?php echo htmlspecialchars($tarea['descripcion']); ?></td>
                <td class="tasks__td"><?php echo htmlspecialchars($tarea['fecha_vencimiento']); ?></td>
                <td class="tasks__td"><?php echo htmlspecialchars($tarea['prioridad']); ?></td>
                <td class="tasks__td"><?php echo htmlspecialchars($tarea['estado']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>