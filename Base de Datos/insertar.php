<?php

$mysqli = new mysqli('127.0.0.1', 'root', '', 'base'); //Direcionn, root, contraseña, nombre base
if ($mysqli->connect_errno) {
    echo ("Error: " . $mysqli->connect_error);
    exit;
}
$sql = "INSERT INTO persona (Nombre, Sueldo, Fecha, Masculino, Imagen)";
$sql .= "VALUES ('Coloma Lorena' ,1500, '2001-09-01 00:00:00', 0, '015.jpg')";
if ($resultado = $mysqli->query($sql))
    echo ("Lo sentimos, este sitio esta experimentando problemas");
echo ("Sql:" . $sql . "<br>");
echo ("Error:" . $mysqli->error . "<br>");
exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Registros insertado exitosamente </h1>
</body>

</html>
<?php
//El script automaticamente liberará el resultado y cerrará la conexión 
//Pero siempre es una buena costumbre en hacerlo uno mismo
$resultado->free(); //Se libera el cursor
$mysqli->close(); // Se cierra la conexión con la base de datos
?>