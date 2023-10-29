<?php
include("conexion.php");
?>

<form action="" method="post">
	numero: <input name= "id"><br/>
	Cedula: <input name= "ce"><br/>
	Nombre: <input name= "nom"><br/>
	Apellido: <input name= "ape"><br/>
<input type="submit" >
</form>

<?php
if($_POST)
{

$c= $_POST['ce'];
$n= $_POST['nom'];
$a= $_POST['ape'];

$sql = "INSERT INTO persona (cedula, nombre, apellido) VALUES ('ce', 'nom', 'ape')";

if (mysql_query($sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//if ($conexion->query($sql) === TRUE) {
//    echo "Datos agregados correctamente.";
//} else {
//    echo "Error al agregar datos: " . $conexion->error;
//}

//mysql_query ("INSERT INTO `persona` (`id`, `cedula`, `nombre`, `apellido`) VALUES ('$i', '$c', '$n', '$a')");
//or die (mysql_error());

//echo "Dato guardado";

}


?>