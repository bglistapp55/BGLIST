<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stiloregistro4.css">
</head>
<body>
    <form class="form" method="POST">
        <h2 class="form__title">Registrar Nota</h2>
        <div class="form__container">
            <div class="form__group">
                <input type="text" name="contenido" id="contenido" class="form__input" placeholder=" ">
                <label for="contenido" class="form__label">Contenido de la nota:</label>
                <span class="form__line"></span>
            </div>
            <input type="submit" name="ingreso" class="form__submit" value="Ingresar">
            <a href="../admin.php" class="form__link">volver</a></p>
        </div>
    </form>

    <?php
        include("registrar4.php")
    ?>

</body>
</html>