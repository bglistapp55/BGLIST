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
        include_once("../conexion.php");

        $id = $_GET['nombre_categoria'];
        
        if($conexion){
            $sql = "DELETE FROM categorias WHERE id = '$id'";
            $resultado = mysqli_query($conexion, $sql);
            if ($resultado) {
                header("Location: ../inicio.php");
                exit();
            } else {
                echo "Error al Eliminar";
            }
        } else {
            echo "Error al conectar con la base de datos";
        }

        $conexion->close();
    ?>
</body>
</html>