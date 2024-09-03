<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/log-in.css">
</head>
<body>  
    <form action="validar_login.php" class="form" method="post">
        <h2 class="form__title">Inicia sesión</h2>
        <?php
            if(isset($_GET['error'])){
                ?>
                <p class="error p-2 text-danger"><?php echo $_GET['error'];?></p>
           <?php
            }
        ?>
        <p class="form__paragraph">¿Aún no tienes una cuenta?
        <a href="registrarse.php" class="form__link">Entra aquí</a></p>
        <div class="form__container">
            <div class="form__group">
                <input type="text" id="noombre_usuario" class="form__input" placeholder=" " name="nombre_usuario" required>
                <label for="nombre_usuario" class="form__label">Usuario:</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="password" id="contraseña" class="form__input" placeholder=" " name="contraseña" required>
                <label for="contraseña" class="form__label">Contraseña:</label>
                <span class="form__line"></span>
            </div>
            <input type="submit" class="form__submit" value="Ingresar">
            <a href="index.php" class="form__link">volver</a></p>
        </div>
    </form>

</body>
</html>