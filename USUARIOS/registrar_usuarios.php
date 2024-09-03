<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/stiloregistro.css">   
</head>
<body>
    <form class="form" method="POST">
        <h2 class="form__title">Registrar nuevos usuarios</h2>
        <div class="form__container">
            <div class="form__group">
                <input type="text" name="nombre" id="user" class="form__input" placeholder=" ">
                <label for="user" class="form__label">Usuario:</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="password" name="contraseña" id="password" class="form__input" placeholder=" ">
                <label for="password" class="form__label">Contraseña:</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="number" name="cedula" id="cedula" class="form__input" placeholder=" ">
                <label for="cedula" class="form__label">Cédula:</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="email" name="email" id="email" class="form__input" placeholder=" ">
                <label for="email" class="form__label">Email:</label>
                <span class="form__line"></span>
            </div>
            <input type="submit" name="ingreso" class="form__submit" value="Ingresar">
            <a href="Consultar_Cliente.php" class="form__link">volver</a></p>
        </div>
    </form>

    <?php
        include("../registrar.php")
    ?>

</body>
</html>