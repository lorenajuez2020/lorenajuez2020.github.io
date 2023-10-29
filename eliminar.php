<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>

</html>

<?php
// Configuración de la conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "papeleria";

// Recuperar el ID del registro a eliminar desde el formulario
$id = $_POST["id"];

// Crear una conexión a la base de datos
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Consulta SQL para eliminar un registro por su ID
$sql = "DELETE FROM persona WHERE id = $id";



if ($conexion->query($sql) === TRUE) {
    echo "Registro eliminado correctamente.";
} else {
    echo "Error al eliminar el registro: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
