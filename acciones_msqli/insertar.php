<?php
//Ejemplo de una acción de inserción usado mysqli
$mysqli = new mysqli('127.0.0.1','root','','base');
//(servidor, usuario, contraseña, base_datos)
if($mysqli->connect_errno)
{
    //Mensaje de error común
    echo("Lo sentimos, este sitio está experimentando problemas.");
    echo("Fallo de apertura de la base de datos<br>");
    echo("Errorno: ".$mysqli->connect_errno."<br>");
    echo("Error: ".$mysqli->connect_error."<br>");
    exit();
}

//Realizar consulta SQL
$sql = "INSERT INTO persona (Nombre, Sueldo, Fecha, ";
$sql .= "Masculino, Imagen) VALUES ('Sulema Margaret', ";
$sql .= "1000, '2001-09-01 00:00:00', 0, '016.jpg')";
//echo($sql);
//exit();
if(!$resultado = $mysqli->query($sql))
{
    echo("Lo sentimos, este sitio está experimentando problemas.");
    echo("No se pudo insertar el registro<br>");
    echo("Errorno: ".$mysqli->connect_errno."<br>");
    echo("Error: ".$mysqli->connect_error."<br>");
    exit();
}
?>
<html>
	<body>
		Registro insertado exitosamente
	</body>
</html>
<?php
$mysqli->close(); //Cerrar la conexión con la base de datos
?>