<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="/css/estilosIndex.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
        <?php    
             include_once("conexion.php");

             $id = $_GET['contenido'];
            
            if($conexion){
              $sql = "delete from notas where id = '$id'";
              $resultado = mysqli_query($conexion,$sql);
              echo "Registro Eliminado";
             
            }
            else{
              echo "Error al Eliminar";
            }

            $conexion->close();

        ?>
        <br>
        <a href="consultar_nota.php" class="btn btn-primary">Regresar</a>
</body>
</html>