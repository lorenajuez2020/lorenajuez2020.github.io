<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- El contenido de tu página PHP va aquí -->
</body>
</html>
<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "papeleria";

// Crear una conexión a MySQL
$conn = new mysqli($servername, $username, $password, $database_name);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// ID del usuario que deseas eliminar (debes obtenerlo de alguna manera, por ejemplo, desde un formulario)
$user_id_to_delete = 123; // Reemplaza esto con el ID real del usuario a eliminar

// Consulta SQL para eliminar el usuario
$sql = "DELETE FROM persona WHERE id = $user_id_to_delete";

if ($conn->query($sql) === TRUE) {
    echo "Usuario eliminado con éxito.";
} else {
    echo "Error al eliminar el usuario: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
