<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a53887caa8.js' crossorigin='anonymous'></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/consultar_admin.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
</head>
<body>
    
<header class="header">
        <a href="../admin.php" class="header__logo">
            BG LIST ADMIN
        </a>
        <nav class="header__nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="../admin.php" class="nav__link">Inicio</a></li>
                <li class="nav__item"><a href="#sobre" class="nav__link">Sobre nosotros</a></li>
                <li class="nav__item"><a href="cerrar_sesion.php" class="nav__link">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>

    <aside>
        <a href="http://localhost/bg%20list/BG%20LIST%20APP/USUARIOS/Consultar_Cliente.php">Usuarios</a>
        <a href="http://localhost/bg%20list/BG%20LIST%20APP/CATEGORIAS/Consultar_Categoria.php">Categorías</a>
        <a href="http://localhost/bg%20list/BG%20LIST%20APP/TAREAS/Consultar_Tarea.php">Tareas</a>
        <a href="http://localhost/bg%20list/BG%20LIST%20APP/NOTAS/Consultar_Nota.php">Notas</a>
    </aside>

<div class="content">
    <?php
        include_once("conexion.php");
        $where= "";

        // Se verifica si se carga o no la información
        if(!empty($_POST)){//si el formulario se envía vacio
            $valor = $_POST['nom'];
            if(!empty($valor)){
                $where = "Where  nombre_categoria like '%$valor%'";
            }

        }

        // Al agregar la variable $where a la consulta 
        //filtrara si se envía datos desde el formulario de busqueda
        $sql = "select * from categorias $where";
        $resultado = $conexion->query($sql);
        //$resultado = mysqli_query($conexion, $sql);

        //válidar para mostrar los datos 
     ?>
                 
            <h1>Lista de Categorias</h1>
            
            <div class="row" style="float:left">
            <!-- Envía el resultado de la busqueda sobre el mismo Scrip "Consultar_Cliente" con
                $_SERVER['PHP_SELF']; empieza a recorrer el script desde el inicio-->
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" >
                <div class="mb-3 mt-3 p-1">
                    <label for="nom" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nom" name="nom">        
                </div>
                <div class="mb-2 mt-2 p-1">
                    <input type="submit" class="form-control btn btn-info" id="enviar" name="enviar" value="Buscar"> 
                </div>
                
            </form>
            </div>
            
           
            <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre_categoria</th>
                <th>Descripción</th>
                <th>Usuario Id</th>
                <th>Acción</th>
                
            </tr>
            </thead>
            <tbody>
            <?php
            //muestra la información
            if ($resultado->num_rows > 0){
                 while($row = $resultado->fetch_assoc()){//fetc_assoc trae todo lo relacioado
            ?>
            <tr>
                <td><?php echo $row["id"]?></td>
                <td><?php echo $row["nombre_categoria"]?></td>
                <td><?php echo $row["descripcion"]?></td>
                <td><?php echo $row["usuario_id"]?></td>
                <!-- El idCliente como variable se envía con metodo GET, es decir por URL -->
                <td><a href="modificar_categoria.php?nombre_categoria=<?php echo $row["id"]; ?>">
                    <i class='fas fa-edit' style='font-size:36px; color:black'></i></a>
                    <a href="#" data-href="eliminar_categoria.php?nombre_categoria=<?php echo $row["id"]; ?>"
                    data-bs-toggle="modal" data-bs-target="#confirmar-delete">
                    <i class='fas fa-trash-alt' style='font-size:36px; color:red'></i></a></td>
            </tr>
                    
            <?php
                }

             }
             else{
                echo "No existe información en la BD";
             }
            ?>
             
            </tbody>
        </table>
        <button><a href="../CATEGORIAS/registrarse2.php" class="form__link">Agregar</a></p></button>
        <button><a href="../admin.php" class="form__link">Volver</a></p></button>
        <?php
            
        $conexion->close();
?>
   <?php include('modal.php')?>
   </div>
</body>
</html>