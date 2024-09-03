<?php

include("conexion.php");

if (isset($_POST['ingreso'])) {
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['descripcion']) >= 1 &&
        strlen($_POST['usuario_id']) >= 1
        ) {
            $nombre = trim($_POST['nombre']);
            $descripcion = trim($_POST['descripcion']);
            $usuario_id = trim($_POST['usuario_id']);
            
            $consulta = "INSERT INTO categorias(nombre_categoria, descripcion, usuario_id)
                VALUES('$nombre', '$descripcion', '$usuario_id')"; 
            $resultado = mysqli_query($conexion, $consulta);
            
            if ($resultado) {
                echo "<h3 class='success'>Tu registro se ha completado</h3>";
            } else {
                echo "<h3 class='error'>Ocurrió un error</h3>";
            }

    } else {
        echo "<h3 class='error'>Llena todos los campos</h3>";
    }
}
?>