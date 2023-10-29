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
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "papeleria";

// Recuperar los datos del formulario
$id = $_POST["id"];
$nuevo_nombre = $_POST["nuevo_nombre"];
$nuevo_apellido = $_POST["nuevo_apellido"];
$nuevo_documento = $_POST["nuevo_documento"];

// Crear una conexión a la base de datos
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Consulta SQL para actualizar un registro por su ID
$sql = "UPDATE persona SET nombre = '$nuevo_nombre', apellido = '$nuevo_apellido', cedula = '$nuevo_documento' WHERE id = $id";

if ($conexion->query($sql) === TRUE) {
    echo "Registro actualizado correctamente.";
} else {
    echo "Error al actualizar el registro: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
