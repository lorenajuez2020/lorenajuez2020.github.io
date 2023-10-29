<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="inserta1.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <input type="submit" value="Registrar">

    </form>

     <form action="eliminar.php" method="post">
        <label for="id">ID del registro a eliminar:</label>
        <input type="text" id="id" name="id" required><br><br>

        <input type="submit" value="Eliminar">
    </form>
    <form action="actualizar.php" method="post">
        <label for="id">ID del registro a actualizar:</label>
        <input type="text" id="id" name="id" required><br><br>

        <label for="nuevo_nombre">Nuevo Nombre:</label>
        <input type="text" id="nuevo_nombre" name="nuevo_nombre"><br><br>

        <label for="nuevo_apellido">Nuevo Apellido:</label>
        <input type="text" id="nuevo_apellido" name="nuevo_apellido"><br><br>

        <input type="submit" value="Actualizar">
    </form>
    <form action="resultado_busqueda.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido"><br><br>

        <input type="submit" value="Buscar">
    </form>
</body>
</html>





