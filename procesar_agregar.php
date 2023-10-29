<?php
// Configuración de la conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "papeleria";

// Recuperar los datos del formulario
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["cedula"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

// Crear una conexión a la base de datos
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Consulta SQL para agregar un registro
$sql = "INSERT INTO personas (nombre, apellido, cedula, usuario, clave) VALUES ('$nombre', '$apellido', '$cedula', '$usuario', '$clave')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro agregado correctamente.";
} else {
    echo "Error al agregar el registro: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>