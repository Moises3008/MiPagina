<?php
// Configuración de la conexión (la editaremos más adelante para InfinityFree)
$host = "mipaginaweb.infinityfreeapp.com"; // Ej: sql304.infinityfree.com
$user = "if0_41068605";             // Tu usuario de la imagen
$pass = "h0Q8DhNenh";  // La que usas para entrar a InfinityFree
$db   = "if0_41068605_formulario";  // El nombre completo de la BD que creaste

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


