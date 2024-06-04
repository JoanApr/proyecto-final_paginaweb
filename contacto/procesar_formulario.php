<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Formulario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <h2>Información procesada</h2>

    <?php
    // Verificar si se han enviado datos desde el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener datos del formulario
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $numero_contacto = $_POST["numero_contacto"];
        $mensaje = $_POST["mensaje"];
        
        // Mostrar la información en una tabla
        echo "<table>";
        echo "<tr><th>Campo</th><th>Valor</th></tr>";
        echo "<tr><td>Nombre</td><td>$nombre</td></tr>";
        echo "<tr><td>Correo electrónico</td><td>$correo</td></tr>";
        echo "<tr><td>Número de contacto</td><td>$numero_contacto</td></tr>";
        echo "<tr><td>Mensaje</td><td>$mensaje</td></tr>";
        echo "</table>";
    } else {
        // Si no se han enviado datos, mostrar un mensaje
        echo "<p>No se han recibido datos del formulario.</p>";
    }
    ?>

</body>
</html>
