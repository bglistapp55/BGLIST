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
        $id = $_GET["nombre_tarea"];
        $sql = "select * from tareas where id= '$id'";
        $result = $conexion->query($sql);
        // Se traen el resultado $row
        $row = $result->fetch_array(MYSQLI_ASSOC); ?>
       
<form action="confirmar_mod_tarea.php" method="post" class="mt-3" id="r_usuarios" >
        <h1 class="text-center">Modificar Tareas</h1>
        <div class="mb-3 mt-3 p-1">
          <label for="nom" class="form-label">Nombre_tarea:</label>
          <input type="text" class="form-control" id="nm" placeholder="Nombre de la tarea" value="<?php echo $row["nombre_tarea"];?>" name="nom">
        </div>
        <!-- <div class="mb-3">
          <label for="ident" class="form-label">Identificación:</label>
          <input type="number" class="form-control" id="ident" placeholder="Identificación sin puntos" value="<?php echo $id;?>"name="cedula">
        </div> -->
          <div class="mb-3">
            <label for="des" class="form-label">Descripción:</label>
            <input type="text" class="form-control" id="des" placeholder="ingrese una descripción para la tarea" value="<?php echo $row["descripcion"];?>" name="des">
          </div>
          <div class="mb-3 mt-3 p-1">
            <label for="fecha" class="form-label">fecha_vencimiento:</label>
            <input type="date" class="form-control" id="ti" placeholder="Ingrese su fecha de vencimiento" value="<?php echo $row["fecha_vencimiento"];?>" name="fecha_vencimiento">
          </div>
          <div class="mb-3 mt-3 p-1">
            <label for="prioridad" class="form-label">prioridad:</label>
            <input type="text" class="form-control" id="pr" placeholder="Ingrese su nivel de prioridad" value="<?php echo $row["prioridad"];?>" name="prioridad">
          </div>
          <div class="mb-3 mt-3 p-1">
            <label for="estado" class="form-label">estado:</label>
            <input type="text" class="form-control" id="estado" placeholder="Ingrese el estado de la tarea" value="<?php echo $row["estado"];?>" name="estado">
          </div>
          <!-- Cuando existen campos de selección se agrega value="Opcion" 
          <?php if ($rows['name'] == 'Opcion') echo 'selected';?>" -->
          <!-- Cuando existen campos de radio button se agrega value= "opc(1)"
            <?php if ($rows['name'] == 'Opc(1)') echo 'checked';?>" -->
        <!-- Modifica el registro -->
        <input type="hidden" id="ident" name="id" value="<?php echo $row["id"]?>">

            <div class="d-grid gap-3">
            <button type="submit" class="btn btn-primary btn-block">Modificar</button> 
          </div>
       
       
      </form>

</body>
</html>