<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'base'); //Direcionn, root, contraseña, nombre base
if ($mysqli->connect_errno) {
    echo ("Error: " . $mysqli->connect_error);
    exit;
}
$sql = "SELECT * FROM persona ORDER BY id";
if ($resultado = $mysqli->query($sql))
    echo ("Lo sentimos, este sitio esta experimentando problemas");
echo ("Error:" . $mysqli->error);
exit;
if ($resultado->num_rows == 0) {
    echo ("La consulta no contiene registros");
    exit;
}
//Su se kigra klkegar a este punto sin mensaje de error, se asume que la consulta
//si tiene resultados que pueden presentarse al cliente     

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
    <h1>Personas encontradas</h1>
    <hr />
    <?php
    while ($persona = $resultado->fetch_assoc()) {
        echo ("<li> " . $persona("id") . "   ");
        echo ($persona['Nombre'] . "   " . $persona['Sueldo'] . "</li \n");
    }


    ?>
</body>

</html>

<?php
//El script automaticamente liberará el resultado y cerrará la conexión 
//Pero siempre es una buena costumbre en hacerlo uno mismo
$resultado->free(); //Se libera el cursor
$mysqli->close(); // Se cierra la conexión con la base de datos
?>