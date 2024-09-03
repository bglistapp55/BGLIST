<?php

include("conexion.php");

if (isset($_POST['ingreso'])) {
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['contraseña']) >= 1 &&
        strlen($_POST['confirmar_contraseña']) >= 1 &&
        strlen($_POST['cedula']) >= 1 &&
        strlen($_POST['email']) >= 1
    ) {
        $nombre = trim($_POST['nombre']);
        $contraseña = trim($_POST['contraseña']);
        $confirmar_contraseña = trim($_POST['confirmar_contraseña']);
        $cedula = trim($_POST['cedula']);
        $email = trim($_POST['email']);

        // Verificar si las contraseñas coinciden
        if ($contraseña !== $confirmar_contraseña) {
            ?>
            <h3 class="error">Las contraseñas no coinciden.</h3>
            <?php
        } else {
            // Verificar si el nombre de usuario ya existe
            $consulta_verificar = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre'";
            $resultado_verificar = mysqli_query($conexion, $consulta_verificar);

            if (mysqli_num_rows($resultado_verificar) > 0) {
                // Si ya existe un usuario con el mismo nombre
                ?>
                <h3 class="error">El nombre de usuario ya existe. Por favor, elige otro.</h3>
                <?php
            } else {
                // Insertar el nuevo usuario
                $consulta = "INSERT INTO usuarios(cedula, nombre_usuario, contraseña, email) 
                    VALUES('$cedula', '$nombre', '$contraseña', '$email')";
                $resultado = mysqli_query($conexion, $consulta);
                if ($resultado) {
                    ?>
                    <h3 class="success">Tu registro se ha completado.</h3>
                    <?php
                } else {
                    ?>
                    <h3 class="error">Ocurrió un error.</h3>
                    <?php
                }
            }
        }
    } else {
        ?>
        <h3 class="error">Llena todos los campos.</h3>
        <?php
    }
}
?>