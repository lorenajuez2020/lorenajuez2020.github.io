<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tu Título</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <!-- El contenido de tu página PHP va aquí -->
</body>
</html>

<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "papeleria";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para recuperar los datos
$sql = "SELECT * FROM personas";
$result = $conn->query($sql);

// Cierra la conexión
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Citas solicitadas</title>
</head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <h1>CITAS AGENDADAS</h1>
<body>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Motivo</th>
        </tr>
        <?php
        // Mostrar datos en la tabla
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["nombre"] . "</td><td>" . $row["cedula"] . "</td><td>" . $row["fecha"] . "</td><td>" . $row["horario"] . "</td><td>" . $row["motivo"] . "</td></tr>";
            }
        } else {
            echo "No se encontraron resultados.";
        }
        ?>
    </table>
</body>
</html>
