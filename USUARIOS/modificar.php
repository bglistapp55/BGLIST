<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="/css/estilosIndex.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
        <?php    
             include_once("conexion.php");
             $id = $_POST["cedula"];
             $nombre = $_POST["nom"];
             $contraseña = $_POST["con"];
             $email = $_POST["email"];
             $rol = $_POST["rol"];
        
            if($conexion){
              $sql = "update usuarios set nombre_usuario = '$nombre', cedula = '$id', contraseña = '$contraseña', email = '$email', rol = '$rol' where cedula = '$id'";
              $resultado = mysqli_query($conexion,$sql);
              echo "Registro Modificado";
             
            }
            else{
              echo "Error al Modificar";
            }

            $conexion->close();

        ?>
        <br>
        <a href="consultar_cliente.php" class="btn btn-primary">Regresar</a>
</body>
</html>