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

// Recuperar los criterios de búsqueda del formulario
$id = $_POST["id"];


// Crear una conexión a la base de datos
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Consulta SQL para buscar registros que coincidan con los criterios de búsqueda
$sql = "SELECT * FROM persona WHERE id LIKE '%$id%' ";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<h2>Resultados de la búsqueda:</h2>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"] . "<br>";
        echo "Nombre: " . $fila["nombre"] . "<br>";
        echo "Apellido: " . $fila["apellido"] . "<br><br>";
         echo "cedula: " . $fila["cedula"] . "<br><br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conexion->close();
?>
