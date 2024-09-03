<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src='https://kit.fontawesome.com/a53887caa8.js' crossorigin='anonymous'></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../CSS/consultar_admin.css">
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

            if(!empty($_POST)){
                $valor = $_POST['nom'];
                if(!empty($valor)){
                    $where = "Where nombre_usuario like '%$valor%'";
                }
            }

            $sql = "select * from usuarios $where";
            $resultado = $conexion->query($sql);

            if ($resultado->num_rows > 0){
        ?>
                 
        <h1>Lista de Usuarios</h1>
        <div class="row" style="float:left">
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
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
                    <th>Cédula</th>
                    <th>Nombre_usuario</th>
                    <th>Contraseña</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($row = $resultado->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row["cedula"]?></td>
                    <td><?php echo $row["nombre_usuario"]?></td>
                    <td><?php echo $row["contraseña"]?></td>
                    <td><?php echo $row["email"]?></td>
                    <td><?php echo $row["rol"]?></td>
                    <td>
                        <a href="modificar_cliente.php?cedula=<?php echo $row["cedula"]; ?>">
                            <i class='fas fa-edit' style='font-size:36px; color:black'></i>
                        </a>
                        <a href="#" data-href="eliminar.php?cedula=<?php echo $row["cedula"]; ?>" data-bs-toggle="modal" data-bs-target="#confirmar-delete">
                            <i class='fas fa-trash-alt' style='font-size:36px; color:red'></i>
                        </a>
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        <button><a href="../USUARIOS/registrar_usuarios.php" class="form__link">Agregar</a></button>
        <button><a href="../admin.php" class="form__link">Volver</a></button>
        <?php
            } else {
                echo "No existe información en la BD";
            }
            $conexion->close();
        ?>
        <?php include('modal.php')?>
    </div>
</body>
</html>