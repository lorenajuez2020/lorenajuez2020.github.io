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

// Crear una conexión a la base de datos
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Recuperar los datos del formulario
$cedula = $_POST["cedula"];
$clave = $_POST["clave"];

// Consulta SQL para verificar las credenciales del usuario
$sql = "SELECT * FROM persona WHERE cedula = '$cedula' AND clave = '$clave'";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    // Las credenciales son válidas, se ha iniciado sesión correctamente
    echo "Inicio de sesión exitoso. Bienvenido ";
    $mostrarBoton = true; // Define una variable para controlar si se muestra el botón o no.
} else {
    // Las credenciales no son válidas, muestra un mensaje de error
    echo "Error: Usuario o clave incorrectos. Por favor, inténtalo nuevamente.";
    $mostrarBoton = false; // Define la variable como false si las credenciales son incorrectas.
}

// Cerrar la conexión
$conexion->close();
?>
<html>
<head>
    <title>Inicio exitoso</title>
</head>
<body>
    
    <?php if ($mostrarBoton): ?>
    <!-- Botón para redirigir a otra página, se mostrará solo si $mostrarBoton es true -->
    <button onclick="redirectToPage()">Empecemos</button>
    <?php endif; ?>

    <script>
        function redirectToPage() {
            window.location.href = "paginabienvenida.html"; // Cambia "otra_pagina.html" por la URL de la página a la que deseas redirigir.
        }
    </script>
</body>
</html>
