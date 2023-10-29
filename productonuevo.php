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
$sql = "SELECT * FROM productos ";
$result = $conn->query($sql);

// Cierra la conexión
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <!-- Inclusión de la biblioteca jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.12/jspdf.plugin.autotable.min.js"></script>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Imagen</th>
        </tr>
        <?php
        // Mostrar datos en la tabla
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["descripcion"] . "</td>";
                echo "<td>" . $row["precio"] . "</td>";
                echo "<td><img src='" . $row["imagen"] . "' alt='Imagen del producto'></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No se encontraron resultados.</td></tr>";
        }
        ?>
    </table>

    <!-- Enlace para descargar como PDF -->
    <a href="#" id="descargarPDF">Descargar como PDF</a>

    <script>
        document.getElementById('descargarPDF').addEventListener('click', function (event) {
            event.preventDefault();  // Evita que el enlace se comporte como un enlace normal
            const pdf = new jsPDF();
            pdf.autoTable({ html: 'table' });
            pdf.save('tabla_productos.pdf');
        });
    </script>
</body>
</html>
