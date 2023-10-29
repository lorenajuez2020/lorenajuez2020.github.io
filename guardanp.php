<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tu Título</title>
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
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio= $_POST["precio"];
$imagen = $_POST["imagen"];


// Crear una conexión a la base de datos
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Consulta SQL para insertar datos en la tabla
$sql = "INSERT INTO productos (nombre, descripcion, precio, imagen ) VALUES ('$nombre', '$descripcion', '$precio','$imagen')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos agregados correctamente.";
} else {
    echo "Error al agregar datos: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>