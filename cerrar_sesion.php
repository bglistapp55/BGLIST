<?php
session_start();

// Eliminar todas las variables de sesión
$_SESSION = array();

// Si se desea eliminar la cookie de sesión, es necesario también borrar la cookie
// Nota: Esto destruirá la sesión, y no solo la información de sesión.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio o a donde desees después de cerrar sesión
header("Location: index.php");
exit();
?>