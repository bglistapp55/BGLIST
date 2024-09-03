<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cliente</title>
    <link rel="stylesheet" href="/css/estilosIndex.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
        
        include_once("conexion.php");
        $id = $_GET["cedula"];
        $sql = "select * from usuarios where cedula= '$id'";
        $result = $conexion->query($sql);
        // Se traen el resultado $row
        $row = $result->fetch_array(MYSQLI_ASSOC); ?>
       
<form action="modificar.php" method="post" class="mt-3" id="r_usuarios" >
        <h1 class="text-center">Modificar usuarios</h1>
        <div class="mb-3 mt-3 p-1">
          <label for="nom" class="form-label">Nombre_usuario:</label>
          <input type="text" class="form-control" id="nm" placeholder="Nombre Completo" value="<?php echo $row["nombre_usuario"];?>" name="nom">
        </div>
        <!-- <div class="mb-3">
          <label for="ident" class="form-label">Identificación:</label>
          <input type="number" class="form-control" id="ident" placeholder="Identificación sin puntos" value="<?php echo $id;?>"name="cedula">
        </div> -->
          <div class="mb-3">
            <label for="con" class="form-label">contraseña:</label>
            <input type="password" class="form-control" id="con" placeholder="" value="<?php echo $row["contraseña"];?>" name="con">
          </div>
          <div class="mb-3 mt-3 p-1">
            <label for="email" class="form-label">email:</label>
            <input type="email" class="form-control" id="em" placeholder="ingrese su correo electronico" value="<?php echo $row["email"];?>" name="email">
          </div>
          <div class="mb-3 mt-3 p-1">
          <label for="rol" class="form-label">Rol:</label>
          <input type="text" class="form-control" id="rol" placeholder="usuario o administrador" value="<?php echo $row["rol"];?>" name="rol">
        </div>
          <!-- Cuando existen campos de selección se agrega value="Opcion" 
          <?php if ($rows['name'] == 'Opcion') echo 'selected';?>" -->
          <!-- Cuando existen campos de radio button se agrega value= "opc(1)"
            <?php if ($rows['name'] == 'Opc(1)') echo 'checked';?>" -->
        <!-- Modifica el registro -->
        <input type="hidden" id="ident" name="cedula" value="<?php echo $row["cedula"]?>">

            <div class="d-grid gap-3">
            <button type="submit" class="btn btn-primary btn-block">Modificar</button> 
          </div>
       
       
      </form>

</body>
</html>