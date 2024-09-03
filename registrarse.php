<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="CSS/registrarse.css">
    <style>
        .password-container {
            position: relative;
        }
        .password-container input {
            padding-right: 30px; /* Ajusta el padding para dejar espacio para el icono del ojo */
        }
        .password-container .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form class="form" method="POST">
        <h2 class="form__title">Registrarse</h2>
        <p class="form__paragraph">¿ya tienes una cuenta?
        <a href="log-in.php" class="form__link">Entra aquí</a></p>
        <div class="form__container">
            <div class="form__group">
                <input type="text" name="nombre" id="user" class="form__input" placeholder=" ">
                <label for="user" class="form__label">Usuario:</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group password-container">
                <input type="password" name="contraseña" id="password" class="form__input" placeholder=" ">
                <label for="password" class="form__label">Contraseña:</label>
                <span class="form__line"></span>
                <span class="eye-icon" onclick="togglePasswordVisibility('password')">👁️</span>
            </div>
            <div class="form__group password-container">
                <input type="password" name="confirmar_contraseña" id="confirm_password" class="form__input" placeholder=" ">
                <label for="confirm_password" class="form__label">Confirmar Contraseña:</label>
                <span class="form__line"></span>
                <span class="eye-icon" onclick="togglePasswordVisibility('confirm_password')">👁️</span>
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
            <a href="index.php" class="form__link">volver</a></p>
        </div>
    </form>

    <?php include("registrar.php"); ?>

    <script>
        function togglePasswordVisibility(id) {
            var passwordInput = document.getElementById(id);
            var type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
        }
    </script>
</body>
</html>