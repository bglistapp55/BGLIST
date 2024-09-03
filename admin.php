<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <link rel="stylesheet" href="CSS/admin.css">
</head>
<body>
  <header class="header">
    <a href="admin.php" class="header__logo">
      BG LIST ADMIN
    </a>
    <nav class="header__nav">
      <ul class="nav__list">
        <li class="nav__item"><a href="admin.php" class="nav__link">Inicio</a></li>
        <li class="nav__item"><a href="#sobre" class="nav__link">Sobre nosotros</a></li>
        <li class="nav__item"><a href="cerrar_sesion.php" class="nav__link">Cerrar sesión</a></li>
      </ul>
    </nav>
  </header>

  <main class="main">
    <div class="main__links">
      <a href="USUARIOS/Consultar_Cliente.php" class="main__link" style="background-image: url('https://img.freepik.com/fotos-premium/1970-detective-rabbit-glitchpunk-bunny-empresario-estilo-pop-art_899449-31581.jpg');">
        <div class="main__link-content">
          Usuarios
        </div>
      </a>
      <a href="CATEGORIAS/Consultar_Categoria.php" class="main__link" style="background-image: url('https://www.artechdigital.net/wp-content/uploads/2018/03/categor%C3%ADas-y-las-etiquetas.jpg');">
        <div class="main__link-content">
          Categorías
        </div>
      </a>
      <a href="TAREAS/Consultar_Tarea.php" class="main__link" style="background-image: url('https://tiyolischool.edu.mx/wp-content/uploads/2019/02/tiyoli-school-las-primeras-tareas-del-nino-como-ayudarlo.jpg');">
        <div class="main__link-content">
          Tareas
        </div>
      </a>
      <a href="NOTAS/Consultar_Nota.php" class="main__link" style="background-image: url('https://us.123rf.com/450wm/djvstock/djvstock2305/djvstock230500392/203592928-p%C3%A1gina-de-cuaderno-en-blanco-con-l%C3%A1piz-y-borrador.jpg?ver=6');">
        <div class="main__link-content">
          Notas
        </div>
      </a>
    </div>
  </main>

  <footer class="footer" id="sobre">
    <div class="footer__icons">
      <a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank" class="facebook">
        <img src="IMG/svg/facebook.svg" alt="">
      </a>
      <a href="https://www.instagram.com/?hl=es-la" target="_blank" class="instagram">
        <img src="IMG/svg/instagram.svg" alt="">
      </a>
      <a href="https://x.com/?lang=en" target="_blank" class="twitter">
        <img src="IMG/svg/twitter-x.svg" alt="">
      </a>
      <a href="https://web.whatsapp.com/" target="_blank" class="whatsapp">
        <img src="IMG/svg/whatsapp.svg" alt="">
      </a>
    </div>
  </footer>
</body>
</html>