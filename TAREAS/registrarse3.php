<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stiloregistro3.css">
</head>
<body>
    <form class="form" method="POST">
        <h2 class="form__title">Registrar Tarea</h2>
        <div class="form__container">
            <div class="form__group">
                <input type="text" name="nombre_tarea" id="user" class="form__input" placeholder=" ">
                <label for="user" class="form__label">Nombre Tarea:</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" name="descripcion" id="descripcion" class="form__input" placeholder=" ">
                <label for="descripcion" class="form__label">Descripción:</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" class="form__input" placeholder=" ">
                <label for="fecha_vencimiento" class="form__label">Fecha de vencimiento:</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" name="prioridad" id="prioridad" class="form__input" placeholder="alta,media,baja">
                <label for="prioridad" class="form__label">Prioridad:</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" name="estado" id="estado" class="form__input" placeholder="pendiente,en progreso,completada">
                <label for="estado" class="form__label">Estado de la tarea:</label>
                <span class="form__line"></span>
            </div>
            <input type="submit" name="ingreso" class="form__submit" value="Ingresar">
            <a href="../admin.php" class="form__link">volver</a></p>
        </div>
    </form>

    <?php
        include("registrar3.php")
    ?>

</body>
</html>