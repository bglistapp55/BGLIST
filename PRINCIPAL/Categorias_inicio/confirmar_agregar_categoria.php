<?php
include("../conexion.php");

session_start(); // Iniciar la sesión
$usuario_id = $_SESSION['usuario_id']; // Obtener el ID del usuario de la sesión

if (isset($_POST['ingreso'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['descripcion']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $descripcion = trim($_POST['descripcion']);
        
        // Asegúrate de incluir el ID del usuario en la consulta
        $consulta = "INSERT INTO categorias(nombre_categoria, descripcion, usuario_id)
                     VALUES('$nombre', '$descripcion', '$usuario_id')"; 
        
        $resultado = mysqli_query($conexion, $consulta);
        
        if ($resultado) {
            echo '<h3 class="success">Tu registro se ha completado</h3>';
        } else {
            echo '<h3 class="error">Ocurrió un error</h3>';
        }
    } else {
        echo '<h3 class="error">Llena todos los campos</h3>';
    }
}
?>