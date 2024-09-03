<?php

include("conexion.php");

if (isset($_POST['ingreso'])) {
    if(
        strlen($_POST['contenido']) >= 1
        ) {
            $contenido = trim($_POST['contenido']);
            $consulta = "INSERT INTO notas(contenido)
                VALUES('$contenido')"; 
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