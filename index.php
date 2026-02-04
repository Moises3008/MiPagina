<?php
// Configuración de la conexión (la editaremos más adelante para InfinityFree)
$host = "localhost";
$user = "root";
$pass = "";
$db   = "formulario";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $sql = "INSERT INTO usuarios (nombre) VALUES ('$nombre')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<p>Usuario guardado con éxito.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Básico</title>
</head>
<body>
    <h1>Registro de Usuarios</h1>
    <form method="POST" action="">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>