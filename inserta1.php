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
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["cedula"];
$clave = $_POST["clave"];

// Crear una conexión a la base de datos
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Consulta SQL para insertar datos en la tabla
$sql = "INSERT INTO persona (nombre, apellido, cedula, clave) VALUES ('$nombre', '$apellido', '$cedula', '$clave')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos agregados correctamente.";
} else {
    echo "Error al agregar datos: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro Exitoso</title>
</head>
<body>
    <h1>¡Registro Exitoso!</h1>
    <p>Tu cuenta ha sido creada con éxito.</p>
    
    <!-- Botón para redirigir a otra página -->
    <button onclick="redirectToPage()">Iniciar Sesion</button>

    <script>
        function redirectToPage() {
            window.location.href = "iniciosesion.html"; // Cambia "otra_pagina.html" por la URL de la página a la que deseas redirigir.
        }
    </script>
</body>
</html>












