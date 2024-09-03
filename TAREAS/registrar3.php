<?php

include("conexion.php");

if (isset($_POST['ingreso'])) {
    if(
        strlen($_POST['nombre_tarea']) >= 1 &&
        strlen($_POST['descripcion']) >= 1 &&
        strlen($_POST['fecha_vencimiento']) >= 1 &&
        strlen($_POST['prioridad']) >= 1 &&
        strlen($_POST['estado']) >= 1
        ) {
            $nombre = trim($_POST['nombre_tarea']);
            $descripcion = trim($_POST['descripcion']);
            $fecha_vencimiento = trim($_POST['fecha_vencimiento']);
            $prioridad = trim($_POST['prioridad']);
            $estado = trim($_POST['estado']);
            $consulta = "INSERT INTO tareas(nombre_tarea,descripcion,fecha_vencimiento,prioridad,estado)
                VALUES('$nombre', '$descripcion', '$fecha_vencimiento', '$prioridad', '$estado')"; 
            $resultado = mysqli_query($conexion, $consulta);
            if ($resultado) {
                ?>
                <h3 class="success">tu registro se ha completado</h3>
                <?php
            }   else {
                ?>
                <h3 class="error">ocurrio un error</h3>
                <?php
            }

    } else {
        ?>
            <h3 class="success">llena todos los campos</h3>
        <?php
    }
}
?>