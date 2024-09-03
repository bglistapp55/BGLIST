<?php
session_start(); // Inicia la sesión

include("conexion.php"); // Incluye tu archivo de conexión

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    echo "No estás autenticado. Por favor, inicia sesión.";
    exit();
}

// Obtener el ID del usuario de la sesión
$usuario_id = $_SESSION['usuario_id'];

// Consulta para obtener el historial de actividades del usuario actual
$query = "SELECT * FROM Historial_Actividades WHERE usuario_id = '$usuario_id' ORDER BY fecha DESC";
$resultado = mysqli_query($conexion, $query);

// Mostrar el historial de actividades
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historial de Actividades</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 15px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
        strong {
            color: #000;
        }
    </style>
</head>
<body>
    <h2>Historial de Actividades</h2>
    <button><a href="inicio.php" class="volver">Volver</a></button>
    <?php
    if (mysqli_num_rows($resultado) > 0) {
        echo "<ul>";
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<li>";
            echo "<strong>Acción:</strong> " . htmlspecialchars($fila['accion']) . "<br>";
            echo "<strong>Detalles:</strong> " . htmlspecialchars($fila['detalles']) . "<br>";
            echo "<strong>Fecha:</strong> " . htmlspecialchars($fila['fecha']) . "<br>";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No hay actividades registradas.</p>";
    }
    ?>
    
    <style>
        .volver{
            padding: 10px;
            text-decoration: none;
            font-size: 1rem;
            
        }
    </style>
</body>
</html>

<?php
// Cierra la conexión
mysqli_close($conexion);
?>