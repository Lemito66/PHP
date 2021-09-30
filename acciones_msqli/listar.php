<?php
//Ejemplo de una acción de selección usado mysqli
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
$sql = "SELECT * FROM persona ORDER BY Id";
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
if ($resultado->num_rows == 0)
{
    echo("La consulta no ha devuelto registros<br>");
    exit();
}
//En este punto sabemos que hay resultados para la consulta.
?>
<html>
	<body>
		<h1>Personas encontradas:</h1>
        <?php
            while($persona = $resultado->fetch_assoc())
            {
                echo("<li>".$persona['Id']."&nbsp;&nbsp");
                echo($persona['Nombre']."&nbsp;&nbsp");
                echo($persona['Sueldo']."</li>\n");
            }
        ?>
	</body>
</html>
<?php
$mysqli->close(); //Cerrar la conexión con la base de datos
?>