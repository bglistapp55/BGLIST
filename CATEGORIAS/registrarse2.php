<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stiloregistro2.css">
</head>
<body>
    <form class="form" method="POST">
        <h2 class="form__title">Registrar Categoria</h2>
        <div class="form__container">
            <div class="form__group">
                <input type="text" name="nombre" id="user" class="form__input" placeholder=" ">
                <label for="user" class="form__label">Nombre Categoria:</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" name="descripcion" id="descripcion" class="form__input" placeholder=" ">
                <label for="descripcion" class="form__label">Descripción:</label>
                <span class="form__line"></span>
            </div>
            <input type="submit" name="ingreso" class="form__submit" value="Ingresar">
            <a href="../admin.php" class="form__link">volver</a></p>
        </div>
    </form>

    <?php
        include("registrar2.php")
    ?>

</body>
</html>