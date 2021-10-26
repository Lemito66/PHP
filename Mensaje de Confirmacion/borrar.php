<?php
include ("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Numero de habitantes</th>
                <th>País</th>
                <th>Opciones</th>
            </tr>
            <?php
            

            $query = mysqli_query($conn, "SELECT id, nombre, n_personas,pais FROM personas");
            while ($registro = mysqli_fetch_array($query)){
                echo ('<tr>');
                    echo ('<td>' . $registro['nombre'] . '</td>');
                    echo ('<td>' . $registro['n_personas'] . '</td>');
                    echo ('<td>' . $registro['pais'] . '</td>');
    
                echo ('</tr>');

            }
            ?>
        </table>
    </div>
</body>

</html>