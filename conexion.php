
<!DOCTYPE html>
<html>
<head>
    <title>Conexión a MySQL con HTML</title>
</head>
<body>
    <h1>Conexión a MySQL con HTML</h1>
    
    <?php

$servidor = "localhost";
$base_de_datos = "papeleria";
$usuario = "root";
$contraseña = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_de_datos", $usuario, $contraseña);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// Cerrar la conexión
$conexion = null;
?>

</body>
</html>